<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
    <title>{{ $title }}</title>
    <!-- UMN ECO Icon -->
    <link rel="shorcut icon" href="{{ asset('images/umn-eco-logo.png') }}">

    <!-- CSS -->

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/bootstrap/bootstrap.min.css') }}">
    <!-- Kit Fontawesome 5.15.2 -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/fontawesome-5.15.2/css/all.min.css') }}">
    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/font.css') }}">
    <!-- Preloader -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/preloader2.css') }}">
    <!-- Custom Navbar -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/navbar1.css') }}">
    <!-- Footer -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/footer1.css') }}">
    <!-- Jquery UI -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/jquery/jquery-ui.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('css/cms/base/animate/animate.css') }}">

    <!-- Custom CSS -->
    @yield('custom-css')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        {{-- <iframe class="loading-img" src="https://embed.lottiefiles.com/animation/69435"></iframe> --}}
        {{-- <lottie-player src="{{ asset('images/loading3.json') }}"   speed="1"  loop autoplay class="lottie-gif col-lg-2 col-sm-4 col-6"></lottie-player> --}}
        <img src="{{ asset('images/gif-logo.gif') }}" class="loading-img">
    </div>

    @include('cms.template.navbar')

    @yield('content')

    <!-- Javascript -->
    <!-- Popper js  -->
    {{-- <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script> --}}
    <!-- Lottie -->
    {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> --}}
    <!-- Bootstrap 5 -->
    <script src="{{ asset('js/cms/base/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Jquery 4 -->
    <script src="{{ asset('js/cms/base/jquery/jquery-3.5.1.min.js') }}"></script>
    <!-- gsap -->
    <script src="{{ asset('js/cms/base/gsap-3.6.0/gsap.min.js') }}"></script>
    <script src="{{ asset('js/cms/base/gsap-3.6.0/ScrollTrigger.min.js') }}"></script>
    <!-- Sweetalert -->
    <script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
    <!-- Preloader -->
    <script>
        $(window).on('load', function() {
            // Animate loader off screen
            width = $(window).width();
            $("#preloader").fadeOut("slow");
        });
        $(".menu__link").click(function() {
            $('#main-navigation-toggle').prop('checked', false);
        });
    </script>

    <!-- Tooltips -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <!-- Custom JS -->
    @yield('custom-js')
</body>

</html>
