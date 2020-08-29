@extends('layoutCommon')

@section('content')

        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <h3>Login</h3>
                            <ul>
                                <li><a href="home.html">home</a></li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->
    
        <!-- customer login start -->
        <div class="customer_login">
            <div class="container">
                <div class="row">
                    <!--register area start-->
                    <div class="col-lg-6 col-md-6">
                        <div class="account_form register">
                            <h2>Register</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <p>
                                    Name <span>*</span>
                                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </p>
                                
                                <p>
                                    Email address <span>*</span>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </p>
                                <p>
                                    Passwords <span>*</span>
                                    <input id="password" type="password" name="password" required autocomplete="new-password">
                                </p>
                                <p>
                                    Password confirm <span>*</span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </p>
                                <div class="login_submit">
                                    <button type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--register area end-->
                </div>
                <div class="have_account">
                    <a href="{{ route('login') }}">Already have account?</a>
                </div>
            </div>
        </div>
        <!-- customer login end -->
@endsection