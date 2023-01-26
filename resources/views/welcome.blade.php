<x-app-layout>
      <!-- ========================= SECTION INTRO ========================= -->
      <section class="section-intro py-3">
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
      @foreach($utility as $util)
      @if($util->status == 'popular')
        <div class="col-md-3">
            <div href="{{ url('/utilitydesc'.$util->id) }}" class="card card-product-grid">
                <a href="{{ url('/utilitydesc'.$util->id) }}" class="img-wrap"> <img src="{{ asset($util->photo) }}"> </a>
                <figcaption class="info-wrap">
                    <a href="{{ url('/utilitydesc'.$util->id) }}" class="title">{{ $util->name }}</a>
                    <div class="price-wishlist-wrap flex flex-row justify-between">
                    <div class="price mt-1">RM {{ number_format($util->prices, 2) }} / Day</div>
                        <form  action="{{ route('favorite.add', $util->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                          <button type="submit" class="" id="checkoutbutton" >
                          <i class="fa fa-heart text-gray bg-white border border-black rounded-full hover:text-blue-500"></i>
                          </button>
                      </form>

                    </div>
                </figcaption>
            </div>
        </div>
 <!-- col.// -->
        @endif
        @endforeach
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
      @if($util->status == 'new')
        <div class="col-md-3">
            <div href="{{ url('/utilitydesc'.$util->id) }}" class="card card-product-grid">
                <a href="{{ url('/utilitydesc'.$util->id) }}" class="img-wrap"> <img src="{{ asset($util->photo) }}"> </a>
                <figcaption class="info-wrap">
                    <a href="{{ url('/utilitydesc'.$util->id) }}" class="title">{{ $util->name }}</a>
                    <div class="price-wishlist-wrap flex flex-row justify-between">
                    <div class="price mt-1">RM {{ number_format($util->prices, 2) }} / Day</div>
                        <form  action="{{ route('favorite.add', $util->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                          <button type="submit" class="" id="checkoutbutton" >
                              <i class="fa fa-heart text-gray hover:text-blue-500"></i>
                          </button>
                      </form>

                    </div>
                </figcaption>
            </div>
        </div>
 <!-- col.// -->
        @endif
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
      @foreach($utility as $util)
      @if($util->status == 'popular')
        <div class="col-md-3">
            <div href="{{ url('/utilitydesc'.$util->id) }}" class="card card-product-grid">
                <a href="{{ url('/utilitydesc'.$util->id) }}" class="img-wrap"> <img src="{{ asset($util->photo) }}"> </a>
                <figcaption class="info-wrap">
                    <a href="{{ url('/utilitydesc'.$util->id) }}" class="title">{{ $util->name }}</a>
                    <div class="price-wishlist-wrap flex flex-row justify-between">
                    <div class="price mt-1">RM {{ number_format($util->prices, 2) }} / Day</div>
                        <form  action="{{ route('favorite.add', $util->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="bg-white border border-black rounded-full hover:text-blue-500" id="checkoutbutton" >
                                  <i class="fa fa-heart text-gray"></i>
                                </button>
                      </form>

                    </div>
                </figcaption>
            </div>
        </div>
 <!-- col.// -->
        @endif
        @endforeach
      </div> <!-- row.// -->
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

  </x-app-layout>