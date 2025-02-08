<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('area-admin/assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('area-admin/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    @yield('css-libraries')

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
    <!-- /END GA -->
</head>

<body>
<div id="app">
    @yield('auth_content')
</div>

<!-- General JS Scripts -->
<script src="{{asset('area-admin/assets/modules/jquery.min.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/popper.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/tooltip.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('area-admin/assets/modules/moment.min.js')}}"></script>
<script src="{{asset('area-admin/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
@yield('js-libraries')

<!-- Page Specific JS File -->
@yield('page-specific-js')

<!-- Template JS File -->
<script src="{{asset('area-admin/assets/js/scripts.js')}}"></script>
<script src="{{asset('area-admin/assets/js/custom.js')}}"></script>
</body>
</html>
