@extends('frontend.default.master')
@section('content')

    <div id="top-banner-and-menu">
        <div class="container">

            <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown">
                    <div class="head"><i class="fa fa-list"></i> all departments</div>
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul class="list-unstyled">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="index-2.html">Home Alt</a></li>
                                                    <li><a href="category-grid.html">Category - Grid/List</a></li>
                                                    <li><a href="category-grid-2.html">Category 2 - Grid/List</a></li>
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="single-product-sidebar.html">Single Product with
                                                            Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="list-unstyled">
                                                    <li><a href="{{ route('frontend.cart.index') }}">Shopping Cart</a></li>
                                                    <li><a href="{{ route('frontend.checkout.index') }}">Checkout</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="list-unstyled">
                                                    <li><a href="authentication.html">Login/Register</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Value of the Day</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laptops &amp; Computers</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cameras &amp; Photography</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phones &amp;
                                    Tablets</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video Games &amp;
                                    Consoles</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TV &amp; Audio</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gadgets</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Car Electronic &amp; GPS</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Accessories</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Computer Cases &amp; Accessories</a></li>
                                                    <li><a href="#">CPUs, Processors</a></li>
                                                    <li><a href="#">Fans, Heatsinks &amp; Cooling</a></li>
                                                    <li><a href="#">Graphics, Video Cards</a></li>
                                                    <li><a href="#">Interface, Add-On Cards</a></li>
                                                    <li><a href="#">Laptop Replacement Parts</a></li>
                                                    <li><a href="#">Memory (RAM)</a></li>
                                                    <li><a href="#">Motherboards</a></li>
                                                    <li><a href="#">Motherboard &amp; CPU Combos</a></li>
                                                    <li><a href="#">Motherboard Components &amp; Accs</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-xs-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Power Supplies Power</a></li>
                                                    <li><a href="#">Power Supply Testers Sound</a></li>
                                                    <li><a href="#">Sound Cards (Internal)</a></li>
                                                    <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                                                    <li><a href="#">Other</a></li>
                                                </ul>
                                            </div>

                                            <div class="dropdown-banner-holder">
                                                <a href="#"><img alt=""
                                                                 src="{{ asset('themes/default/assets/images/banners/banner-side.png') }}"/></a>
                                            </div>
                                        </div>
                                        <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                    </li>
                                </ul>
                            </li><!-- /.menu-item -->
                            <li>
                                <a href="http://themeforest.net/item/media-center-electronic-ecommerce-html-template/8178892?ref=shaikrilwan">Buy
                                    this Theme</a></li>
                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
            </div><!-- /.sidemenu-holder -->

            <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        <div class="item"
                             style="background-image: url({{ asset('themes/default/assets/images/sliders/slider01.jpg') }});">
                            <div class="container-fluid">
                                <div class="caption vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        Save up to a<span class="big"><span class="sign">$</span>400</span>
                                    </div>

                                    <div class="excerpt fadeInDown-2">
                                        on selected laptops<br>
                                        & desktop pcs or<br>
                                        smartphones
                                    </div>
                                    <div class="small fadeInDown-2">
                                        terms and conditions apply
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="single-product.html" class="big le-button ">shop now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->

                        <div class="item"
                             style="background-image: url({{ asset('themes/default/assets/images/sliders/slider03.jpg') }});">
                            <div class="container-fluid">
                                <div class="caption vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        Want a<span class="big"><span class="sign">$</span>200</span>Discount?
                                    </div>

                                    <div class="excerpt fadeInDown-2">
                                        on selected <br>desktop pcs<br>
                                    </div>
                                    <div class="small fadeInDown-2">
                                        terms and conditions apply
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="single-product.html" class="big le-button ">shop now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->

                    </div><!-- /.owl-carousel -->
                </div>

                <!-- ========================================= SECTION – HERO : END ========================================= -->
            </div><!-- /.homebanner-holder -->

        </div><!-- /.container -->
    </div><!-- /#top-banner-and-menu -->

    <!-- ========================================= HOME BANNERS ========================================= -->
    <section id="banner-holder" class="wow fadeInUp">
        <div class="container">
            <div class="col-xs-12 col-lg-6 no-margin banner">
                <a href="category-grid-2.html">
                    <div class="banner-text theblue">
                        <h1>New Life</h1>
                        <span class="tagline">Introducing New Category</span>
                    </div>
                    <img class="banner-image" alt="" src="{{ asset('themes/default/assets/images/blank.gif') }}"
                         data-echo="{{ asset('themes/default/assets/images/banners/banner-narrow-01.jpg') }}"/>
                </a>
            </div>
            <div class="col-xs-12 col-lg-6 no-margin text-right banner">
                <a href="category-grid-2.html">
                    <div class="banner-text right">
                        <h1>Time &amp; Style</h1>
                        <span class="tagline">Checkout new arrivals</span>
                    </div>
                    <img class="banner-image" alt="" src="{{ asset('themes/default/assets/images/blank.gif') }}"
                         data-echo="{{ asset('themes/default/assets/images/banners/banner-narrow-02.jpg') }}"/>
                </a>
            </div>
        </div><!-- /.container -->
    </section><!-- /#banner-holder -->
    <!-- ========================================= HOME BANNERS : END ========================================= -->
    <div id="products-tab" class="wow fadeInUp">
        <div class="container">
            <div class="tab-holder">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li><a href="#latest-products" data-toggle="tab">Sản Phẩm Mới</a></li>
                    <li class="active"><a href="#featured" data-toggle="tab">Bán chạy</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane" id="latest-products">
                        <div class="product-grid-holder">
                            @forelse($products as $product)
                                <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                    <div class="product-item">
                                        {{--<div class="ribbon red"><span>sale</span></div>--}}
                                        {{--<div class="ribbon green"><span>bestseller</span></div>--}}
                                        {{--<div class="ribbon blue"><span>new</span></div>--}}

                                        <div class="image">
                                            @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image"))))
                                                <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                     data-echo="{{ asset(get_thumbnail("uploads/$product->image")) }}"
                                                     alt="Image">
                                            @else
                                                <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                     data-echo="{{ asset('images/no_image_thumb.jpg') }}"
                                                     alt="No Image">
                                            @endif
                                        </div>
                                        <div class="body">
                                            {{--<div class="label-discount green">-50% sale</div>--}}
                                            <div class="title">
                                                <a href="{{ route('frontend.home.show', ['slug' => str_slug($product->name), 'id' => $product->id]) }}">{{ $product->name }}</a>
                                            </div>
                                            <div class="brand">{{ $product->code }}</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-prev">{{ number_format($product->regular_price, 0, ',', '.') }}
                                                VND
                                            </div>
                                            <div class="price-current pull-right">{{ number_format($product->sale_price, 0, ',', '.') }}
                                                VND
                                            </div>
                                        </div>

                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="#" class="le-button"
                                                   v-on:click="addToCart({{ $product->id }}, $event)">Thêm giỏ hàng</a>
                                            </div>
                                            {{--<div class="wish-compare">--}}
                                            {{--<a class="btn-add-to-wishlist" href="#">add to wishlist</a>--}}
                                            {{--<a class="btn-add-to-compare" href="#">compare</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div>Không có dữ liệu</div>
                            @endforelse
                        </div>
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="#">
                                <i class="fa fa-plus"></i>
                                load more products</a>
                        </div>

                    </div>
                    <div class="tab-pane active" id="featured">
                        <div class="product-grid-holder">
                            @forelse($featured_products as $product)
                                <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                                    <div class="product-item">
                                        {{--<div class="ribbon red"><span>sale</span></div>--}}
                                        {{--<div class="ribbon green"><span>bestseller</span></div>--}}
                                        {{--<div class="ribbon blue"><span>new</span></div>--}}

                                        <div class="image">
                                            @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image"))))
                                                <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                     data-echo="{{ asset(get_thumbnail("uploads/$product->image")) }}"
                                                     alt="Image">
                                            @else
                                                <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                     data-echo="{{ asset('images/no_image_thumb.jpg') }}"
                                                     alt="No Image">
                                            @endif
                                        </div>
                                        <div class="body">
                                            {{--<div class="label-discount green">-50% sale</div>--}}
                                            <div class="title">
                                                <a href="{{ route('frontend.home.show', ['slug' => str_slug($product->name), 'id' => $product->id]) }}">{{ $product->name }}</a>
                                            </div>
                                            <div class="brand">{{ $product->code }}</div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-prev">{{ number_format($product->regular_price, 0, ',', '.') }}
                                                VND
                                            </div>
                                            <div class="price-current pull-right">{{ number_format($product->sale_price, 0, ',', '.') }}
                                                VND
                                            </div>
                                        </div>

                                        <div class="hover-area">
                                            <div class="add-cart-button">
                                                <a href="#" class="le-button"
                                                   v-on:click="addToCart({{ $product->id }}, $event)">Thêm giỏ hàng</a>
                                            </div>
                                            {{--<div class="wish-compare">--}}
                                            {{--<a class="btn-add-to-wishlist" href="#">add to wishlist</a>--}}
                                            {{--<a class="btn-add-to-compare" href="#">compare</a>--}}
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div>Không có dữ liệu</div>
                            @endforelse
                        </div>
                        <div class="loadmore-holder text-center">
                            <a class="btn-loadmore" href="#">
                                <i class="fa fa-plus"></i>
                                load more products</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================================= BEST SELLERS ========================================= -->
    @if (count($best_sellers) >= 7)
        <section id="bestsellers" class="color-bg wow fadeInUp">
            <div class="container">
                <h1 class="section-title">Best Sellers</h1>

                <div class="product-grid-holder medium">
                    <div class="col-xs-12 col-md-7 no-margin">
                        @php
                            $count = 0;
                        @endphp
                        @foreach($best_sellers as $product)
                            @php
                                $count++;
                            @endphp
                            @if ($count === 2 || $count === 5)
                                <div class="row no-margin">
                                    @endif
                                    @if ($count !== 1)
                                        <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                                            <div class="product-item">
                                                <div class="image">
                                                    @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image"))))
                                                        <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                             data-echo="{{ asset(get_thumbnail("uploads/$product->image")) }}"
                                                             alt="Image">
                                                    @else
                                                        <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                             data-echo="{{ asset('images/no_image_thumb.jpg') }}"
                                                             alt="No Image">
                                                    @endif
                                                </div>
                                                <div class="body">
                                                    {{--<div class="label-discount green">-50% sale</div>--}}
                                                    <div class="title">
                                                        <a href="{{ route('frontend.home.show', ['slug' => str_slug($product->name), 'id' => $product->id]) }}">{{ $product->name }}</a>
                                                    </div>
                                                    <div class="brand">{{ $product->code }}</div>
                                                </div>
                                                <div class="prices">
                                                    <div class="price-current text-right">{{ number_format($product->sale_price, 0, ',', '.') }}
                                                        VND
                                                    </div>
                                                </div>

                                                <div class="hover-area">
                                                    <div class="add-cart-button">
                                                        <a href="#" class="le-button"
                                                           v-on:click="addToCart({{ $product->id }}, $event)">Thêm giỏ hàng</a>
                                                    </div>
                                                    {{--<div class="wish-compare">--}}
                                                    {{--<a class="btn-add-to-wishlist" href="#">add to wishlist</a>--}}
                                                    {{--<a class="btn-add-to-compare" href="#">compare</a>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div><!-- /.product-item-holder -->
                                    @endif
                                    @if ($count === 4 || $count == 7)
                                </div><!-- /.row -->
                            @endif
                        @endforeach

                    </div><!-- /.col -->
                    @foreach($best_sellers as $product)
                        <div class="col-xs-12 col-md-5 no-margin">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                                    @forelse($product->attachments as $key => $file)
                                        <div class="single-product-gallery-item" id="slide-{{ $key }}">
                                            @if (file_exists(public_path(get_thumbnail("uploads/" . $file->path, '_450x337' ))))
                                                <a data-rel="prettyphoto"
                                                   href="{{ asset('uploads/' . get_thumbnail($file->path, '_450x337')) }}">
                                                    <img class="img-responsive" alt=""
                                                         src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                         data-echo="{{ asset('uploads/' . get_thumbnail($file->path, '_450x337')) }}"/>
                                                </a>
                                            @else
                                                <img src="{{ asset('images/no_image.jpg') }}" alt="No Image"
                                                     class="img-responsive">
                                            @endif

                                        </div><!-- /.single-product-gallery-item -->
                                    @empty
                                        <div class="single-product-gallery-item" id="slide-0">
                                            @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image"))))
                                                <a data-rel="prettyphoto"
                                                   href="{{ asset('uploads/' . get_thumbnail($product->image, '_450x337')) }}">
                                                    <img class="img-responsive" alt=""
                                                         src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                         data-echo="{{ asset('uploads/' . get_thumbnail($product->image, '_450x337')) }}"/>
                                                </a>
                                            @else
                                                <img src="{{ asset('images/no_image.jpg') }}" alt="No Image"
                                                     class="img-responsive">
                                            @endif

                                        </div><!-- /.single-product-gallery-item -->
                                    @endforelse
                                </div><!-- /.single-product-slider -->

                                <div class="gallery-thumbs clearfix">
                                    <ul>
                                        @forelse($product->attachments as $key => $file)
                                            @if (file_exists(public_path(get_thumbnail("uploads/" . $file->path, '_80x80' ))))
                                                <li><a class="horizontal-thumb active" data-target="#best-seller-single-product-slider"
                                                       data-slide="{{ $key }}"
                                                       href="#slide-{{ $key }}">
                                                        <img class="img-responsive" alt=""
                                                             src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                                             data-echo="{{ asset('uploads/' . get_thumbnail($file->path, '_80x80')) }}"/>
                                                    </a></li>
                                            @else
                                                <li>
                                                    <a href="#" class="horizontal-thumb">
                                                        <img src="{{ asset('images/no_image.jpg') }}" alt="No Image"
                                                             class="img-responsive">
                                                    </a>
                                                </li>
                                            @endif
                                        @empty
                                        @endforelse

                                    </ul>
                                </div><!-- /.gallery-thumbs -->

                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="{{ route('frontend.home.show', ['slug' => str_slug($product->name), 'id' => $product->id]) }}">{{ $product->name }}</a>
                                    </div>
                                    <div class="brand">{{ $product->code }}</div>
                                </div>
                                <div class="prices text-right">
                                    <div class="price-current inline">{{ number_format($product->sale_price, 0, ',', '.') }} VND</div>
                                    <a href="#" class="le-button big inline" v-on:click="addToCart({{ $product->id }}, $event)">Thêm giỏ hàng</a>
                                </div>
                            </div><!-- /.product-item-holder -->
                        </div><!-- /.col -->
                        @break
                    @endforeach
                </div><!-- /.product-grid-holder -->
            </div><!-- /.container -->
        </section><!-- /#bestsellers -->
    @endif
    <!-- ========================================= BEST SELLERS : END ========================================= -->
    <!-- ========================================= RECENTLY VIEWED ========================================= -->
    <section id="recently-reviewd" class="wow fadeInUp">
        <div class="container">
            <div class="carousel-holder hover">

                <div class="title-nav">
                    <h2 class="h1">Recently Viewed</h2>
                    <div class="nav-holder">
                        <a href="#prev" data-target="#owl-recently-viewed"
                           class="slider-prev btn-prev fa fa-angle-left"></a>
                        <a href="#next" data-target="#owl-recently-viewed"
                           class="slider-next btn-next fa fa-angle-right"></a>
                    </div>
                </div><!-- /.title-nav -->

                <div id="owl-recently-viewed" class="owl-carousel product-grid-holder">
                    @foreach($recent_products as $product)
                        <div class="no-margin carousel-item product-item-holder size-small hover">
                            <div class="product-item">
                                <div class="image">
                                    @if (!empty($product->image) && file_exists(public_path(get_thumbnail("uploads/$product->image"))))
                                        <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                             data-echo="{{ asset(get_thumbnail("uploads/$product->image")) }}"
                                             alt="Image">
                                    @else
                                        <img src="{{ asset('themes/default/assets/images/blank.gif') }}"
                                             data-echo="{{ asset('images/no_image_thumb.jpg') }}"
                                             alt="No Image">
                                    @endif
                                </div>
                                <div class="body">
                                    {{--<div class="label-discount green">-50% sale</div>--}}
                                    <div class="title">
                                        <a href="{{ route('frontend.home.show', ['slug' => str_slug($product->name), 'id' => $product->id]) }}">{{ $product->name }}</a>
                                    </div>
                                    <div class="brand">{{ $product->code }}</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">{{ number_format($product->regular_price, 0, ',', '.') }}
                                        VND
                                    </div>
                                    <div class="price-current pull-right">{{ number_format($product->sale_price, 0, ',', '.') }}
                                        VND
                                    </div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="#" class="le-button"
                                           v-on:click="addToCart({{ $product->id }}, $event)">Thêm giỏ hàng</a>
                                    </div>
                                    {{--<div class="wish-compare">--}}
                                    {{--<a class="btn-add-to-wishlist" href="#">add to wishlist</a>--}}
                                    {{--<a class="btn-add-to-compare" href="#">compare</a>--}}
                                    {{--</div>--}}
                                </div>
                            </div><!-- /.product-item -->
                        </div><!-- /.product-item-holder -->
                    @endforeach
                </div><!-- /#recently-carousel -->

            </div><!-- /.carousel-holder -->
        </div><!-- /.container -->
    </section><!-- /#recently-reviewd -->
    <!-- ========================================= RECENTLY VIEWED : END ========================================= -->
    <!-- ========================================= TOP BRANDS ========================================= -->
    <section id="top-brands" class="wow fadeInUp">
        <div class="container">
            <div class="carousel-holder">

                <div class="title-nav">
                    <h1>Top Brands</h1>
                    <div class="nav-holder">
                        <a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
                        <a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
                    </div>
                </div><!-- /.title-nav -->

                <div id="owl-brands" class="owl-carousel brands-carousel">

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('themes/default/assets/images/brands/brand-01.jpg') }}"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('themes/default/assets/images/brands/brand-02.jpg') }}"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('themes/default/assets/images/brands/brand-03.jpg') }}"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('themes/default/assets/images/brands/brand-04.jpg') }}"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('themes/default/assets/images/brands/brand-01.jpg') }}"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('themes/default/assets/images/brands/brand-02.jpg') }}"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('themes/default/assets/images/brands/brand-03.jpg') }}"/>
                        </a>
                    </div><!-- /.carousel-item -->

                    <div class="carousel-item">
                        <a href="#">
                            <img alt="" src="{{ asset('themes/default/assets/images/brands/brand-04.jpg') }}"/>
                        </a>
                    </div><!-- /.carousel-item -->

                </div><!-- /.brands-caresoul -->

            </div><!-- /.carousel-holder -->
        </div><!-- /.container -->
    </section><!-- /#top-brands -->
    <!-- ========================================= TOP BRANDS : END ========================================= -->
@endsection
@section('body_scripts')

@endsection