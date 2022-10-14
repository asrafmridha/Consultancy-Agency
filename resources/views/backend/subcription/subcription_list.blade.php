@extends('backend.mastaring.master')
 
@section('subcription','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Subcription Table </a>
            </li>
        </ol>
    </div>
@endsection

@section('content')

<div class="card-body">
    <div class="btn-group">
        <button id="all_action"
            class="d-none btn btn-danger dropdown-toggle waves-effect waves-float waves-light"
            type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            All Action
        </button>
        <div data-toggle="modal" data-target="#mass_delete_modal" class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
            <a  class="dropdown-item">Mass Delete</a>
        </div>
    </div>
</div>

    <!-- Dark Tables start -->
    <div class="row" id="dark-table">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-white">
                        <thead>
                            <tr>
                                <th>Subscriber Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscription as $item)
                            <tr> 
                                <td>{{ $item->email }}</td>      
                                <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm text-dark dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <button data-target="#delete_subcription__{{ $item->id }}" data-toggle="modal" type="submit" class="dropdown-item" href="javascript:void(0);">
                                                    <i data-feather="trash" class="mr-50"></i>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div> 
                                </td>
                            </tr>
                            
                                <div class="modal fade" id="delete_subcription__{{ $item->id }}" tabindex="-1" role="dialog"                                   aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
           
                                        <div class="modal-body text-white bg-dark">
                                            <form action="{{ route('subcription.destroy',$item->id) }}" method="POST">
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

    <!-- Modal for Subcription  delete -->



@endsection