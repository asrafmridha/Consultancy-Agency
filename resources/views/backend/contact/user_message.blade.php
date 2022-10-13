@extends('backend.mastaring.master')
 
@section('clientmessage','active')

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

<div class="card-body">

    <div class="btn-group">
        
        <a data-toggle="modal" data-target="#import_form" class="end btn btn-success"
            href="">Import</a>
        <button id="all_action"
            class="d-none btn btn-danger dropdown-toggle waves-effect waves-float waves-light"
            type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            All Action
        </button>
        <div data-toggle="modal" data-target="#mass_delete_modal" class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
            <a  class="dropdown-item">Mass Delete</a>

            <form action="">
                <input type="hidden" name="id" id="export_id">
                <button type="submit" class=" dropdown-item">Mass Export</button>
            </form>
        </div>
    </div>
    <form action="{{ route('message.date.filter') }}" method="GET">
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
    <form action="{{ route('message.table.search') }}"  method="GET">
         <div class="row align-items-md-center">
            <div class="col-md">
                <div class="form-group mb-md-0">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control table_search" placeholder="Search Here By Name Or Email" required>
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

    <!-- White Tables start -->
<div class="row" id="dark-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User Message  ({{ $data->count() }})</h4>     
            </div>
                {{-- <button style="width: 100px" type="submit"  class=" mb-1 btn btn-danger dropdown-item " data-toggle="modal" data-target="#deleteModal"> Delete</button>    --}}
            <div class="table-responsive">
                <table class="table table-white " >
                    <thead>
                        @if($data->isEmpty())
                        <h2 class="d-inline  alert alert-danger offset-5"  >Data Not Found</h2>
                        
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
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr> 
                                <td>
                                    {{-- <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input all_checkbox" name="select_individual[]" id="single-select-{{ $item->id }}">
                                        <label class="custom-control-label" for="single-select-{{ $item->id }}"></label>
                                    </div> --}}

                                    <div class="custom-control custom-control-primary custom-checkbox">
                                        <input type="checkbox" class="custom-control-input select_item"
                                            id="service_select_{{ $item->id }}">
                                        <label class="custom-control-label text-white"
                                            for="service_select_{{ $item->id }}"></label>
                                    </div>
                                </td>
                                <td>
                                   {{ $item->customer_name }} 
                                </td>
                                <td>{{ $item->customer_email }} </td>
                                <td>
                                    {{ $item->customer_message }}
                                 
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm text-dark dropdown-toggle hide-arrow" data-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                <div class="dropdown-menu">
                                    <button data-target="#deleteModalmesssage_{{ $item->id }}" data-toggle="modal" type="button" class="dropdown-item" href="javascript:void(0);">
                                        <i data-feather="trash" class="mr-50"></i>
                                            <span>Delete</span>
                                    </button>
                                </div>
                                </div>                                  
                                </td>
                            </tr>         
<!-- Modal for Messsage delete -->
<div class="modal fade" id="deleteModalmesssage_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.message.delete', $item->id
                    ) }}" method="post">
                @csrf
                @method("delete")
                    Are you sure want to delete this Service? 
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary deletemodalservicebutton">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div> 
       @endforeach 
       @endif                     
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

   
   
    <!-- White Tables end -->

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

     <!-- Bulk Delete Modal -->
     <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                        Are you sure want to delete this Service? 
                    <div class="modal-footer">
                        <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button id="delete_all" type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    {{-- new <Section></Section> --}}

    <div class="modal fade text-left" id="import_form" tabindex="-1" aria-labelledby="myModalLabel33"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Inline Login Form</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{  }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <label>Upload Your Expoted File </label>
                        <div class="form-group">
                            <input type="file" name="exported_file" class="form-control">
                            @error('exported_file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit"
                            class="btn btn-primary waves-effect waves-float waves-light">Submit</button>
                    </div>
                </form>
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
                        url: "{{ route('admin.message.mass_delete') }}",
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
                        url: "{{ route('admin.service.mass_delete') }}",
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


      
