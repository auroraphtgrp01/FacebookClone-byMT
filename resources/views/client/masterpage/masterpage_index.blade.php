<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    @include('client.masterpage.head')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu"
    data-col="">

    <!-- BEGIN: Header-->
    @include('client.masterpage.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    {{-- @include('client.masterpage.main_menu') --}}
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @include('client.masterpage.Content')
    <!-- END: Content-->

    {{-- <div class="sidenav-overlay"></div>
    <div class="drag-target"></div> --}}

    <!-- BEGIN: Footer-->
    {{-- @include('client.masterpage.footer') --}}
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    @include('client.masterpage.JScript')
    @yield('JS')
</body>
<!-- END: Body-->

</html>
