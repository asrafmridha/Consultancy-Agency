{{-- @extends('backend.mastaring.master') --}}


 
{{-- @section('headbarMenu', 'active')
 @section('content') --}}


 <form action="{{ route('file-input') }}"  method="POST" enctype="multipart/form-data" >
   @csrf

   <input type="file" name="file">

    <button type="submit">Export</button>
   </form>



 {{-- @endsection --}}