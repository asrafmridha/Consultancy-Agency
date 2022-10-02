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
                <a href="">Trust </a>
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
                    <form action="{{ route('trust.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="customFile">Image</label>
                              <div class="custom-file">
                             <input type="file" class="custom-file-input" id="customFile" name="image" />
                             <label class="custom-file-label" for="customFile">Choose file</label>
                             </div>
        
                             @error('image')
                             <small class="text-danger">{{ $message }}</small>
                             @enderror
                        </div>
                        <button type="submit" class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Save</button>
                        
                    </form>
                </div>
            </div>
        </div>
   </div>
</section>

@endsection