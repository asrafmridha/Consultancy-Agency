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

@if(session()->has('success'))
<div class="h2 alert alert-success">
 {{ session()->get('success') }}
</div>
 @endif

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

<div class="row" id="dark-table">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              {{-- <h4 class="card-title">Service  ({{ $alldata->count() }})</h4> --}}
          </div>
        
          <div class="table-responsive">
              <table class="table table-white">
                  <thead>
                      <tr>
                        <th class="text-dark">Icon</th>
                          <th class="text-dark">Title</th>
                          <th class="text-dark">Short Description</th>
                          <th class="text-dark">Button Text</th>
                          <th class="text-dark">Short Description 2</th>
                          <th class="text-dark">Short Description 2</th>
                          <th class="text-dark">advise</th>
                          <th class="text-dark">advisor_name</th>
                          <th class="text-dark">Heading</th>
                          <th class="text-dark">point</th>
                          <th class="text-dark">Image</th>
                          <th class="text-dark">Action</th>    
                      </tr>
                  </thead>
                  <tbody class="servicetable">

                  @foreach ($alldata as $item)
                    <tr>
                          <td>        {{ $item->icon }}                  </td>
                          <td>      {{ $item->title }}</td>
                          <td>      {!! $item->Short_description !!}    </td>
                          <td>      {{ $item->button_text }}             <td> 
                          <td>      {!! $item->short_description2 !!}    </td>
                          <td>      {{ $item->advise }}                  </td>
                          <td>      {{ $item->advisor_name}}             </td>
                          <td>      {{ $item->heading  }}                </td>
                          <td>      {!! $item->point !!}                 </td>
                          <td><img height="80px" width="120px" src="{{ asset('uploads/service/'.$item->image) }}" alt="">  <td>       
                        <td>
                              <div class="dropdown">
                                     <button type="button" class="btn btn-sm text-dark dropdown-toggle hide-arrow" data-toggle="dropdown">
                                     <i data-feather="more-vertical"></i>
                                     </button>
                                    <div class="dropdown-menu">
                                          <button data-target="#serviceupdatemodal__{{    $item->id }}" data-toggle="modal" type="submit" class="dropdown-item" href="javascript:void(0);">
                                          <i data-feather="edit-2" class="mr-50"></i>
                                          <span>Edit</span>
                                          </button>
                                          <button data-target="#deleteModalteam_{{ $item->id }}" data-toggle="modal" type="button" class="dropdown-item" href="javascript:void(0);"data-category="{{ $item->id }}">
                                          <i data-feather="trash" class="mr-50"></i>
                                          <span>Delete</span>
                                          </button>
                                    </div>
                              </div>
                        </td>
                    </tr> 

                      
                      <!-- Modal for Service delete -->
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

                      @endforeach

                  
                    </tbody>
                    
                  </table>
                  <br>
                  {{ $alldata->links() }} 
        
    </div>
  </div>
                      
                 
          </div>
      </div>
  </div>
</div>



</div>

      
 @foreach ($alldata  as $item)
     
 
  <!-- Modal for Service Update -->
  <div class="modal fade" id="serviceupdatemodal__{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
         <div class="modal-content">
              <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
              </div>          
              <div class="modal-body">
      <form action="{{ route('service.update',$item->id) }}" method="POST">
        @csrf

        <label for="icon">Enter Icon Here</label>
        <input value="{{ $item->icon }}" name="icon" type="text"  class="icon title form-control name" placeholder="Enter Team Member name">
        
        @error('icon')
        <div class="alert alert-danger">

            {{$message}}
        </div>  
        @enderror
        
     <label for="Short_description">Enter Title Here</label>
         <input value="{{ $item->title }}" name="title" type="text"  class="Short_description title form-control name" placeholder="Enter Team Member name">
  
         @error('title')
         <div class="alert alert-danger">
 
             {{$message}}
         </div>  
         @enderror

         <label for="Short_description">{{ __("Enter Short Description Here") }} <span class="text-danger"> *</span></label>
         <input type="hidden" name="Short_description" id="Short_description" value="{!! $item->Short_description !!}" class="form-control">
         <trix-editor input="Short_description" style="min-height: 6rem !important">{!! $item->Short_description !!}</trix-editor>
         @error('Short_description')
             <div class="text-danger">{{ $message }}</div>
         @enderror

         <label for="button_text" class="mt-1">Enter Button Text</label>
         <input value="{{ $item->button_text }}" name="button_text" type="text"  class="button_text form-control name" placeholder="Enter Team Member name">

         @error('button_text')
         <div class="alert alert-danger">
 
             {{$message}}
         </div>  
         @enderror

         <label for="icon">Old Image</label>
         <img height="80px" width="120px" src="{{ asset('uploads/service/'.$item->image) }}" alt=""> <br>
       

         <label for="icon">New Image</label> 
         <input type="file" name="image"> <br> <br>
 
         @error('image')
         <div class="alert alert-danger">
 
             {{$message}}
         </div>  
         @enderror

         <label for="short_description2">{{ __("Enter Short Description2 Here") }} <span class="text-danger"> *</span></label>
         <input type="hidden" name="short_description2" id="short_description2" value="{!! $item->short_description2 !!}" class="form-control">
         <trix-editor input="short_description2" style="min-height: 6rem !important">{!! $item->short_description2 !!}</trix-editor>
         @error('short_description2')
             <div class="text-danger">{{ $message }}</div>
         @enderror
       
         <label for="advise">Advise</label>
         <input value="{{ $item->advise }}" name="advise" type="text"  class="advise title form-control name" placeholder="Enter Team Member name">
         
         @error('advise')
         <div class="alert alert-danger">
 
             {{$message}}
         </div>  
         @enderror

         <label for="advisor_name">Advisor Name</label>
         <input value="{{ $item->advisor_name }}" name="advisor_name" type="text"  class="advisor_name title form-control name" placeholder="Enter Team Member name">
        
         @error('advisor_name')
         <div class="alert alert-danger">
 
             {{$message}}
         </div>  
         @enderror

         <label for="heading">Heading</label>
         <input value="{{ $item->heading }}" name="heading" type="text"  class="heading title form-control name" placeholder="Enter Team Member name">
         
         @error('heading')
         <div class="alert alert-danger">
 
             {{$message}}
         </div>  
         @enderror

         <label for="point">{{ __("point") }} <span class="text-danger"> *</span></label>
         <input type="hidden" name="point" id="point"  class="form-control" value="{!! $item->point !!}">
         <trix-editor  input="point" style="min-height: 6rem !important">{!! $item->point !!}</trix-editor>
         @error('point')
             <div class="text-danger">{{ $message }}</div>
         @enderror
       
                  
            <div class="modal-footer">
                  <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                  <button type="submit" class="serviceupdatebutton btn btn-primary deletemodalservicebutton">Confirm</button>
              </div>
        </form>
      </div>
    </div>
</div>
</div>

{{-- End Modal  --}}

@endforeach


  







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








 
</script>