@extends('layoutCommon')

@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Wishlist</h3>
                        <ul>
                            <li><a href="home.html">home</a></li>
                            <li>Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--wishlist area start -->
    <div class="wishlist_area mt-70">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc wishlist">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>

                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Stock Status</th>
                                            <th class="product_total">Add To Cart</th>
                                            <th class="product_remove">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($whislist as $whislistt)
                                        <tr>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="{{$whislistt->thumbnail}}" alt=""></a></td>
                                            <td class="product_name"><a href="#">{{$whislistt->nama}}</a></td>
                                            <td class="product-price">Rp. {{number_format($whislistt->harga,0,",",".")}}</td>
                                            <td class="product_quantity">{{$whislistt->status}}</td>
                                            @if ($whislistt->status != "Available")
                                            <td class="product_total"><a href="{{url('addCart').'/'.$whislistt->id}}">Add To Cart</a></td>
                                            @else
                                            <td class="product_total"><a style="background-color:grey">Add To Cart</a></td>
                                            @endif
                                            <td class="product_remove"><a href="{{ url("deleteWhislist").'/'.$whislistt->id}}">X</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--wishlist area end -->

    @endsection
