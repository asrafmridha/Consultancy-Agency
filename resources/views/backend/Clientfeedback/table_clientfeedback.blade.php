@extends('backend.mastaring.master')
@section('feedback','active')
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Feedback Table </a>
            </li>
        </ol>
    </div>
@endsection
@section('content') 

{{-- <div class="d-flex justify-content-between">
    <div class="row">
        <form action=" {{ route('export-feedback')}} " method="POST"> 
         @csrf
            <button type="submit" class="btn btn-primary m-1">Export</button>
        </form>
        <button data-toggle="modal" data-target="#feedbackcsvModal" type="submit" class="btn btn-primary m-1 btn-sm" style="height: 40px">Import</button>    
    </div>
</div> --}}

{{-- Data Filter Start --}}
<div class="card-body">
    <div class="btn-group">   
        <a data-toggle="modal" data-target="#feedbackcsvModal" class="end btn btn-success"
            href="">Import</a>
        <button id="all_action"
            class="d-none btn btn-danger dropdown-toggle waves-effect waves-float waves-light"
            type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            All Action
        </button>
        <div  class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
            <button data-toggle="modal" data-target="#mass_delete_modal"  class="dropdown-item">Mass Delete</button>

            <form action="{{ route('feedback.mass-export') }}">
                <input type="hidden" name="id" id="export_id">
                <button type="submit" class=" dropdown-item">Mass Export</button>
            </form>
        </div>
    </div>
    <form action="{{ route('feedback.date.filter') }}" method="GET">
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
    <form action="{{ route('feedback.data.search') }}" method="GET">
         <div class="row align-items-md-center">
            <div class="col-md">
                <div class="form-group mb-md-0">
                    <div class="input-group">
                            <input required type="search" name="search" class="form-control table_search " placeholder="Search Here by Name or Designation"  value="{{old('search')}}">
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


{{-- Data Filter End  --}}
          <!-- Dark Tables start -->
<div class="row" id="white-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Total Feedback ({{ $data->count() }})</h4>
            </div>  
                <div class="table-responsive " >
                    <table class="table table-white " >
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
                                <th>Image</th>
                                <th>Short Description</th>
                                <th>Client Name</th>
                                <th>Designation</th>
                                <th>Star</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $item)
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
                                        <img height="80px" width="80px" src="{{ asset('uploads/client/'.$item->image) }}" class="mr-75" alt="something went wrong" /> 
                                    </td>
                                    <td>{!! $item->short_description  !!}</td>
                                    <td> {{ $item->client_name  }}</td>
                                    <td>  {{ $item->designation  }}</td> 
                                    <td> {{ $item->star  }} </td>             
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm text-dark dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="{{ route('feedback.updateview',$item->id) }}" class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="edit-2" class="mr-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <button data-target="#deleteModalfeedback__{{ $item->id }}" data-toggle="modal" type="submit" class="dropdown-item" href="javascript:void(0);">
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>                  
                                        </td>
                                </tr>

                     <!-- Modal for Feedback  delete -->
<div class="modal fade" id="deleteModalfeedback__{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
           
                   <div class="modal-body text-white bg-dark">
                        <form action="{{ route('feedback.destroy',$item->id) }}" method="POST">
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

                                @endforeach
                              @endif    
                            </tbody>
                        </table>
                        {{ $data->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Tables end -->

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


{{-- End mass delete modal --}}

@endsection
{{-- Modal For Import CSV  --}}
<div class="modal fade" id="feedbackcsvModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('feedback-file-import') }}" method="POST" enctype="multipart/form-data">
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
                        url: "{{ route('client.mass_delete') }}",
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
                        url: "{{ route('client.mass_delete') }}",
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
        