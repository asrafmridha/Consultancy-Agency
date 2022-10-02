
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('backend.includes.meta')

    <!-- BEGIN: Vendor CSS-->

    @include('backend.includes.css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

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

</html>