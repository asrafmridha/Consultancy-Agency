@extends('backend.mastaring.master')
 
@section('service','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Service Table </a>
            </li>
        </ol>
    </div>
@endsection
@section('content') 
{{-- 
<div class="d-flex justify-content-between">
  <div class="row">
      <form action=" {{ route('service-export')}} " method="POST"> 
       @csrf
          <button type="submit" class="btn btn-primary m-1">Export</button>
      </form>
      <button data-toggle="modal" data-target="#csvModal" type="submit" class="btn btn-primary m-1 btn-sm" style="height: 40px">Import</button>    
  </div>
</div> --}}
 {{-- Data Filter Start  --}}
<div class="card-body">

    <div class="btn-group mb-2">
        
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

            <form action="{{ route('service.mass-export') }}">
                <input type="hidden" name="id" id="export_id">
                <button type="submit" class=" dropdown-item">Mass Export</button>
            </form>
        </div>
    </div>
    <form action="{{ route('service.date.filter') }}" method="GET">
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
                  <input  type="date" @isset(request()->start_date) value="{{ \Carbon\Carbon::parse(request()->end_date)->format('Y-m-d') }}" @endisset name="end_date" id="end_date" class="form-control flatpickr-human-friendly" placeholder="dd/mm/yyyy">
              </div>
          </div>

            <div class="col-md-auto">
                <div class="form-group">
                    @if (Route::is('service.date.filter'))
                        <a href="{{ route('admin.servicetableview') }}"
                            class="btn btn-danger waves-effect mt-1 mt-sm-0 w-100">Clear</a>
                    @else
                        <button type="submit"
                            class="btn btn-success waves-effect w-100">Filter</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </form>
    
    <form action="{{ route('service.table.search') }}" method="GET">
       <div class="row align-items-md-center">
          <div class="col-md">
              <div class="form-group mb-md-0">
                  <div class="input-group">
                      <input type="search" name="search" class="form-control table_search" placeholder="Search Here">
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

<!-- White Tables start -->
<div class="row mt-2" id="dark-table">
  <div class="col-12">
      <div class="card">
          <div class="table-responsive">
            
              <table class="table table-white " >
                  <thead>
                    @if($alldata->isEmpty())
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
                        <th class="text-dark">Icon</th>
                        <th class="text-dark">Title</th>
                        <th class="text-dark">Short Description</th>
                        <th class="text-dark">Button Text</th>
                        <th class="text-dark">Details</th>
                        <th class="text-dark">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                   @foreach ($alldata as $item)
                    <tr>
                        <td>
                        <div class="custom-control custom-control-primary custom-checkbox">
                            <input type="checkbox" class="custom-control-input select_item"
                                id="service_select_{{ $item->id }}">
                            <label class="custom-control-label text-white"
                                for="service_select_{{ $item->id }}"></label>
                        </div>
                    </td>
                    <td>      {{ $item->icon   }}                  </td>
                    <td>      {{ $item->title  }}</td>
                    <td>      {!! $item->Short_description !!}    </td>
                    <td>      {{ $item->button_text }}             </td>
                    <td><a class="btn btn-primary btn-sm" href="{{ route('service.details',$item->id) }}">See Details</a></td>
                    <td>
                      <div class="dropdown">
                             <button type="button" class="btn btn-sm text-dark dropdown-toggle hide-arrow" data-toggle="dropdown">
                             <i data-feather="more-vertical"></i>
                             </button>
                            <div class="dropdown-menu">
                                  <a  href="{{ route('service.edit',$item->id) }}"   class="dropdown-item" href="javascript:void(0);">
                                  <i data-feather="edit-2" class="mr-50"></i>
                                  <span>Edit</span>
                                  </a>
                                  <button data-target="#deleteModalteam_{{ $item->id }}" data-toggle="modal" type="button" class="dropdown-item" href="javascript:void(0);"data-category="{{ $item->id }}">
                                  <i data-feather="trash" class="mr-50"></i>
                                  <span>Delete</span>
                                  </button>
                            </div>
                      </div>
                  </td>

                  {{-- Modal For Delete  --}}
                  <div class="modal fade" id="deleteModalteam_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                  <div class="modal-body">
                                      <form action="{{ route('admin.deleteservice', $item->id
                                      ) }}" method="post">
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

                  {{-- End Modal  --}}
                    </tr>
                    @endforeach    
                    @endif 
                  </tbody>
              </table>
            
              {{-- {{ $alldata->links() }}  --}}
          </div>
      </div>
  </div>
</div>
<!-- White Tables end -->


{{-- modal for Import Csv  --}}
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
        <form action="{{ route('service-file-import') }}" method="post" enctype="multipart/form-data">
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
                        url: "{{ route('service.mass_delete') }}",
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
                        url: "{{ route('service.mass_delete') }}",
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