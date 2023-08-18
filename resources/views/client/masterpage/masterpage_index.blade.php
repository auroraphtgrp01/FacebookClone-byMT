<!DOCTYPE html>
<html class="loading" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Facebook</title>
    @include('client.masterpage.head')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu"
    data-col="">
    <div id="appHeader">
        @include('client.masterpage.header')
    </div>
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    {{-- @include('client.masterpage.main_menu') --}}
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    @include('client.masterpage.Content')
    <!-- BEGIN: Header-->

    <!-- END: Content-->

    {{-- <div class="sidenav-overlay"></div>
    <div class="drag-target"></div> --}}

    <!-- BEGIN: Footer-->
    {{-- @include('client.masterpage.footer') --}}
    <!-- END: Footer-->

    @include('client.masterpage.JScript')
    @yield('JS')
</body>
<!-- END: Body-->

</html>
