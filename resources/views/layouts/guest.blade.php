<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel= "stylesheet" type="text/css" href="https://cdn,jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Utilities Rental</title>
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

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="font-sans text-gray-900 antialiased">
        <header class="section-header">

            <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Renter</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rentee</a></li>
                </ul>
                <ul class="navbar-nav">
                <li  class="nav-item"><a href="#" class="nav-link"> Call: +03-25357366 </a></li>
                
              </ul> <!-- list-inline //  -->
              
            </div> <!-- container //  -->
            </nav> <!-- header-top-light.// -->
            
              <div class="col-lg-4 col-sm-6 col-12">
                <div class="widgets-wrap float-md-right">
                  
                  
                </div> <!-- widgets-wrap.// -->
              </div> <!-- col.// -->
            </div> <!-- row.// -->
              </div> <!-- container.// -->
            </section> <!-- header-main .// -->
            </header> <!-- section-header.// -->
            
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                
            </div>
            

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        
    </body>
    <script>
      var botmanWidget = {
          abo
      };
      </script>
      <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
