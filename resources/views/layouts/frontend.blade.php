<!DOCTYPE HTML>
<html>
    <head>
        <!-- <title>Silverlink Network</title> -->
        <title>@yield('title')</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' gap:; script-src 'self' data: https://ssl.gstatic.com 'unsafe-eval'; object-src *; style-src 'self' data: 'unsafe-inline'; img-src 'self' data:; media-src 'self' data:; font-src 'self' data:; connect-src *">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="template/assets/css/main.css" />
        <link rel="stylesheet" href="template/assets/css/custom.css" />
        <noscript><link rel="stylesheet" href="template/assets/css/noscript.css" /></noscript>
        @toastr_css
    </head>
    <body class="landing">
        <div id="page-wrapper">
            <!-- Header -->
                @include('partials.header')

                @yield('content')

        </div>

        <!-- Scripts -->
        <script src="template/assets/js/jquery.min.js"></script>
        <script src="template/assets/js/jquery.scrolly.min.js"></script>
        <script src="template/assets/js/jquery.dropotron.min.js"></script>
        <script src="template/assets/js/jquery.scrollex.min.js"></script>
        <script src="template/assets/js/browser.min.js"></script>
        <script src="template/assets/js/breakpoints.min.js"></script>
        <script src="template/assets/js/util.js"></script>
        <script src="template/assets/js/swiper.min.js"></script>
        <script src="template/assets/js/main.js"></script>
        <script src="template/assets/js/token.js"></script>
        @toastr_js
        @toastr_render

        <div class="hidden-section"></div>
        @stack('scripts')
    </body>
</html>