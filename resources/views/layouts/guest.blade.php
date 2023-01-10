<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width",intial-scale=1">
    <title>RentalIT</title>
    <link rel= "stylesheet" type="text/css" href="https://cdn,jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/bootstrap.css'])
    @vite(['resources/css/ui.css'])
    @vite(['resources/css/responsive.css'])
  
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  </head>

  <body>
    <header class="section-header">
      <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
        <div class="container">
            <ul class="navbar-nav d-none d-md-flex mr-auto">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Rent Your Utility</a></li>
            </ul>
            <ul class="navbar-nav">
                <li  class="nav-item"><a href="#" class="nav-link"> Call: +03-25357366 </a></li>
            </ul> <!-- list-inline //  -->
        </div> <!-- container //  -->
      </nav> <!-- header-top-light.// -->
      <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <a href="#" class="brand-wrap">
                        <img src="assets/images/1a.jpg" class="img-fluid rounded">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-6 col-sm-12">
                    <form class="ml-5" type="get" action="{{ url('/search') }}">
                        <div class="input-group w-100">
                            <input type="search" id="default-search" class="form-control" name="query" placeholder="Search" required>
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="widgets-wrap float-md-right">
                        <div class="widget-header  mr-3">
                            <a href="wishlist" class="icon icon-sm rounded-circle border"><i class="fa fa-heart"></i></a>
                            <span class="badge badge-pill badge-danger notify">0</span>
                        </div>
                        <div class="widget-header icontext">
                            <div class="text">
                                <span class="text">Welcome!</span><br>
                                    <a href="{{ route('login') }}" class="text-sm text-black dark:text-gray-500 underline">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-2 text-sm text-black dark:text-gray-500 underline">Register</a>
                                    @endif
                            </div>
                        </div>
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
      </section> <!-- header-main .// -->
    </header> <!-- section-header.// -->
      
      <!-- ========================= SECTION INTRO ========================= -->
      <div class="min-h-screen bg-gray-100">
        <main>
         {{ $slot }}
        </main>
        </div>
      <!-- ========================= SECTION  END// ======================= -->
      
      <!-- ========================= FOOTER ========================= -->
      <footer class="section-footer border-top bg">
        <div class="container">
          <section class="footer-top  padding-y">
            <div class="row">
              <aside class="col-md col-6">
                <h6 class="title">FAQ</h6>
                <ul class="list-unstyled">
                  <li> <a href="/renteefaq">How to be rentee?</a></li>
                  <li> <a href="/refundfaq">Refund policy</a></li>
                  <li> <a href="/paymentfaq">Payment term</a></li>
                </ul>
              </aside>
              <aside class="col-md col-6">
                <h6 class="title">Company</h6>
                <ul class="list-unstyled">
                  <li> <a href="/Aboutus">About us</a></li>
                  <li> <a href="/Career">Career</a></li>
                  <li> <a href="rules">Rules and terms</a></li>
                  <li> <a href="coverarea">Cover Area</a></li>
                </ul>
              </aside>
              <aside class="col-md col-6">
                <h6 class="title">Help</h6>
                <ul class="list-unstyled">
                  <li> <a href="contactus">Contact us</a></li>
                  <li> <a href="orderstatus">Order status</a></li>
                  <li> <a href="opendispute">Open dispute</a></li>
                </ul>
              </aside>
              <aside class="col-md col-6">
                <h6 class="title">Account</h6>
                <ul class="list-unstyled">
                  <li> <a href="account"> Account Setting </a></li>
                </ul>
              </aside>
              
            </div> <!-- row.// -->
          </section>	<!-- footer-top.// -->
      
          <section class="footer-bottom row">
            <div class="col-md-2">
              <p class="text-muted">   2022 RentIT </p>
            </div>
            <div class="col-md-8 text-md-center">
              <span  class="px-2">RentIT@gmail.com</span>
              <span  class="px-2">+03-25357366</span>
              <span  class="px-2">Universiti Teknologi Malaysia,Skudai Johor</span>
            </div>
            <div class="col-md-2 text-md-right text-muted">
              <i class="fab fa-lg fa-cc-visa"></i>  
              <i class="fab fa-lg fa-cc-mastercard"></i>
            </div>
          </section>
        </div><!-- //container -->
      </footer>
      <!-- ========================= FOOTER END // ========================= -->  
      
      

  </body>

  <script>
    var botmanWidget = {
        aboutText:'RentalIT',
        introMessage:'Hi Welcome to RentalIT!',
    };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
        
       

