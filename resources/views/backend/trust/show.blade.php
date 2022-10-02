@extends('backend.mastaring.master')
 
@section('trust','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Table</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')

<section >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Trust Us  ({{ $data->count() }})</h4>
                    <div class="table-responsive">
                        <table class="table table-white">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Image</th>   
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $slno=1; ?>
                            @foreach ($data as $item)                
                            <tr>
                                <td>{{ $slno }}</td>
                                <td> <img src="{{ asset('uploads/trustus/'.$item->image) }}" alt=""></td>
                                

                            <td>                            
                            <div class="dropdown">
                                <button type="button" class="btn btn-sm text-dark dropdown-toggle hide-arrow" data-toggle="dropdown">
                                    <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <button data-target="#updateModaltrust__{{ $item->id }}" data-toggle="modal" class="dropdown-item" href="javascript:void(0);">
                                        <i data-feather="edit-2" class="mr-50"></i>
                                        <span>Edit</span>
                                    </button>
                                    <button data-target="#deleteModaltrust__{{ $item->id }}" data-toggle="modal" type="submit" class="dropdown-item" href="javascript:void(0);">
                                        <i data-feather="trash" class="mr-50"></i>
                                        <span>Delete</span>
                                    </button>
                                </div>
                            </div>
                            </td> 
                           </tr>
                           <?php $slno++; ?>


        <!-- Modal for Trust Us Section  delete -->
    <div class="modal fade" id="deleteModaltrust__{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div> 
          <div class="modal-body text-white bg-dark">
              <form action="{{ route('trust.destroy',$item->id) }}" method="POST">
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

<!-- Modal for Trust Us Section  Update -->
<div class="modal fade" id="updateModaltrust__{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div> 
      <div class="modal-body text-white bg-dark">
        <form action="{{ route('trust.update',$item->id) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="">Old Image</label> <br>
                 <img class="bg-white"  src="{{ asset('uploads/trustus/'.$item->image) }}" alt=""> <br> <br>
                  <div class="custom-file">
                 <input type="file" class="custom-file-input" id="customFile" name="image" />
                 <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>
                 @error('image')
                 <small class="text-danger">{{ $message }}</small>
                 @enderror
            </div>
            <button type="submit" class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Update</button>
            
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
</section>

@endsection