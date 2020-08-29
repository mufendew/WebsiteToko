
<!--header area start-->

<!--offcanvas menu area start-->
<div class="off_canvars_overlay">
</div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="icon-x"></i></a>
                    </div>
                    <div class="header_account_list register">
                        <ul>
                            <li><a href="register.html">Register</a></li>
                            <li><span>/</span></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </div>

                    <div class="call-support">
                        <p><a href="tel:(08)23456789">(08) 23 456 789</a> Customer Support</p>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="home.html">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Layouts</a>
                                        <ul class="sub-menu">
                                            <li><a href="   ">shop</a></li>
                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                            <li><a href="shop-list.html">List View</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">other Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">my account</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product Types</a>
                                        <ul class="sub-menu">
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="product-sidebar.html">product sidebar</a></li>
                                            <li><a href="product-grouped.html">product grouped</a></li>
                                            <li><a href="variable-product.html">product variable</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">pages </a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="services.html">services</a></li>
                                    <li><a href="faq.html">Frequently Questions</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="login.html">login</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="my-account.html">my account</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about.html">about Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact.html"> Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--offcanvas menu area end-->
<header>
    <div class="header_middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                    <div class="logo">
                    <a href="{{ route('home') }}"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-sm-7 col-8">
                    <div class="header_right_info">
                        <div class="search_container">
                            <form action="{{ route('search') }}" method="get">
                                <div class="hover_category">
                                    <select class="select_option" name="c" id="categori2">
                                        <option selected value="">Select a categories</option>
                                        <option value="Beverage">Beverage</option>
                                        <option value="Food">Food</option>
                                        <option value="Medicine">Drugs & Medicines</option>
                                        <option value="Furniture">Room Furniture</option>
                                        <option value="Bathroom">Bathroom</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input name="kw" placeholder="Search prouct..." value="{{ app('request')->input('kw') }}" type="text">
                                    <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="header_account_area">
                            @guest
                            <div class="header_account_list register d-none d-lg-block d-xl-block">
                                <ul>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                </ul>
                            </div>
                            @else
                            <div class="header_account_list header_wishlist">
                            <a href="{{ route('whislist')}}"><span class="lnr lnr-heart"></span>
                                @if (session('whislistCounter')!== 0)
                                <span class="item_count">{{session('whislistCounter')}}</span>
                                @endif
                             </a>
                            </div>
                            <div class="header_account_list ">
                                {{-- href="javascript:void(0)" --}}
                                    <a href="{{ route('cart')}}" ><span class="lnr lnr-cart"></span>
                                    @if (session('whislistCounter')!== 0)
                                    <span class="item_count">{{session('cartCounter')}}</span>
                                    @endif
                                </a>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="cart_gallery">
                                        <div class="cart_close">
                                            <div class="cart_text">
                                                <h3>cart</h3>
                                            </div>
                                            <div class="mini_cart_close">
                                                <a href="javascript:void(0)"><i class="icon-x"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Primis In Faucibus</a>
                                                <p>1 x <span> $65.00 </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="icon-x"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">Letraset Sheets</a>
                                                <p>1 x <span> $60.00 </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="icon-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_table_border">
                                            <div class="cart_total">
                                                <span>Sub total:</span>
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="cart_total mt-10">
                                                <span>total:</span>
                                                <span class="price">$125.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                                        </div>

                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                            <div class="header_account_list header_wishlist">
                                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><span class="lnr lnr-power-switch"></span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bottom sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle">All Cattegories</h2>
                        </div>
                        <div class="categories_menu_toggle">
                            <ul>
                                <li><a href="{{route('search')}}?c=Beverege">Beverage</a></li>
                                <li><a href="{{route('search')}}?c=Food">Food</a></li>
                                <li><a href="{{route('search')}}?c=Drugs">Drugs & Medicine</a></li>
                                <li><a href="{{route('search')}}?c=Furniture">Room Furniture</a></li>
                                <li><a href="{{route('search')}}?c=Bathroom">Bathroom</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--main menu start-->
                    <div class="main_menu">
                        <nav>
                            <ul>
                                {{-- <li class="mega_items"><a class="active" href="shop.html">shop<i
                                            class="fa fa-angle-down"></i></a>
                                    <div class="mega_menu">
                                        <ul class="mega_menu_inner">
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                    <li><a href="shop-fullwidth-list.html">Full Width list</a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar.html">Right Sidebar </a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar-list.html"> Right Sidebar
                                                            list</a></li>
                                                    <li><a href="shop-list.html">List View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">other Pages</a>
                                                <ul>
                                                    <li><a href="cart.html">cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="my-account.html">my account</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Product Types</a>
                                                <ul>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="product-sidebar.html">product sidebar</a></li>
                                                    <li><a href="product-grouped.html">product grouped</a></li>
                                                    <li><a href="variable-product.html">product variable</a>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu pages">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{route('search')}}">Shop</a></li>
                                <li><a href="">Promo</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('FAQ')}}">FAQ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--main menu end-->
                </div>
                <div class="col-lg-3">
                    <div class="call-support">
                        <p><a href="tel:(08)23456789">(08) 23 456 789</a> Customer Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->
