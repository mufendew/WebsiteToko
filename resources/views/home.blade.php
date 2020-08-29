@extends('layoutCommon')

@section('content')
<section class="slider_section">
<div class="slider_area owl-carousel">
    <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider_content">
                        <h1>Vegetables Big Sale</h1>
                        <h2>Fresh Farm Products</h2>
                        <p>
                            10% certifled-organic mix of fruit and veggies. Perfect for weekly cooking and
                            snacking!
                        </p>
                        <a href="shop.html">Read more </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider_content">
                        <h1>Fresh Vegetables</h1>
                        <h2>Natural Farm Products</h2>
                        <p>
                            Widest range of farm-fresh Vegetables, Fruits & seasonal produce
                        </p>
                        <a href="shop.html">Read more </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="slider_content">
                        <h1>Fresh Tomatoes</h1>
                        <h2>Natural Farm Products</h2>
                        <p>
                            Natural organic tomatoes make your health stronger. Put your information here
                        </p>
                        <a href="shop.html">Read more </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--slider area end-->

<!--shipping area start-->
<div class="shipping_area">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="single_shipping">
                <div class="shipping_icone">
                    <img src="assets/img/about/shipping1.jpg" alt="">
                </div>
                <div class="shipping_content">
                    <h3>Free Shipping</h3>
                    <p>Free shipping on all US order or order above $200</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="single_shipping col_4">
                <div class="shipping_icone">
                    <img src="assets/img/about/shipping4.jpg" alt="">
                </div>
                <div class="shipping_content">
                    <h3>100% Payment Secure</h3>
                    <p>We ensure secure payment with PEV</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--shipping area end-->

<!--banner area start-->
<div class="banner_area">
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="single_banner">
                <div class="banner_thumb">
                    <a href="shop.html"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="single_banner">
                <div class="banner_thumb">
                    <a href="shop.html"><img src="assets/img/bg/banner2.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection