<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('landing/img/dwi-icon.png') }}" style="object-fit: cover"; rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">

    @yield('css_login')

</head>
<body>
    @include('landing.partials.navbar')
        @yield('container')
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    @include('landing.partials.footer')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>

    @yield('js-css_detail-register')
    @yield('js_login')
</body>
</html>
