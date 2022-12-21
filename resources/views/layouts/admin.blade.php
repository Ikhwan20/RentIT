<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'RentIT') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width",intial-scale=1">
        <title>RentalIT</title>
        <link rel= "stylesheet" type="text/css" href="https://cdn,jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
        <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/ui.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
            
        <link href="assets/css/all.min.css" rel="stylesheet">
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <header class="section-header">

<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Renter</a></li>
    </ul>
    <ul class="navbar-nav">
    <li  class="nav-item"><a href="#" class="nav-link"> Call: +03-25357366 </a></li>
    
  </ul> <!-- list-inline //  -->
  
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.adminnavigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
