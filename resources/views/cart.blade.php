@extends('layoutCommon')

@section('content')
<!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Cart</h3>
                        <ul>
                            <li><a href="home.html">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-70">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                    <form method="POST" action="{{route('updateCart')}}">
                        @csrf
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                            <th class="product_remove">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $total=0; ?>
                                        @foreach($cart as $c)
                                        <tr>
                                            <td class="product_thumb"><a href="#"><img
                                                        src="{{$c->thumbnail}}" alt=""></a></td>
                                            <td class="product_name"><a href="#">{{$c->nama}}</a></td>
                                            <td class="product-price">Rp {{number_format($c->harga,0,",",".")}}</td>
                                            <td class="product_quantity"><label>Quantity</label> 
                                                <input type="hidden" name="product_id[]" value="{{$c->product_id}}">
                                                <input min="1" name="quantity[]" max="100" value="{{$c->quantity}}" type="number"></td>
                                            <td class="product_total">Rp {{number_format($c->harga*$c->quantity,0,",",".")}}</td>
                                            <td class="product_remove"><a href="{{ url("deleteCart").'/'.$c->id}}"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <?php $total+=$c->harga*$c->quantity; ?>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">Rp {{number_format($total,0,",",".")}}</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="#">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
        </div>
    </div>
    <!--shopping cart area end -->

    @endsection