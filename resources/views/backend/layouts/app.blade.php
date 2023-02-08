<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('back/assets/img/favicon.ico') }}' />
</head>

<body>
<div class="loader"></div>
<div id="app">

    <div class="main-wrapper main-wrapper-1">


    @yield('content')

    </div>

</div>


<!-- General JS Scripts -->
<script src="{{ asset('back/assets/js/app.min.js') }}"></script>
<!-- JS Libraies -->
<script src="{{ asset('back/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ asset('back/assets/js/page/index.js') }}"></script>
<!-- Template JS File -->
<script src="{{ asset('back/assets/js/scripts.js') }}"></script>
<!-- Custom JS File -->
<script src="{{ asset('back/assets/js/custom.js') }}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
