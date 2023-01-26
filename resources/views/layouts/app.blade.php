<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'RentalIT') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['public/css/app.css', 'resources/js/app.js'])
        @vite(['public/css/bootstrap.css'])
        @vite(['public/css/ui.css'])
        @vite(['public/css/responsive.css'])

        <!-- Styles -->
        @livewireStyles
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width",intial-scale="1">
        <title>RentalIT</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel= "stylesheet" type="text/css" href="https://cdn,jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
        <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <!-- Custom styles for this template -->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body class="font-sans antialiased">
    <header class="section-header">

<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="/utility">Rent your utility</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ route('booking.dash') }}">Booking</a></li>
    </ul>
    <ul class="navbar-nav">
    <li  class="nav-item"><a href="#" class="nav-link"> Call: +03-25357366 </a></li>
    
  </ul> <!-- list-inline //  -->
  
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->


        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')
            

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
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

        @stack('modals')

        @livewireScripts
    </body>
    <script>
    var botmanWidget = {
        aboutText:'RentalIT',
        introMessage:'Hi Welcome to RentalIT!',
    };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
