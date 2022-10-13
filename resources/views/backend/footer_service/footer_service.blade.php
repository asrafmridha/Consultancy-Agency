@extends('backend.mastaring.master')

@section('footer_service','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Copyright</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ route('footerservice.update',footer_service()->id) }} "      method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="financial">Enter First Service</label>
                    <input type="text" name="financial" id="financial" class="form-control" placeholder="Enter First Service" value="{{ footer_service()->financial }}" />
                    @error('financial')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sale_service">Enter Second Service</label>
                    <input type="text" name="sale_service" id="sale_service" class="form-control" placeholder="Enter Copyright Year and Text" value="{{ footer_service()->sale_service }}" />
                    @error('sale_service')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="buisness">Enter Third Service</label>
                    <input type="text" name="buisness" id="buisness" class="form-control" placeholder="Enter Copyright Year and Text" value="{{ footer_service()->buisness }}" />
                    @error('buisness')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="market_research">Enter Fourth Service</label>
                    <input type="text" name="market_research" id="market_research" class="form-control" placeholder="Enter Copyright Year and Text" value="{{ footer_service()->market_research }}" />
                    @error('market_research')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="customer_support">Enter Fift'h Service</label>
                    <input type="text" name="customer_support" id="customer_support" class="form-control" placeholder="Enter Copyright Year and Text" value="{{ footer_service()->customer_support }}" />
                    @error('customer_support')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button class="form-control mt-1 btn-purchaseAdd btn btn-primary"> Update</button>
            </form>
            </div>
        </div>
    </div>
</div>
        
@endsection