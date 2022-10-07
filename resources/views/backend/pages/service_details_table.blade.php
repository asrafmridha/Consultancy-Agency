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
                <a href="">Service Table Details </a>
            </li>
        </ol>
    </div>
@endsection

@section('content')

<!-- White Tables start -->
<div class="row" id="dark-table">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive" >
                <table class="table table-white" >
                    <thead>
                        <tr> 
                            <th class="text-dark">Short Description 2</th>
                            <th class="text-dark">advise</th>
                            <th class="text-dark">advisor_name</th>
                            <th class="text-dark">Heading</th>
                            <th class="text-dark">point</th>
                            <th class="text-dark">Image</th>
                            <th class="text-dark">Main Page</th>                  
                            <th class="text-dark">Action</th>                  
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>      {!! $item->short_description2 !!}    </td>
                        <td>      {{ $item->advise }}                  </td>
                        <td>      {{ $item->advisor_name}}             </td>
                        <td>      {{ $item->heading  }}                </td>
                        <td>      {!! $item->point !!}                 </td>
                        <td><img height="80px" width="120px" src="{{ asset('uploads/service/'.$item->image) }}" alt=""> </td> 
                        <td><a class="btn btn-primary btn-sm" href="{{ route('admin.servicetableview') }}">See Main</a></td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
  <!-- White Tables end -->



@endsection

