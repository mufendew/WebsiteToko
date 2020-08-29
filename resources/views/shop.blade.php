@extends('layoutCommon')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                    <h3>Search "{{ app('request')->input('kw') }}"</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h3>Catagories</h3>
                                <ul>
                                    <li class="widget_sub_categories">
                                        <a onclick="addUrlParameter('c', 'Beverage')">Beverage</a>
                                    </li>
                                    <li class="widget_sub_categories">
                                        <a onclick="addUrlParameter('c', 'Food')">Food</a>
                                    </li>
                                    <li class="widget_sub_categories">
                                        <a onclick="addUrlParameter('c', 'Medicine')">Drugs & Medicine</a>
                                    </li>
                                    <li class="widget_sub_categories">
                                        <a onclick="addUrlParameter('c', 'Furniture')">Room Furniture</a>
                                    </li>
                                    <li class="widget_sub_categories">
                                        <a onclick="addUrlParameter('c', 'Bathroom')">Bathroom</a>
                                    </li>

                                    <li class="widget_sub_categories sub_categories3"><a
                                            href="javascript:void(0)">More Catagories</a>
                                        <ul class="widget_dropdown_categories dropdown_categories3">
                                            <li><a href="#">Platform Beds</a></li>
                                            <li><a href="#">Storage Beds</a></li>
                                            <li><a href="#">Regular Beds</a></li>
                                            <li><a href="#">Sleigh Beds</a></li>
                                            <li><a href="#">Laundry</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form style="margin-top: -10px;" action="#">
                                    <label for="">highest price</label>
                                    <br>
                                    <span style="position: absolute; left:25px; margin-top: 8px;">Rp</span><input onblur="addHargaTertinggi()" id="hp" value="{{ app('request')->input('hp') }}" style="border: 0.5px solid grey; width:100%; text-align: left; border-radius: 5px; padding: 5px 40px;font-size: 14px" type="number" placeholder="highest price">
                                    <label style="margin-top: 20px;" for="">lowest price</label>
                                    <br>
                                    <span style="position: absolute; left:25px; margin-top: 8px;">Rp</span><input onblur="addHargaTerendah()" id="lp" value="{{ app('request')->input('lp') }}" style="border: 0.5px solid grey; width:100%; text-align: left; border-radius: 5px; padding: 5px 40px;font-size: 14px" type="number" placeholder="lowesr price">

                                </form>
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Merek</h3>
                                <ul>
                                    <li>
                                        <a href="#">Unilever</a>
                                    </li>
                                    <li>
                                        <a href="#">Coca-cola</a>
                                    </li>
                                    <li>
                                        <a href="#">nestle</a>
                                    </li>

                                </ul>
                            </div>
                        
                            <div class="widget_list tags_widget">
                                <h3>Product Brand</h3>
                                <div class="tag_cloud">
                                    <a href="#">Nestle</a>
                                    <a href="#">Unilever</a>
                                    <a href="#">Siantar Top</a>
                                    <a href="#">Walls</a>
                                    <a href="#">Sunlight</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_4" type="button" class=" active btn-grid-4" data-toggle="tooltip"
                                title="4"></button>

                            <button data-role="grid_list" type="button" class="btn-list" data-toggle="tooltip"
                                title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <div class="wrapper">
                                <select  name="fltr" id="fltr" onchange="myFunction()">
                                    <option value="1"><a href="wkwkwk">Sort by rating</a></option>
                                    <option value="2">Sort by newness</option>
                                    <option value="3">Sort by price: low to high</option>
                                    <option value="4">Sort by price: high to low</option>
                                </select>
                                </div>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing {{$products->firstItem()}}–{{$products->firstItem()+20}} of {{$products->total()}} results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    
                    <div class="row shop_wrapper">
                        @foreach ($products as $product)
                        <div class="col-md-4 col-sm-6 col-lg-3 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('product',['slug'=>$product->slug])}}"><img
                                            src="{{$product->thumbnail}}" alt=""></a>
                                    <a class="secondary_img" href="{{route('product',['slug'=>$product->slug])}}"><img
                                        src="{{$product->thumbnail}}" alt=""></a>
                                    <div class="label_product">
                                        @if ($product->is_discount != null)
                                        <span class="label_sale">Sale</span>
                                        @endif
                                        <span class="label_new">New</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            @guest
                                                <li class="add_to_cart"><a href="{{route('login')}}" title="Add to cart"><span
                                                    class="lnr lnr-cart"></span></a></li>
                                                <li class="wishlist"><a href="{{route('login')}}" title="Add to Wishlist"><span
                                                    class="lnr lnr-heart"></span></a></li>
                                            @else
                                                <li class="add_to_cart"><a href="{{url('addCart').'/'.$product->id}}" title="Add to cart"><span
                                                        class="lnr lnr-cart"></span></a></li>
                                                <li class="wishlist"><a href="{{url('addWhislist').'/'.$product->id}}" title="Add to Wishlist"><span
                                                    class="lnr lnr-heart colored" style="color: red"></span></a></li>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                <h4 class="product_name"><a href="product-details.html">{{$product->nama}}</a></h4>
                                    <p>
                                        @foreach($product->catagory as $catagory)
                                            {{$catagory->nama}} 
                                        @endforeach
                                    </p>
                                    <div class="price_box">
                                    <span class="current_price">Rp {{number_format($product->harga,0,",",".")}}</span>
                                    @if ($product->is_discount != null)
                                    <span class="old_price">$362.00</span>
                                    @endif
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">{{$product->nama}}</a></h4>
                                    <p><a href="#"></a></p>
                                    <div class="price_box">
                                        <span class="current_price">Rp {{number_format($product->harga,0,",",".")}}</span>
                                        @if ($product->is_discount != null)
                                        <span class="old_price">$362.00</span>
                                        @endif
                                    </div>
                                    <div class="product_desc">
                                        {{$product->deskripsi}}
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            @guest
                                            <li class="add_to_cart"><a href="{{route('login')}}" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="{{route('login')}}" title="Add to Wishlist"><span
                                                class="lnr lnr-heart"></span></a></li>
                                            @else
                                            <li class="add_to_cart"><a href="{{url('addCart').'/'.$product->id}}" title="Add to cart">Add to cart</a></li>
                                            <li class="wishlist"><a href="{{url('addWhislist').'/'.$product->id}}" title="Add to Wishlist"><span
                                                class="lnr lnr-heart colored" style="color: red"></span></a></li>
                                             @endguest
        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                   

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            {{$products->links()}}

                            {{-- <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul> --}}
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
    <script>
        function addUrlParameter(name, value) {
          var searchParams = new URLSearchParams(window.location.search)
          searchParams.set(name, value)
          searchParams.delete("page")
          window.location.search = searchParams.toString()
        };
        function addHargaTertinggi() {
            var number = document.getElementById("hp").value;
            if (number !== null) {
                var searchParams = new URLSearchParams(window.location.search)
                searchParams.set("hp", number)
                searchParams.delete("page")
                window.location.search = searchParams.toString()
            }  
        }
        function addHargaTerendah() {
            var number = document.getElementById("lp").value;
            if (number !== null) {
                var searchParams = new URLSearchParams(window.location.search)
                searchParams.set("lp", number)
                searchParams.delete("page")
                window.location.search = searchParams.toString()
            }  
        }
        function myFunction() {
            var x = document.getElementById("fltr").value;
            console.log(x);
        }
        function addFilter(e) {
            var number = document.getElementById("fltr").options[e.selectedIndex].value;
            // var a = e.value;
            console.log("wkwkwkwk");
            // if (number !== null) {
            //     var searchParams = new URLSearchParams(window.location.search)
            //     searchParams.set("fltr", number)
            //     window.location.search = searchParams.toString()
            // }  
            //window.location = "home";
        }
    </script>
@endsection