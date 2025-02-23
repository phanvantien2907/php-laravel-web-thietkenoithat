<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') - Thiết kế nội thất</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('area-admin/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('area-admin/assets/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('area-admin/assets/modules/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('area-admin/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('area-admin/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('area-admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('area-admin/assets/css/components.css')}}">


    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        @yield('content')
        @include('admin.layouts.footer')
    </div>
</div>

<!-- General JS Scripts -->


<script src="{{asset('area-admin/assets/modules/jquery.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="{{asset('area-admin/assets/modules/popper.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/tooltip.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/moment.min.js')}}"></script>
<script src="{{asset('area-admin/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('area-admin/assets/modules/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/chart.min.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset('area-admin/assets/js/page/index.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('area-admin/assets/js/scripts.js')}}"></script>
<script src="{{asset('area-admin/assets/js/custom.js')}}"></script>

</body>
</html>
