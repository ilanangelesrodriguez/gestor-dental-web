<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/imgs/logo.png') }}" type="image/x-icon">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!-- IONICONS CDN Link -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- BOXICOINS CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ICONSCOUT -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/a9045ee35a.js" crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'Clinica dental') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/main.css', 'resources/css/about.css', 'resources/css/contact.css', 'resources/css/home.css', 'resources/css/owl.carousel.min.css', 'resources/css/owl.theme.default.min.css', 'resources/css/responsive.css', 'resources/css/swiper-bundle.min.css', 'resources/css/testimonials.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/slider.js', 'resources/js/about-slider.js', 'resources/js/testimonials-slider.js', 'resources/js/owl.carousel.min.js', 'resources/js/swiper-bundle.min.js'])

    <script>
        //capturando la variable del localstorage
        const storageTheme = localStorage.getItem('theme');
        //estableciendo el tema dark o light segun las preferencias que tenga el usuario
        const systemColorScheme = window.matchMedia('prefers-color-scheme: dark').matches ? 'dark' : 'light';

        //estableciendo el nuevo tema
        const newTheme = storageTheme ?? systemColorScheme;

        //asignando el tema al documento
        document.documentElement.setAttribute('data-theme', newTheme);
    </script>

    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        {{-- @include('layouts.navigation') --}}

        @livewire('navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts

</body>



</html>
