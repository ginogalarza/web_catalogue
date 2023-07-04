<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Motos') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Catalogo de motos para la marca Sufhi" name="description" />
        <meta content="Gino" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('template/assets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ url('template/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ url('template/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ url('template/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    </head>

    <body class="authentication-bg">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="index.html" class="mb-5 d-block auth-logo">
                                <img src="template/assets/images/logo-dark.png" alt="" height="22" class="logo logo-dark">
                                <img src="template/assets/images/logo-light.png" alt="" height="22" class="logo logo-light">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        {{ $slot }}
                        <div class="mt-5 text-center">
                            <p>© {{ date('Y') }} Creador por <i class="mdi mdi-heart text-danger"></i> Motos</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ url('template/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('template/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('template/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ url('template/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ url('template/assets/libs/node-waves/waves.min') }}.js"></script>
        <script src="{{ url('template/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ url('template/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ url('template/assets/js/app.js') }}"></script>
    </body>
</html>

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                
            </div>
        </div>
    </body>
</html>
 --}}