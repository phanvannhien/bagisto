<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>1 Le Lai, HCMC, VietNam  -  Hotline: 0902 1818 52</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions">
                        @guest('customer')
                            <div class="btn-group ps-dropdown">
                                    <a class="dropdown-toggle" href="#" 
                                    data-toggle="dropdown" aria-haspopup="true" 
                                    aria-expanded="false">Tài khoản<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('customer.session.index') }}">
                                        <i class="fa fa-user"></i>
                                        {{ __('shop::app.header.sign-in') }}</a>
                                    </li>
                                    <li><a href="{{ route('customer.register.index') }}">
                                        <i class="fa fa-user"></i>
                                        {{ __('shop::app.header.sign-up') }}</a>
                                    </li>
                                
                                </ul>
                            </div>
                        @endguest

                        @auth('customer')
                            <div class="btn-group ps-dropdown">
                                    <a class="dropdown-toggle" href="#" 
                                    data-toggle="dropdown" aria-haspopup="true" 
                                    aria-expanded="false"> {{ auth()->guard('customer')->user()->first_name }}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('customer.profile.index') }}">
                                            {{ __('shop::app.header.profile') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('customer.wishlist.index') }}">{{ __('shop::app.header.wishlist') }}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('shop.checkout.cart.index') }}">{{ __('shop::app.header.cart') }}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('customer.session.destroy') }}">{{ __('shop::app.header.logout') }}</a>
                                    </li>
                                
                                </ul>
                            </div>
                            
                            
                        @endauth
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <div class="header__logo">
                    <a class="ps-logo" href="{{ route('shop.home.index') }}">
                    @if ($logo = core()->getCurrentChannel()->logo_url)
                        <img class="logo" src="{{ $logo }}" />
                    @else
                        <img class="logo" src="{{ bagisto_asset('images/logo.svg') }}" />
                    @endif
                    </a>
                </div>
            </div>

            <div class="navigation__column center">
                @include('shop::layouts.header.nav-menu.navmenu')
            </div>
            <div class="navigation__column right">
        
                <form class="ps-search--header" action="{{ route('shop.search.index') }}" method="post">
                    <input class="form-control" type="text" placeholder="Tìm kiếm…">
                    <button><i class="ps-icon-search"></i></button>
                </form>
                @include('shop::checkout.cart.mini-cart')
                
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>

</header>

<div class="header-services">
    <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
    </div>
</div>
