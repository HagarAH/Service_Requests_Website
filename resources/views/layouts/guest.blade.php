<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- base css -->
<link rel="stylesheet" media="screen, print" href={{ asset('css/vendors.bundle.css') }}>
<link rel="stylesheet" media="screen, print" href={{ asset('css/app.bundle.css') }}>
<!--<link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->

<link rel="apple-touch-icon" sizes="180x180" href={{ asset('img/favicon/apple-touch-icon.png') }}>
<link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/favicon/favicon-32x32.png') }}>
<link rel="mask-icon" href={{ asset('img/favicon/safari-pinned-tab.svg') }} color="#5bbad5">
<link rel="stylesheet" media="screen, print" href={{ asset('css/datagrid/datatables/datatables.bundle.css') }}>
<link rel="stylesheet" media="screen, print" href={{ asset('css/fa-solid.css') }}>
<link rel="stylesheet" media="screen, print" href="css/page-login.css">
<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hizmet Talep Uygulamasi') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                {{ $slot }}
        </div>
        <video poster="img/backgrounds/clouds.png" id="bgvid" playsinline="" autoplay="" muted="" loop="">
            <source src="media/video/cc.webm" type="video/webm">
            <source src="media/video/cc.mp4" type="video/mp4">
        </video>
    </body>

</html>
