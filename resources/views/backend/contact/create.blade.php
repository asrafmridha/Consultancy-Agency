@extends('backend.mastaring.master')
 
@section('contact','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Contact</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('contact.update',$contact->id) }}"  method="POST"  >
                    @csrf

                    <div class="form-group">
                        <label for="email_font">Enter Email Icon</label>
                        <input type="text" name="email_font" id="email_font" class="form-control" placeholder="Enter Email Font"  value="{{ $contact->email_font }}"  />
                        @error('email_font')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
               
                    <div class="form-group">
                        <label for="email">Enter Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"  value="{{ $contact->email }}"  />
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alter_email">Enter Alter Email</label>
                        <input type="email" name="alter_email" id="alter_email" class="form-control" placeholder="Enter alter_email"  value="{{ $contact->alter_email }}"  />
                        @error('alter_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone_font">Enter phone Icon </label>
                        <input type="text" name="phone_font" id="phone_font" class="form-control" placeholder="Enter phone_font Number"  value="{{ $contact->phone_font }}"  />
                        @error('phone_font')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Enter Phone Number</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number"  value="{{ $contact->phone }}"  />
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="alter_phone">Enter Alter Phone Number</label>
                        <input type="text" name="alter_phone" id="alter_phone" class="form-control" placeholder="Enter Alter Phone Number"  value="{{ $contact->alter_phone }}"  />
                        @error('alter_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address_font">Enter Address Icon</label>
                        <input type="text" name="address_font" id="address_font" class="form-control" placeholder="Enter address_font "  value="{{ $contact->address_font }}"  />
                        @error('address_font')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Enter Address </label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter address "  value="{{ $contact->address }}"  />
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <button type="submit" class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Update</button>

                </form>              
            </div>
        </div>
    </div>
</div>                


@endsection