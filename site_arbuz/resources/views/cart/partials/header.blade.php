<header class="header">
    <div class="row d-none d-lg-flex">
        <div class="col-xl-6 col-lg-6 menu pr-0">
            <ul class="nav menu-nav" id="navmenubar">
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0"
                        href="{{ route('page.dostavka') }}"
                        title="Доставка"
                    >Доставка</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0 pl-3"
                        href="{{ route('page.about') }}"
                        title="О нас"
                    >О нас</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0 pl-3"
                        href="{{ route('page.checkout_page') }}"
                        title="Оплата"
                    >Оплата</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0 pl-3"
                        href="{{ route('page.faq') }}"
                        title="FAQ"
                        target="_blank"             >FAQ</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link text-secondary pr-0 pl-3"
                        href="#"
                        title="Работа в Арбузе"
                        target="_blank"             >Работа в Арбузе</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link pl-3"
                        href="{{ route('page.stocks') }}"
                        title="Акции"
                        style="font-weight: bold; color: #FC2A1C;"       >Акции</a>
                </li>
            </ul>
        </div>
        <div class="col-xl-3 col-lg-3 mt-2 pl-0">
                    <span class="mr-1 font-weight-bold text-dark text-uppercase">
                        Доставка:
                    </span>
                    <a href="{{ route('page.dostavka') }}" title="Время ближайшей доставки" class="ml-xl-0 ml-1">
                        <span class="font-weight-bold grey-color">
                            <span id="time-span">
                                30/04/2020, 16:00-18:00
                            </span>
                        </span>
                    </a>
            </div>

            <div class="btn-group mr-5">
                <a id="navbarDropdown" class="nav-link text-success dropdown-toggle"
                   href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                            <span class="badge badge-spill text-success">
                            <i class="fa fa-shopping-cart text-success"></i>
                                {{ Cart::getTotalQuantity()}}
                            </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" style="width: 350px; padding: 0px; border-color: #9DA0A2" aria-labelledby="navbarDropdown" >
                    <ul class="list-group">
                        @include('cart.partials.cart-drop')
                    </ul>
                </div>
            </div>

            <div>
                    <ul class="list-inline mt-2 mb-0">
                        <!-- Authentication Links -->
                        @guest
                            <li class="list-inline-item">
                                <a class="list-link text-success" style="font-size: 14px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="list-inline-item">
                                    <a class="list-link text-success mr-2" style="font-size: 14px;"  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-success" style="font-size: 14px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('password.change') }}">
                                        Change Password
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @if(Auth::user()->name == ucfirst('admin'))
                                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                            User Management
                                        </a>
                                    @endif

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </div>
    <!--Subheader logo, search, cart-->
</header>
<hr style="border: 1px #E5E7E9  solid;">
<main class="py-4">
    @yield('content')
</main>
