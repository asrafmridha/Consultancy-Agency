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

<div class="row">
    <div class="col-md-8  ">
        <form action="{{ route('export-feedback') }}" method="POST" enctype="multipart/form-data">
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
                    <button data-toggle="modal" data-target="#teamcsvModal" type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </div>
    </div>
</div> 

{{-- Data Filter Start --}}
<div class="card-body">
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
         <div class="row align-items-md-center">
            <div class="col-md">
                <div class="form-group mb-md-0">
                    <div class="input-group">
                        <input type="search" class="form-control table_search" placeholder="Search Here">
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i data-feather='search'></i>
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
                    <div class="table-responsive ">
                        <table class="table table-white">
                            <thead>
                                <tr>
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
                              
                             
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Tables end -->












@endsection