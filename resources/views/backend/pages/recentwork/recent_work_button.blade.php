@extends('backend.mastaring.master')
 
@section('recentwork','active')

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="">Recent Work Button</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('recentwork.button.update',$recentworkbutton->id) }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="buisness_finance">Enter Buisness and Finance Button Text</label>
                        <input type="text" name="buisness_finance" id="recentworkbutton" class="form-control" placeholder="Enter Buisness and Finance Button Text" value="{{ $recentworkbutton->buisness_finance }}" />
                        @error('buisness_finance')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="customer_support">Enter Customer Support Button Text</label>
                        <input type="text" name="customer_support" id="customer_support" class="form-control" placeholder="Enter Customer Support Button Text" value="{{ $recentworkbutton->customer_support }}" />
                        @error('customer_support')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="financial_service">Enter  Financial Service Button Text</label>
                        <input type="text" name="financial_service" id="financial_service" class="form-control" placeholder="Enter Financial Service Button Text" value="{{ $recentworkbutton->financial_service }}" />
                        @error('financial_service')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="buisness_stargey">Enter  Business Strategy Button Text</label>
                        <input type="text" name="buisness_stargey" id="buisness_stargey" class="form-control" placeholder="Enter Business Strategy Button Text" value="{{ $recentworkbutton->buisness_stargey }}" />
                        @error('buisness_stargey')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sale_service">Enter  Sales Service Button Text</label>
                        <input type="text" name="sale_service" id="sale_service" class="form-control" placeholder="Enter Sales Service Button Text" value="{{ $recentworkbutton->sale_service }}" />
                        @error('sale_service')
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