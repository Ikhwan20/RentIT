
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RentIT</title>

    <link rel="stylesheet" href="https://assets.getdizzie.com/css/app-0e1a58aa8c333c4c05473bc7a1f45c7c.css?vsn=d" data-turbolinks-track="reload" phx-track-static>

    <meta name="turbolinks-cache-control" content="no-cache">

    <script
    type="text/javascript"
    src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"
    async
    ></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
    document.addEventListener("turbolinks:before-cache", function () {
        if (window.Trustpilot) {
        Trustpilot.Modules.WidgetManagement.removeWidgets()
        }
    })

    document.addEventListener("turbolinks:load", function () {
        if (window.Trustpilot) {
        Trustpilot.Modules.WidgetManagement.findAndApplyWidgets()
        }
    })
    </script>

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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/bootstrap.css'])
    @vite(['resources/css/ui.css'])
    @vite(['resources/css/responsive.css'])

</head>

<body class="font-body antialiased text-gray-900">
    <header class="section-header">
        <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Renter</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li  class="nav-item"><a href="#" class="nav-link"> Call: +03-25357366 </a></li>
                </ul> <!-- list-inline //  -->
            </div> <!-- container //  -->
        </nav> <!-- header-top-light.// -->
    </header>
    <section class="header-main border-bottom">
        <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2 col-6">
          <a href="#" class="brand-wrap">
            <img src="assets/images/1a.jpg" class="img-fluid rounded">
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
              <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-heart"></i></a>
              <span class="badge badge-pill badge-danger notify">0</span>
            </div>
            <div class="widget-header icontext">
              <a href="{{ route('profile.show') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
              <div class="text">
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-1">
                    @auth
                    <div class="font-bold ml-2 text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    @else
                    <span class="text">Welcome!</span><br>
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
    @foreach($utility as $util)
    <div class="">
        <form action="{{ url('/createorder') }}" method="POST" enctype="multipart/form-data" class="flex w-full items-center justify-center mt-10" >
        @csrf    
            <div class="" >
                <div class="">
                    <div class="">
                        <div class="swiper group enabled:fixed enabled:w-screen enabled:h-full top-0 left-0 enabled:z-100 md:bg-white border mx-5">
                            <div class="">
                                <div class="">
                                    <img src="{{ asset($util->photo) }}" width= '500' height='500' class="shadow-lg rounded align-middle" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-1/2 h-auto pb-8">
                <div class="md:sticky top-0 p-header">
                    <div class="md:flex flex-col justify-center">
                        <nav class="flex mb-4 items-center">
                            <span>
                                <a class="transition hover:text-gray-900" href="/c/pantry">Utility</a>
                            </span>
                            <span class="block mx-2">›</span>
                            <a class="transition hover:text-gray-900" href="/c/{{ $util->category }}">{{ $util->category }}</a>
                        </nav>
                        <h1 class="text-3xl lg:text-5xl leading-snug" itemprop="name">
                            <a href="/brand/{{ $util->brand }}">{{ $util->brand }}</a>
                            <br>
                            <span class="font-body font-normal">{{ $util->name }}</span>
                        </h1>

                        <div class="enabled hidden enabled:block" data-target="product.variant" data-variant="24962">
                            <ul class="uppercase font-mono font-medium leading-snug mt-9" itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
                                <li>
                                    <div class="flex flex-wrap space-x-2 items-center">
                                        <span itemprop="price" class="flex-none">
                                            RM {{ $util->prices }} per hour
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-4 md:mt-7">
                            <div class="enabled items-center align-center relative" data-target="product.variant" data-variant="24962">
                                
                                <div hidden>
                                    <label for="utility"></label>
                                    <input id="utility" class="" type="text" name="utility" value="{{ $util->id }}" required/>
                                </div>
                                
                                <input type="text" name="start" id="datetime" placeholder="Start" /><br><br>
                                <input type="text" name="end" id="datetime" placeholder="End" />

                                <script>
                                flatpickr("#datetime", {
                                    enableTime: true,
                                    dateFormat: "Y-m-d H:i",
                                });
                                </script>
                            
                                <br><br>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" id="checkoutbutton">
                                    Rent Now
                                </button>
                            </form>
                                
                            <form class="mt-3" action="{{ route('favorite.add', $util->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" id="checkoutbutton">
                                    Add to wishlist
                                </button>
                            </form>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class = "m-10">
        <header class="paragraphs space-y-4">
            <h3 class="text-3xl lg:text-4xl">Description</h3>
            <div itemprop="description">
                <p>{{ $util->description }}</p>
            </div>
        </header>
    <div>
    @endforeach
    
    <div class="m-4 p-4 overflow-hidden">
        <section class="">
            <header class="mb-4">
                <h2 class="text-xl md:text-3.5xl">Related products</h2>
                <div class="flex items-center gap-6">
                    <div class="hidden lg:block">
                        <button class="w-10 h-auto p-3 hover:text-red enabled:pointer-events-none enabled:opacity-50 slider-prev" type="button">
                            <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.1696 6.93374C14.8905 6.93155 15.4632 7.5042 15.4607 8.22513C15.4567 8.9448 14.8845 9.51627 14.1654 9.51635L5.37363 9.50608L8.45855 12.591C8.95937 13.0918 8.95655 13.9093 8.45526 14.4106C7.95385 14.912 7.13654 14.9147 6.63569 14.4139L0.443651 8.22182L6.56758 2.09789C7.06887 1.5966 7.88634 1.59378 8.38715 2.0946C8.88797 2.59542 8.88515 3.41289 8.38386 3.91417L5.36472 6.93332L14.1696 6.93374Z"></path>
                            </svg>
                        </button>
                        <button class="w-10 h-auto p-3 hover:text-red enabled:pointer-events-none enabled:opacity-50 slider-next" type="button">
                            <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M 1.7347592,6.93374 C 1.0138592,6.93155 0.44115915,7.5042 0.44365915,8.22513 0.44765915,8.9448 1.0198592,9.51627 1.7389592,9.51635 L 10.530729,9.50608 7.4458092,12.591 c -0.50082,0.5008 -0.498,1.3183 0.00329,1.8196 0.50141,0.5014 1.31872,0.5041 1.81957,0.0033 L 15.460708,8.22182 9.3367792,2.09789 c -0.50129,-0.50129 -1.31876,-0.50411 -1.81957,-0.00329 -0.50082,0.50082 -0.498,1.31829 0.00329,1.81957 l 3.0191398,3.01915 z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>
        </section>
    </div>
</body>
</html>