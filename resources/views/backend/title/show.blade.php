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
                <a href="">Title table</a>
            </li>
        </ol>
    </div>
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Trust Us  ({{ $title->count() }})</h4>
                <div class="table-responsive">
                    <table class="table table-white">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>


                        </thead>

                        <tbody>

                            <tr>
                                <td></td>
                            </tr>


                        </tbody>
                    </table>


                </div>
            </div>
        </div>  
    </div>
</div>



@endsection