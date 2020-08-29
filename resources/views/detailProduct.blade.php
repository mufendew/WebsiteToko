@extends('layoutCommon')

@section('content')    
    <!--product details start-->
    <div class="product_details mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{$product->thumbnail}}" data-zoom-image="assets/img/product/productbig4.jpg" alt="big-1">
                            </a>
                        </div>
                        {{-- <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg">
                                        <img src="assets/img/product/productbig4.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                        <img src="assets/img/product/productbig1.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                        <img src="assets/img/product/productbig2.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                        <img src="assets/img/product/productbig3.jpg" alt="zo-th-1" />
                                    </a>

                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">

                            <h1><a href="#">{{$product->nama}}</a></h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price">Rp {{number_format($product->harga,0,",",".")}}</span>
                                @if ($product->is_discount != null)
                                <span class="old_price">$362.00</span>
                                @endif

                            </div>
                            <div class="product_desc">
                                <p>{{$product->deskripsi}}</p>
                            </div>
                            <div class="product_variant quantity">
                                <form action="{{url('/').'/addCart/'.$product->id}}">
                                    <label>quantity</label>
                                    <input name="q" min="1" max="100" value="1" type="number">
                                    <button class="button" type="submit">add to cart</button>
                                </form>
                            </div>
                            <div class=" product_d_action">
                                <a href="{{url('addWhislist').'/'.$product->id}}" title="Add to wishlist">+ Add to Wishlist</a>
                            </div>
                            <div class="product_meta">
                                <span>Category: 
                                    @foreach($product->catagory as $catagory)
                                            {{$catagory->nama}} 
                                        @endforeach
                                </span>
                            </div>

                        
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i>
                                        Share </a>
                                </li>
                                <li><a class="twitter" href="https://twitter.com/intent/tweet?text=Hello%20world&url=www.google.com" title="twitter"><i class="fa fa-twitter"></i> tweet</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->
@endsection