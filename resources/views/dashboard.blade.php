{{-- <!DOCTYPE html>
<html class="loading {{ (themesetting(Auth::id()) == null) ? 'light-layout' : themesetting(Auth::id())->theme }}" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('backend.includes.meta')

    <!-- BEGIN: Vendor CSS-->

    @include('backend.includes.css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static 

    @if(themesetting(Auth::id()) == null)
      menu-expanded
    @else
         @if(themesetting(Auth::id())->nav == 'collapsed')
            menu-collapsed
         @else
            menu-expanded
        @endif
    @endif 

" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('backend.includes.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('backend.includes.mainmenu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @include('backend.includes.content')
    <!-- END: Content-->



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('backend.includes.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    
    @include('backend.includes.script')
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html> --}}

@extends('backend.mastaring.master')
 

@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">HomePage</a>
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
                    @include('backend.includes.content')
                    

                </div>
            </div>
        </div>
    </div>
</section>

@endsection











