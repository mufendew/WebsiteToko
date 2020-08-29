@extends('layoutCommon')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Checkout</h3>
                        <ul>
                            <li><a href="home.html">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->

    <div class="Checkout_section mt-70">
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="user-actions">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Already have an account?
                            <a class="Returning" href="login.html">Click here to login</a>
                        </h3>
                    </div>
                </div>
            </div> --}}
            <form action="{{route('checkoutProceed')}}" method="POST">
                @csrf
            <div class="checkout_form">
                <div class="row">
                    @if (!$address)
                    <div class="col-lg-12">
                        
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <label>Full Name <span>*</span></label>
                                    <input name="name" type="text">
                                </div>
                                <div class="col-12">
                                    <div class="order-notes" >
                                        <label for="order_note">Address</label>
                                        <textarea name="address" style="height: 100px"  placeholder="Masukan alamat lengkap"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-20">
                                    <label>Town / City <span>*</span></label>
                                    <input name="city" type="text">
                                </div>
                                <div class="col-lg-4 mb-20">
                                    <label>State / Province <span>*</span></label>
                                    <input name="province" type="text">
                                </div>
                                <div class="col-lg-4 mb-20">
                                    <label>Postal Code <span>*</span></label>
                                    <input name="postal_code" type="text">
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <label>Phone<span>*</span></label>
                                    <input name="phone" type="text">

                                </div>
                                {{-- <div class="col-12">
                                    <div class="order-notes">
                                        <label for="order_note">Order Notes</label>
                                        <textarea id="order_note"
                                            placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div> --}}
                            </div>
                    </div>
                    @else
                    <div class="col-lg-12">
                    <h3>Billing Details</h3>
                    <div class="row">
                        <div class="col-lg-12" style="margin-left:10px">
                            <h4>Nama :</h4>
                            <h5>{{$address->name}}</h5>
                            <h4>No HP :</h4>
                            <h5>{{$address->phone}}</h5>
                            <h4>Alamat : </h4>
                            <h5>{{$address->address}}</h5>
                            <h5>{{$address->city}}, {{$address->province}}</h5>
                        </div>
                    </div>
                    </div>
                    @endif
                    <div class="col-lg-12 col-md-6">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $total=0; ?>
                                        @foreach ($cart as $c)
                                        <tr>
                                        <td> {{$c->nama}} <strong> × {{$c->quantity}}</strong></td>
                                            <td>Rp {{number_format($c->harga*$c->quantity,0,",",".")}}</td>
                                        </tr>
                                        <?php $total+=$c->harga*$c->quantity; ?>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>Rp {{number_format($total,0,",",".")}}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>Rp 0</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>Rp {{number_format($total,0,",",".")}}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div class="order_button" style="float: right;">
                            <button type="submit">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!--Checkout page section end-->
    
@endsection