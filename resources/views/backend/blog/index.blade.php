@extends('backend.mastaring.master')
@section('blog','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">BLog Table </a>
            </li>
        </ol>
    </div>
@endsection
@section('content')

<div class="row" id="dark-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> ({{ $data->count() }})</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-white"  >
                    <thead>
                        @if($data->isEmpty())
                        <th><h2 class="alert alert-danger">Data Not Found</h2></th>
                        @else
                        <tr>
                            <th>Sl No</th>
                            <th>Image</th>
                             <th>Title</th>
                            <th>Description</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $slno=1; ?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $slno }}</td>
                                <td>
                                    <div class="avatar-group">
                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="top" title="" class="avatar pull-up my-0" data-original-title="{{ $item->name }}">
                                            <img height="80px" width="100px" src="{{ asset('uploads/blog/'.$item->image)}}" alt="">
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
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
                                                <form action="{{ route('blog.update',$item->id) }}"  method="POST" enctype="multipart/form-data" >
                                                        @csrf
                                                        @method('PUT')
                                                        <label for="">Old Image</label>
                                                        <img height="100px" width="100px" src="{{ asset('uploads/blog/'.$item->image) }}" alt="img nai"> <br>

                                                        <label for="image" class="">New Image</label>
                                                        <input type="file" name="image" class="form-control">
                                                        @error('image')
                                                        <div class="alert alert-danger">
                                                            {{$message}}
                                                        </div>
                                                        @enderror
                                                        <label for="description">Title</label>
                                                        <input type="text" name="title" value="{{ $item->title }}" class="form-control name" placeholder="Enter Title">
                                                        @error('name')
                                                        <div class="alert alert-danger">
                                                            {{$message}}
                                                        </div>
                                                        @enderror

                                                        <label for="description">Enter Description</label>
                                                        {{-- <input type="text" name="description" id="name" class="form-control" placeholder="Enter Designation"/>
                                                         --}}
                                                         <textarea name="description" class="form-control" cols="30" rows="10">{{$item->description}}</textarea>
                                                        @error('description')
                                                            <small class="text-danger">{{ $message }}</small>
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
                                                <form action="{{ route('blog.destroy',$item->id) }}" method="POST">
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
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection









