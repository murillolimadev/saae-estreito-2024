<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAAE Estreito-MA - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('home/img/icon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" href="{{ asset('home/img/icon.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('home/js/jquery.js') }}"></script>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        @include('home.layout.nav')
        @yield('content')
        @include('home.layout.footer')
        <!-- Back to Top -->
        <a href="https://wa.me/5599991940969" target="_blank"
            class="btn btn-lg btn-primary btn-lg-square back-to-top1 pt-2">
            {{-- <i class="bi bi-arrow-up"></i> --}}
            <img src="{{ asset('home/img/wt.png') }}" alt="" style="width: 70px; height: 70px;">
        </a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('home/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('home/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('home/js/main.js') }}"></script>
</body>

</html>
