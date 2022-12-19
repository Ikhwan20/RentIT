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

    <!-- Custom styles for this template -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/ui.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
        
    <link href="assets/css/all.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  </head>

  <body>
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
      
      <section class="header-main border-bottom">
        <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2 col-6">
          <a href="#" class="brand-wrap">
            RentalIT
          </a> <!-- brand-wrap.// -->
        </div>
        <div class="col-lg-6 col-12 col-sm-12">
          <form action="#" class="search">
            <div class="input-group w-100">
                <input type="text" class="form-control" placeholder="Search">
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
              <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
              <span class="badge badge-pill badge-danger notify">0</span>
            </div>
            <div class="widget-header icontext">
              <a href="{{ route('profile.edit') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
              <div class="text">
              <span class="text">Welcome!</span><br>
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-1 sm:block">
                    @auth
                    <div class="font-bold ml-2 text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-black dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-2 text-sm text-black dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
              </div>
            </div>
          </div> <!-- widgets-wrap.// -->
        </div> <!-- col.// -->
      </div> <!-- row.// -->
        </div> <!-- container.// -->
      </section> <!-- header-main .// -->
      
      
      
      <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i>    All category</strong></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Dry Foods</a>
                  <a class="dropdown-item" href="#">Room interior</a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Clothing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sport Equipment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Electronics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Toys</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Furnitures</a>
              </li>
            </ul>
          </div> <!-- collapse .// -->
        </div> <!-- container .// -->
      </nav>
      
      </header> <!-- section-header.// -->
      
      
      
      <!-- ========================= SECTION INTRO ========================= -->
      <section class="section-intro padding-y-sm">
      <div class="container">
      
      
      <div class="-banner-wrap">
        <img src="assets/images/1a.jpg" class="img-fluid rounded">
      </div>
      
      </div> <!-- container //  -->
      </section>
      <!-- ========================= SECTION INTRO END// ========================= -->
      
      
      <!-- ========================= SECTION FEATURE ========================= -->
      <section class="section-content padding-y-sm">
      <div class="container">
      <article class="card card-body">
      
      
      <div class="row">
        <div class="col-md-4">	
          <figure class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
            <figcaption class="pt-3">
              <h5 class="title">Delivery</h5>
              <p>Delivery is not provided.It's up to <b>YOU</b> to decide. </p>
            </figcaption>
          </figure> <!-- iconbox // -->
        </div><!-- col // -->
        <div class="col-md-4">
          <figure  class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>	
            <figcaption class="pt-3">
              <h5 class="title">Insurance Policy</h5>
              <p>Protecting your item <i><br><b> in case of the unthinkable</b></i>
               </p>
            </figcaption>
          </figure> <!-- iconbox // -->
        </div><!-- col // -->
          <div class="col-md-4">
          <figure  class="item-feature">
            <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
            <figcaption class="pt-3">
              <h5 class="title">High secured </h5>
              <p><b>Your</b> Security is <b>Our</b> Priority
               </p>
            </figcaption>
          </figure> <!-- iconbox // -->
        </div> <!-- col // -->
      </div>
      </article>
      
      </div> <!-- container .//  -->
      </section>
      <!-- ========================= SECTION FEATURE END// ========================= -->
      
      
      <!-- ========================= SECTION CONTENT ========================= -->
      <section class="section-content">
      <div class="container">
      
      <header class="section-heading">
        <h3 class="section-title">Popular Items</h3>
      </header><!-- sect-heading -->
      
        
      <div class="row">
        <div class="col-md-3">
          <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="assets/images/items/1.jpg"> </a>
            <figcaption class="info-wrap">
              <a href="#" class="title">Electric Kettle</a>
              
              
              <div class="price mt-1">RM2.50/day</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
          <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="assets/images/items/2.jpg"> </a>
            <figcaption class="info-wrap">
              <a href="#" class="title">Table Fans</a>
              
              
              <div class="price mt-1">RM5.00/day</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
          <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="assets/images/items/3.jpg"> </a>
            <figcaption class="info-wrap">
              <a href="#" class="title">Football Boots</a>
              
              
              <div class="price mt-1">RM6.00/day</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
          <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="assets/images/items/4.jpg"> </a>
            <figcaption class="info-wrap">
              <a href="#" class="title">Mug</a>
              
              
              <div class="price mt-1">RM0.50/day</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
      </div> <!-- row.// -->
      
      </div> <!-- container .//  -->
      </section>
      <!-- ========================= SECTION CONTENT END// ========================= -->
      
      
      
      <!-- ========================= SECTION CONTENT ========================= -->
      <section class="section-content">
      <div class="container">
      
      <header class="section-heading">
        <h3 class="section-title">New utilities</h3>
      </header><!-- sect-heading -->
      
      <div class="row">
        @foreach($utility as $util)
        <div class="col-md-3">
          <div href="{{ url('/utilitydesc'.$util->id) }}" class="card card-product-grid">
            <a href="{{ url('/utilitydesc'.$util->id) }}" class="img-wrap"> <img src="{{ asset($util->photo) }}"> </a>
            <figcaption class="info-wrap">
              <a href="{{ url('/utilitydesc'.$util->id) }}" class="title">{{ $util->name }}</a>
              
              
              <div class="price mt-1">RM {{ $util->prices }}/hour</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
        @endforeach
      </div> <!-- row.// -->
      
      </div> <!-- container .//  -->
      </section>
      <!-- ========================= SECTION CONTENT END// ========================= -->
      
      
      
      <!-- ========================= SECTION CONTENT ========================= -->
      <section class="section-content padding-bottom-sm">
      <div class="container">
      
      <header class="section-heading">
        <a href="#" class="btn btn-outline-primary float-right">See all</a>
        <h3 class="section-title">Recommended for you!</h3>
      </header><!-- sect-heading -->
      
      <div class="row">
        <div class="col-md-3">
          <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="assets/images/items/10.jpg"> </a>
            <figcaption class="info-wrap">
              <a href="#" class="title">Sport Shoes</a>
              <div class="price mt-1">RM3.00/day</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
          <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="assets/images/items/11.jpg"> </a>
            <figcaption class="info-wrap">
              <a href="#" class="title">Hanger</a>
              <div class="price mt-1">RM0.20/day per 1 item</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
          <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="assets/images/items/12.jpg"> </a>
            <figcaption class="info-wrap">
              <a href="#" class="title">Electric Pot</a>
              <div class="price mt-1">RM5.00/day</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
        <div class="col-md-3">
          <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="assets/images/items/13.jpg"> </a>
            <figcaption class="info-wrap">
              <a href="#" class="title">Electric Shaver</a>
              <div class="price mt-1">RM3.00/day</div> <!-- price-wrap.// -->
            </figcaption>
          </div>
        </div> <!-- col.// -->
      </div> <!-- row.// -->
      
      </div> <!-- container .//  -->
      </section>
      <!-- ========================= SECTION CONTENT END// ========================= -->
      
      <!-- ========================= SECTION  ========================= -->
      <!-- ========================= SECTION  END// ========================= -->
      
      
      
      <!-- ========================= SECTION  ========================= -->
      
      <!-- ========================= SECTION  END// ======================= -->
      
      
      
      
      <!-- ========================= FOOTER ========================= -->
      <footer class="section-footer border-top bg">
        <div class="container">
          <section class="footer-top  padding-y">
            <div class="row">
              <aside class="col-md col-6">
                <h6 class="title">FAQ</h6>
                <ul class="list-unstyled">
                  <li> <a href="#">How to be renter?</a></li>
                  <li> <a href="#">How to be rentee?</a></li>
                  <li> <a href="#">Refund policy</a></li>
                  <li> <a href="#">Payment term</a></li>
                </ul>
              </aside>
              <aside class="col-md col-6">
                <h6 class="title">Company</h6>
                <ul class="list-unstyled">
                  <li> <a href="#">About us</a></li>
                  <li> <a href="#">Career</a></li>
                  <li> <a href="#">Rules and terms</a></li>
                  <li> <a href="#">Cover Area</a></li>
                </ul>
              </aside>
              <aside class="col-md col-6">
                <h6 class="title">Help</h6>
                <ul class="list-unstyled">
                  <li> <a href="#">Contact us</a></li>
                  <li> <a href="#">Order status</a></li>
                  <li> <a href="#">Shipping info</a></li>
                  <li> <a href="#">Open dispute</a></li>
                </ul>
              </aside>
              <aside class="col-md col-6">
                <h6 class="title">Account</h6>
                <ul class="list-unstyled">
                  <li> <a href="#"> User Login </a></li>
                  <li> <a href="#"> User register </a></li>
                  <li> <a href="#"> Account Setting </a></li>
                  <li> <a href="#"> My Orders </a></li>
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