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
    <hr style="border: 1px #E5E7E9  solid;">

    <!--Subheader logo, search, cart-->

    <div class="row subheader">
        <div class="col-md-2 col-3 d-block d-lg-none">
            <div class="drawer-component">
                <div id="menu-bars" class="drawer-button">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-8 col-6">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-12 header-logo" style="padding: 0px 15px;">
                    <a href="/"><img src="https://arbuz.kz/public/templates/images/logo-new.png" alt="Arbuz.kz - магазин продуктов с доставкой Алматы" id="headerlogo">
                        <br>
                        <span class="d-none d-lg-block text-dark" style="font-size: 11px">Ваш онлайн супермаркет</span>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-6 d-none d-lg-block">
                    <div class="contacts">
                        <div class="title" style="font-size: 13px;">
                            Телефон доставки г.Алматы
                        </div>
                        <div class="phones" style="font-size: 13px;">
                            <b>+7 (727) 346 85 83<br>+7 (778) 021 13 17</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-5 d-none d-lg-block">
            <div>
                <form action="{{ route('catalog.search') }}" method="get" class="search-form">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Что ищем? " name="searchform" id="searchform"
                               value="{{ request()->input('searchform') }}">
                        <div class="input-group-append">
                            <button class="btn" style="background-color: #ECF0F1;" type="submit">
                                <i class="fa fa-search" style="color: #808B96;"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="search-popup position-absolute bg-white rounded p-3 shadow-sm d-none d-lg-block d-xl-block invisible">
                    <div class="row flex-nowrap">
                        <!---->
                        <!---->
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
<hr style="border: 1px #E5E7E9  solid;">
<section class="heading-nav d-none d-lg-block mt-3">
    @if(session()->has('success_msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success_msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <div class="container">
        <ul class="navbar-nav" style="border: 1px #E5E7E9 solid; list-style-type: none;">
            <li class="nav-item dropdown">
                <a href="javascript:void(0)" id="navbarHeadingCatalog1" role="button" data-toggle="dropdown" class="nav-link"
                   style="color: #202020; font-size: 16px;  padding: 8px;">
                    Продукты
                </a>
                <div aria-labelledby="navbarHeadingCatalog1" class="dropdown-menu">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="item col-md-6 mb-2">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Хлеб и выпечка</span>
                                </a>
                            </div>

                            <div class="item col-md-6 mb-2">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Фрукты, ягоды</span>
                                </a>
                            </div>


                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Мясо</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Сыр</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="javascript:void(0)" id="navbarHeadingCatalog2" role="button" data-toggle="dropdown" class="nav-link"
                   style="color: #202020; font-size: 16px;  padding: 8px;">
                    Здоровое питание
                </a>
                <div aria-labelledby="navbarHeadingCatalog2" class="dropdown-menu">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="item col-md-6">
                                <a href="{{ route('catalog.healthy-eating.healthy-drink') }}" class="dropdown-item d-flex justify-content-center">
                                    <span>Полезные напитки</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Суперфуды</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="{{ route('catalog.healthy-eating.flour') }}" class="dropdown-item d-flex justify-content-center">
                                    <span>Мука</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Гранола, каши</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="javascript:void(0)" id="navbarHeadingCatalog1" role="button" data-toggle="dropdown" class="nav-link"
                   style="color: #202020; font-size: 16px;  padding: 8px;">
                    Бытовая химия
                </a>
                <div aria-labelledby="navbarHeadingCatalog1" class="dropdown-menu">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Стирка и уход за бельем</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Средства для мытья посуды</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Чистящие средства</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Освежители/Ароматизаторы для дома</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="javascript:void(0)" id="navbarHeadingCatalog1" role="button" data-toggle="dropdown" class="nav-link"
                   style="color: #202020; font-size: 16px;  padding: 8px;">
                    Детям
                </a>
                <div aria-labelledby="navbarHeadingCatalog1" class="dropdown-menu">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Детское питание</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Для здоровья</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Подгузники и гигиена</span>
                                </a>
                            </div>

                            <div class="item col-md-6">
                                <a href="#" class="dropdown-item d-flex justify-content-center">
                                    <span>Игрушки</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<main class="py-4">
    @yield('content')
</main>
