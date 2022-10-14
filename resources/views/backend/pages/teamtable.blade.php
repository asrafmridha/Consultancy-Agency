@extends('backend.mastaring.master')
@section('team','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Team Table </a>
            </li>
        </ol>
    </div>
@endsection
@section('content') 

{{-- <div class="d-flex justify-content-between">
    <div class="row">
        <form action=" {{ route('team-file-export')}} " method="POST"> 
         @csrf
            <button type="submit" class="btn btn-primary m-1">Export</button>
        </form>
        <button data-toggle="modal" data-target="#teamcsvModal" type="submit" class="btn btn-primary m-1 btn-sm" style="height: 40px">Import</button>    
    </div>
</div> --}}

{{-- Team Date Filter  --}}
<div class="card-body">
    <div class="btn-group">   
        <a data-toggle="modal" data-target="#teamcsvModal" class="end btn btn-success"
            href="">Import</a>
        <button id="all_action"
            class="d-none btn btn-danger dropdown-toggle waves-effect waves-float waves-light"
            type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            All Action
        </button>
        <div  class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
            <button data-toggle="modal" data-target="#mass_delete_modal"  class="dropdown-item">Mass Delete</button>

            <form action="{{ route('team.mass-export') }}">
                <input type="hidden" name="id" id="export_id">
                <button type="submit" class=" dropdown-item">Mass Export</button>
            </form>
        </div>
    </div>
    <form action="{{ route('team.date.filter') }}" method="GET">
        <div class="row align-items-end">
            <div class="col-md">
                <div class="form-group">
                    <label for="start_date">Start Date <span class="text-danger">*</span></label>
                    <input type="date" name="start_date" @isset(request()->start_date) value="{{ \Carbon\Carbon::parse(request()->start_date)->format('Y-m-d') }}" @endisset id="start_date" class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <label for="start_date">End Date <span class="text-danger">*</span></label>
                    <input type="date" @isset(request()->start_date) value="{{ \Carbon\Carbon::parse(request()->end_date)->format('Y-m-d') }}" @endisset name="end_date" id="end_date" class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
                </div>
            </div>
             <div class="col-md-auto">
                <div class="form-group">
                    <button type="submit" class="btn btn-success waves-effect w-100 w-sm-auto">Filter</button>
                </div>
            </div>
        </div>
    </form>
    <form action="{{ route('team.table.search') }}"  method="GET">
         <div class="row align-items-md-center">
            <div class="col-md">
                <div class="form-group mb-md-0">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control table_search" placeholder="Search Here By Name Or Designation" required>
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <button type="submit" class="btn btn-sm" style="height: 23px"><i data-feather='search'></i></button>
                          </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
     </form>
</div>

{{-- End Filter  --}}


<div class="row" id="dark-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Team Member ({{ $data->count() }})</h4>
            </div> 
            <div class="table-responsive">
                {{ $data->links('vendor.pagination.custom') }}
                <table class="table table-white"  >
                    <thead>
                        @if($data->isEmpty())
                        <h2 class=" d-inline offset-5 alert alert-danger">Data Not Found</h2>
                        @else
                        <tr>
                            <th>
                                <div class="custom-control custom-control-primary custom-checkbox">
                                    <input type="checkbox" class="custom-control-input select_all"
                                        id="colorCheck1">
                                    <label class="custom-control-label text-white"
                                        for="colorCheck1"></label>
                                </div> 
                            </th>
                            <th>image</th>
                            <th>name</th>  
                            <th>Designation</th>
                            <th>fb_link</th>
                            <th>twitter_link</th>
                            <th>linkedin_link</th>
                            <th>pinterest_link</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $slno=1; ?>
                            @foreach ($data as $item) 
                            <tr>
                                <td>
                                    <div class="custom-control custom-control-primary custom-checkbox">
                                    <input type="checkbox" class="custom-control-input select_item"
                                        id="service_select_{{ $item->id }}">
                                    <label class="custom-control-label text-white"
                                        for="service_select_{{ $item->id }}"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $item->name }}">
                                            <img height="80px" width="100px" src="{{ asset('uploads/team/'.$item->image) }}" alt="">
                                        </div> 
                                    </div>
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->designation }}</td>
                                <td>{{ $item->fb_link }}</td>
                                <td>{{ $item->twitter_link }}</td>
                                <td>{{ $item->linkedin_link }}</td>
                                <td>{{ $item->pinterest_link }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm text-dark dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <button data-target="#updateModalteam__{{ $item->id }}" data-toggle="modal" type="submit" class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="edit-2" class="mr-50"></i>
                                                <span>Edit</span>
                                            </button>
                                            <button data-target="#deleteModalteam__{{ $item->id }}" data-toggle="modal" type="submit" class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </td>

                                <!-- Modal for Service Update -->
                                <div class="modal fade" id="updateModalteam__{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        
                                            <div class="modal-body">
                                                <form action="{{ Route('admin.team.update',$item->id) }}"  method="POST" enctype="multipart/form-data" >
                                                        @csrf
                                                        <label for="">Old Image</label>
                                                        <img height="100px" width="100px" src="{{ asset('uploads/team/'.$item->image) }}" alt="img nai">
                                                        <input type="file" name="image" class="mt-3 form-control name">
                                                        @error('image')
                                                        <div class="alert alert-danger">
                                                            {{$message}}
                                                        </div>  
                                                        @enderror
                                                        <input type="text" name="name" value="{{ $item->name }}" class="mt-3 form-control name" placeholder="Enter Team Member name">
                                                        @error('name')
                                                        <div class="alert alert-danger">
                                                            {{$message}}
                                                        </div>  
                                                        @enderror

                                                        <input type="text" name="designation" class="mt-3 form-control image"
                                                        placeholder="Enter Designation" value="{{ $item->designation }}">
                                                        @error('designation')
                                                        <div class="alert alert-danger">
                                                            {{$message}}
                                                        </div>  
                                                        @enderror
                                                        <input type="text" name="fb_link" class="mt-3 form-control" placeholder="Enter  Fb link here" value="{{ $item->fb_link }}">
                                                        @error('fb_link')
                                                        <div class="alert alert-danger">
                                                    
                                                            {{$message}}
                                                        </div>  
                                                        @enderror
                                        
                                                        <input type="text" name="twitter_link" class="mt-3 form-control" placeholder="Enter  Twitter link here" value="{{ $item->twitter_link }}">
                                        
                                                        @error('twitter_link')
                                                        <div class="alert alert-danger">
                                                    
                                                            {{$message}}
                                                        </div>  
                                                        @enderror
                                        
                                                        <input type="text" name="linkedin_link" class="mt-3 form-control" placeholder="Enter  Linkedin link here" value="{{ $item->linkedin_link }}">
                                                        @error('linkedin_link')
                                                        <div class="alert alert-danger">
                                                    
                                                            {{$message}}
                                                        </div>  
                                                        @enderror
                                                        <input type="text" name="pinterest_link" class="mt-3 form-control" placeholder="Enter  Pinterest link here" value="{{ $item->pinterest_link }}">
                                                
                                                        @error('pinterest_link')
                                                        <div class="alert alert-danger">
                                                    
                                                            {{$message}}
                                                        </div>  
                                                        @enderror
                                                        <div class="modal-footer">
                                                            <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                            <button type="submit" class="btn btn-primary deletemodalservicebutton">Update</button>
                                                        </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- End Modal  --}}

                                <!-- Modal for Service delete -->
                                <div class="modal fade" id="deleteModalteam__{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                        
                                            <div class="modal-body text-white bg-dark">
                                                <form action="{{ route('admin.teamdata.destroy',$item->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                    Are you sure want to delete this Service?
                                                    <div class="modal-footer">
                                                        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                                        <button type="submit" class="btn btn-primary deletemodalservicebutton">Confirm</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach 
                        @endif
                    </tbody>
                </table>
                {{ $data->links('vendor.pagination.custom') }}
            </div>  
        </div>
    </div>
