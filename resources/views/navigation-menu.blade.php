<nav class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center col-lg-2 col-3">
                    <a href="/" class="brand-wrap">
                    <img src='assets/images/1a.jpg' class="img-fluid rounded">
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="col-lg-6 col-6 col-sm-12 mt-2">
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
                </div>
                
            </div> 
            <div class="widget-header mr-10 mt-2">
                        <a href="/wishlist" class="icon icon-sm rounded-circle border"><i class="fa fa-heart"></i></a>
                        <span class="badge badge-pill badge-danger notify">0</span>
                </div>
                <!-- Settings Dropdown -->
              @if (Route::has('login'))
                @auth
                <div class="sticky sm:flex sm:items-center z-40">
                    <div class="fixed">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>
                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>

                    <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                        @endif
                    <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="border-t border-gray-200"></div>

                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                    {{ __('Team Settings') }}
                </x-jet-responsive-nav-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                        {{ __('Create New Team') }}
                    </x-jet-responsive-nav-link>
                @endcan

                <div class="border-t border-gray-200"></div>

                <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                @endforeach
                @endif
            </div>
        </div>
        @else
        <div class="mt-3 flex ">
            <a href="{{ route('login') }}" class="text-m text-black dark:text-gray-500 underline">Login</a>
            <a href="{{ route('register') }}" class="ml-2 text-m text-black dark:text-gray-500 underline">Register</a>
        </div>
        @endauth
    </div>
    @endif        
</nav>

    <nav class="z-0 navbar navbar-expand-lg border-bottom bg-white border-b border-gray-100" id="lower-navbar">
        <div class="container">
          <div class="" id="lower_nav">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link pl-0 text-black hover:text-blue-500" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i>  All category</strong></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Dry Foods</a>
                  <a class="dropdown-item" href="#">Room interior</a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black hover:text-blue-500" href="{{ url('/category'.'Kitchen & Laundry') }}">Kitchen & Laundry</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black hover:text-blue-500" href="{{ url('/category'.'Mobile Phones') }}">Mobile Phones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black hover:text-blue-500" href="{{ url('/category'.'Entertainment') }}">Entertainment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black hover:text-blue-500" href="{{ url('/category'.'Computers') }}">Computers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black hover:text-blue-500" href="{{ url('/category'.'Furnitures') }}">Furnitures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black hover:text-blue-500" href="{{ url('/category'.'Home & Garden') }}">Home & Garden</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black hover:text-blue-500" href="{{ url('/category'.'Others') }}">Others</a>
              </li>
            </ul>
          </div> <!-- collapse .// -->
        </div> <!-- container .// -->
      </nav>
 