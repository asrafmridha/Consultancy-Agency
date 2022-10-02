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
                <a href="">Feedback Table </a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <!-- White Tables start -->
    <div class="row" id="dark-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Message  ({{ $data->count() }})</h4>
                </div>
                
                <div class="table-responsive">
                    <form action="{{ route('message.delete') }}" method="POST" >
                        @csrf
                        @method('delete')

                    <button id="msgbtn" style="display: none" type="submit" class="btn btn-danger">Delete</button>
                    <table class="table table-white">
                        <thead>
                            <tr>
                                <th></th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td><input class="msgselect form-check-input" type="checkbox" name="ids[{{ $item->id }}]" value="{{ $item->id }}" id="flexCheckDefault"></td>
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
     {{-- <div class="modal fade" id="deleteModalmesssage_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
     </div> --}}

     
       @endforeach                      
                        </tbody>
                    </table>

                </form>

                </form>
                </div>
            </div>
        </div>
    <!-- White Tables end -->
    @endsection



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>

        jQuery(document).ready(function(){

            
           $('.msgselect').click(function () { 
               
            $('#msgbtn').fadeIn();
           
                
            });



        });


    </script>


   
 
 
    
                      