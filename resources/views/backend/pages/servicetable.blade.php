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
<div class="row" >
  <div class="col-md-8 ">
    <form action="{{ route('service-export')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="container">
        <div class="row mb-3">
            <div class="col-md-12  text-right">
                <button type="submit" class="btn btn-primary">Export</button>
            </div>
        </div>
      </div>
    </form>
  </div>

<div class="col-md-1">
      <div class="container">
          <div class="row mb-3">
              <div class="col-md-12  text-right">
                  <button data-toggle="modal" data-target="#csvModal" type="submit" class="btn btn-primary">Import</button>
              </div>
          </div>
      </div>
</form>
</div>
</div>
 {{-- Data Filter Start  --}}
<div class="card-body">
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
    <form action="{{ route('service.table.search') }}" method="GET">
       <div class="row align-items-md-center">
          <div class="col-md">
              <div class="form-group mb-md-0">
                  <div class="input-group">
                      <input type="search" name="search" class="form-control table_search" placeholder="Search Here">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <button type="submit"><i data-feather='search'></i></button>
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
<div class="row" id="dark-table">
  <div class="col-12">
      <div class="card">
          <div class="table-responsive">
              <table class="table table-white">
                  <thead>
                    @if($alldata->isEmpty())
                        <th><h2 class="alert alert-danger">Data Not Found</h2></th>
                        @else  
                      <tr> 
                        <th class="text-dark">Icon</th>
                        <th class="text-dark">Title</th>
                        <th class="text-dark">Short Description</th>
                        <th class="text-dark">Button Text</th>
                        <th class="text-dark">Short Description 2</th>
                        <th class="text-dark">advise</th>
                        <th class="text-dark">advisor_name</th>
                        <th class="text-dark">Heading</th>
                        <th class="text-dark">point</th>
                        <th class="text-dark">Image</th>
                        <th class="text-dark">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                   @foreach ($alldata as $item)
                    <tr>
                    <td>      {{ $item->icon   }}                  </td>
                    <td>      {{ $item->title  }}</td>
                    <td>      {!! $item->Short_description !!}    </td>
                    <td>      {{ $item->button_text }}             </td>
                    <td>      {!! $item->short_description2 !!}    </td>
                    <td>      {{ $item->advise }}                  </td>
                    <td>      {{ $item->advisor_name}}             </td>
                    <td>      {{ $item->heading  }}                </td>
                    <td>      {!! $item->point !!}                 </td>
                    <td><img height="80px" width="120px" src="{{ asset('uploads/service/'.$item->image) }}" alt=""> </td> 

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
              {{ $alldata->links() }} 
          </div>
      </div>
  </div>
</div>
<!-- White Tables end -->



      
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

        <form action="{{ route('service-file-import') }}" method="POST" enctype="multipart/form-data">
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

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  // jQuery(document).ready(function(){

  //   show();
  //   function show(){
  //     $.ajax({
  //       type: "GET",
  //       url: "/admin/servicetabledata",
  //       dataType: "JSON",
  //       success: function (response) {
  //        var data = "";
  //         $.each(respons.alldata, function (key, item) { 

  //           data+='<tr>\
  //             <td>'+item.title+'</td>\
  //             <td>'+item.Short_description+'</td>\
  //             <td>'+item.button_text+'</td>\
  //               <td><button id="updatebtn" value="'+item.id+'" class="updateproduct btn btn-success btn-sm" data-toggle="modal" data-target="#updateproduct"><i class="fa fa-edit"></i></button> </td>\
  //               <td> <button value="'+item.id+'" class="deleteproduct btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModalproduct"><i class="fa fa-trash"></i></button></td>\
  //             </tr>';
             
  //         });
  //       }
  //     });

  //     jQuery(".servicetable").html(data);


  //   }

  });

  $('.table_search').on('input', function(){
                var tableSearchValue = $(this).val();
                $(this).closest(".card-body").find(".table tbody tr").each(function(){
                    if($(this).text().search(new RegExp(tableSearchValue, "i")) < 0){
                        $(this).hide();
                    }
                    else{
                        $(this).show();
                    }
                });
            });

 </script>