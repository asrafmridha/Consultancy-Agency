@extends('backend.mastaring.master')
 
@section('recentwork','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Recent Work Table </a>
            </li>
        </ol>
    </div>
@endsection
@section('content')
{{-- 
<div class="d-flex justify-content-between">
    <div class="row">
        <form action=" {{ route('recentwork-file-export')}} " method="POST"> 
         @csrf
            <button type="submit" class="btn btn-primary m-1">Export</button>
        </form>
        <button data-toggle="modal" data-target="#csvModal" type="submit" class="btn btn-primary m-1 btn-sm" style="height: 40px">Import</button>    
    </div>
</div> --}}

{{-- Date Filter  --}}

<div class="card-body">
    <div class="btn-group mb-2">
        <a data-toggle="modal" data-target="#csvModal" class="end btn btn-success"
            href="">Import</a>
            <button id="all_action"
            class="d-none btn btn-danger dropdown-toggle waves-effect waves-float waves-light"
            type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            All Action
            </button>
        <div  class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
            <button data-toggle="modal" data-target="#mass_delete_modal" class="dropdown-item">Mass Delete</button>
            <form action="{{ route('recentwork.mass-export') }}">
                <input type="hidden" name="id" id="export_id">
                <button type="submit" class=" dropdown-item">Mass Export</button> 
            </form>
        </div>
        
    </div>
    <form action="{{ route('recentwork.date.filter') }}" method="GET">
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
                    @if (Route::is('recentwork.date.filter'))
                        <a href="{{ route('admin.managerecentwork') }}"
                            class="btn btn-danger waves-effect mt-1 mt-sm-0 w-100">Clear</a>
                    @else
                        <button type="submit"
                            class="btn btn-success waves-effect w-100">Filter</button>
                    @endif
                </div>
            </div>
      </div>
    </form>
    <form action="{{ route('recentwork.data.search') }}" method="GET">
        <div class="row align-items-md-center">
            <div class="col-md">
                <div class="form-group mb-md-0">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control table_search" placeholder="Search Here" required>
                        <div class="input-group-append">
                            <span class="input-group-text">
                            <button  type="submit" class="btn btn-sm " style="height: 23px" ><i data-feather='search'></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
      </div> 
  </form>
</div>

{{-- End Date Filter  --}}

<div class="row" id="dark-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
               <h4 class="card-title">Recent Work ({{ $data->count() }})</h4>
            </div>
                <div class="table-responsive">
                     <table class="table table-white">
                        <thead>
                            @if($data->isEmpty())
                            <th><h2 class="alert alert-danger">Data Not Found</h2></th>
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
                                <th class="text-dark">Image</th>
                                <th class="text-dark">Title</th>
                                <th class="text-dark">Short Description</th>
                                <th colspan="2" class="text-dark">Action</th>
                            </tr>
                            </thead>
                            <tbody class="servicetable">
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
                                    <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $item->title }}">
                                      <img height="80px" width="100px" src="{{ asset('uploads/recentwork/'.$item->image) }}" alt="">
                                    </div> 
                                </div>
                                </td>
                                <td class="text-dark">{{ $item->title }}</td>
                                <td class="text-dark">{!! $item->short_description  !!}  </td> 
                                <td>
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm text-dark dropdown-toggle hide-arrow" data-toggle="dropdown">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button data-target="#recentworkupdatemodal__{{ $item->id }}" data-toggle="modal" type="submit" class="dropdown-item" href="javascript:void(0);">
                                        <i data-feather="edit-2" class="mr-50"></i>
                                        <span>Edit</span>
                                    </button>
                                    <button data-target="#deleterecentworkModal_{{ $item->id }}" data-toggle="modal" type="button" class="dropdown-item" href="javascript:void(0);"   data-category="{{ $item->id }}">
                                      <i data-feather="trash" class="mr-50"></i>
                                      <span>Delete</span>
                                  </button>
                                </div>
                            </div>
                        </tr> 
                     {{-- Modal for Recent work Update  --}}
                <div class="modal fade" id="recentworkupdatemodal__{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.updaterecentwork',$item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf       
                                    <img height="100px" width="100px" src="{{ asset('uploads/recentwork/'.$item->image) }}" alt="">
                                    <input type="file" name="image" class="form-control mt-1">
                                    <label for="title">Enter Title Here</label>
                                    <input value="{{ $item->title }}" name="title" type="text"  class=" title form-control name" placeholder="Enter title name">
                                    @error('title')
                                        <div class="alert alert-danger">
                                           {{$message}}
                                        </div>  
                                    @enderror
                                    <label for="title" class="mt-1">Enter Short Description Here</label>
                                    <input value="{{ $item->short_description }}" name="short_description" type="text"  class=" title form-control name" placeholder="Enter Team Member name">
                                    @error('short_description')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>  
                                    @enderror
   
                                    <div class="modal-footer">
                                            <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                            <button type="submit" class="serviceupdatebutton btn btn-primary deletemodalservicebutton">Confirm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 

                    {{-- End Modal  --}}
                <!-- Modal for recent Work delete -->
                    <div class="modal fade" id="deleterecentworkModal_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.deleterecentwork', $item->id) }}" method="post">
                                    @csrf
                                    @method("delete")
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
                @endforeach
                @endif
                        </tbody>
                    </table> 
            </div>
        </div>
    </div>
</div>
      
    
<!-- Modal For Import CSV -->
<div class="modal fade" id="csvModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                        <form action="{{ route('recentwork-file-import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <input type="file" name="file" class="mt-3 form-control import" >  
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
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
                        url: "{{ route('recentwork.mass_delete') }}",
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
                        url: "{{ route('recentwork.mass_delete') }}",
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








 