</div>

{{-- modal for mass delete  --}}

<div class="modal fade text-left" id="mass_delete_modal" tabindex="-1" aria-labelledby="myModalLabel33"
 style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="p-3 text-center">
                <h1 class="text-danger">Are your sure?</h1>
                <p>You want to delete this</p>
            </div>
            <a id="mass_delete" class="btn btn-danger">DELETE</a>
        </div>
    </div>
</div>
 
@endsection
        {{-- Modal For Import CSV  --}}
<div class="modal fade" id="teamcsvModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('team-file-import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="file" name="file" class="mt-3 form-control import" >
                    @error('file')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>  
                    @enderror 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
                </form>
        </div>
    </div>
</div>

@section('js')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //select all feature
            $('.select_all').change(function() {
                ids = []
                if ($(this).is(":checked")) {
                    $('.select_item').prop('checked', true);
                    $('.select_item').each(function() {
                        ids.push($(this).attr('id').split('_')[2]);
                    });
                    if (ids.length == 0) {
                        $('#all_action').addClass('d-none');
                    } else {
                        $('#all_action').removeClass('d-none');
                        $('#export_id').val(ids);
                    }
                } else {
                    $('.select_item').prop('checked', false);
                    $('#all_action').addClass('d-none');
                }
                // $(document).on('click', '#mass_delete', function(){
                $('#mass_delete').click(function() {
                    $.ajax({
                        type: 'get',
                        url: "{{ route('team.mass_delete') }}",
                        data: {
                            'ids': ids
                        },
                        success: function(response) {
                            if (response.success) {
                                toastr.success(response.success);
                                $('#all_action').addClass('d-none');
                                window.location.reload();
                            }
                        }
                    })
                });
            });
            //individual select feature
            $('.select_item').change(function() {
                ids = []
                $('.select_item').each(function() {
                    if ($(this).is(":checked")) {
                        ids.push($(this).attr('id').split('_')[2]);
                    }
                });
                if (ids.length == 0) {
                    $('#all_action').addClass('d-none');
                    $('.select_all').prop('checked', false);
                } else {
                    $('#all_action').removeClass('d-none');
                    $('#export_id').val(ids);
                }
                $(document).on('click', '#mass_delete', function(e) {
                    $.ajax({
                        type: 'get',
                        url: "{{ route('team.mass_delete') }}",
                        data: {
                            'ids': ids
                        },
                        success: function(response) {
                            if (response.success) {
                                toastr.success(response.success);
                                $('#all_action').addClass('d-none');
                                window.location.reload();
                            }
                        }
                    })
                });
            });
            // // seach
            // $('#search').keyup(function() {
            //     var value = $(this).val().toLowerCase();
            //     $('#service_table tr').filter(function() {
            //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            //     });
            // });
            //service search
            $('#search').keyup(function(){
                var value = $(this).val();
                $.ajax({
                    type:'get',
                    url:"{{ route('admin.service.search') }}",
                    data:{'value':value},  
                    success:function(response){                  
                            $('#data_table').html(response);
                    }
                });
            });
        });
    </script>
@endsection






     


