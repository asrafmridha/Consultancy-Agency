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
                        <input type="search" name="search" class="form-control table_search" placeholder="Search Here By Name Or Email">
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

    <!-- White Tables start -->
<div class="row" id="dark-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User Message  ({{ $data->count() }})</h4>     
            </div>
                <button style="width: 100px" type="submit"  class=" mb-1 btn btn-danger " id="delete_all"> Delete</button>   
            <div class="table-responsive">
                <button id="msgbtn" style="display: none" type="submit" class="btn btn-danger">Delete</button>
                <table class="table table-white " >
                    <thead>
                        @if($data->isEmpty())
                        <th><h2 class="alert alert-danger">Data Not Found</h2></th>
                        @else
                        <tr>
                            <th> <input name="main_checkbox" type="checkbox" id="all_checkbox"></th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr id="sid{{ $item->id }}"> 
                                <td>
                                   <input type="checkbox" name="ids" class="all_actions" value="{{ $item->id }}">
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
@endsection



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
<script>


    // $("#allcheck").click(function(){
    //     $('.checkSingle').prop('checked',$(this).prop('checked'));
    // });

    // $('#delete_all').click(function(e){ 
    //     e.preventDefault(); 
    //     var allids=[];
    //     $('input:checkbox[name=ids]:checked').each(function(){
    //         allids.push($(this).val());
    //     });
// });
        // $.ajax({
        //     type: "GET",
        //     url: "{{ route('message.delete') }}",
        //     data: {
        //         ids=allids
        //     },
        //     success: function (response) {
        //         $.each(allids, function (key, val) { 
        //             $('#sid'+val).remove();
                    
        //         });
        //     }
        // });

        $(document).ready(function(){

            // $(document).on('click','input[name="main_checkbox"]'function(){
            //     if(this.checked){
            //         $("input[name='ids']").each(function(){
            //         this.checked=true;
            //     }else{
            //         $("input[name='ids']").each(function(){
            //         this.checked=false;
            //     }
              
            //     });


            // });

            $('#all_checkbox').change(function(){
                 ids = [];
                $('#all_checkbox').each(function(){
                    if($(this).is(":checked")){
                        ids.push($(this).attr('id').split('-')[2]);
                    }
                });
                if(ids.length == 0){
                    $('.all_actions').removeClass('d-inline-block');
                    $('.all_actions').addClass('d-none');
                }
                else
                {
                    $('.all_actions').removeClass(' d-none');
                    $('.all_actions').addClass('d-inline-block');
                    // $('.export_all').val(ids);

                        // Delete trigger

                        $("#delete_all").on('click', function(){

                            $.ajax({
                                    url: "{{ route('message.delete') }}",
                                    type: 'GET',
                                    data: {
                                        ids: ids,
                                    },
                                    success: function(data){
                                        if(data.success == 'done'){
                                            window.location.reload();
                                        }
                                    }
                            });

                        });
                }
            });




      });

</script> 


   
 
 
    
                      