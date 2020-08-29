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
                <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p>
                                Username or email <span>*</span>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </p>
                            <p>
                                Passwords <span>*</span>
                                <input id="password" type="password"  name="password" required autocomplete="current-password">
                            </p>
                            <div class="login_submit">
                                <a href="{{ route('password.request') }}">Forgot your password?</a>
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Remember me
                                </label>
                                <button type="submit">login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->
            </div>
            <div class="forgot_password">
                <a href="{{ route('register') }}">Don't have an account?</a>
            </div>
        </div>
    </div>
    <!-- customer login end -->
@endsection