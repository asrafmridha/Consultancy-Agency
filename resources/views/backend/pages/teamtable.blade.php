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
      
<div class="row">
    <div class="col-md-8  ">
        <form action="{{ route('team-file-export') }}" method="POST" enctype="multipart/form-data">
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

{{-- Team Date Filter  --}}

<div class="card-body">
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

{{-- End Filter  --}}


       <div class="row" id="dark-table">
            <div class="col-12">
                 <div class="card">
                      <div class="card-header">
                           <h4 class="card-title">Team Member ({{ $data->count() }})</h4>
                      </div>
               
                <div class="table-responsive">
                    <table class="table table-white">
                        <thead>
                            <tr>
                                <th>Sl No</th>
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
                                    {{ $slno }}
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
           
                   {{-- <button type="submit" class="form-control mt-3 btn-purchaseAdd btn btn-success"> Update</button>            --}}
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
                            <?php $slno++; ?>
                            @endforeach
                           
                           
                        </tbody>
                    </table>
                </div>
            </div>
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


   {{-- <script>

    @if(session::has('success'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

</script> --}}




     


