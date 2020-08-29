<!doctype html>
<html class="no-js" lang="en">
@include('fragment.style')

<body>
    @include('fragment.navigation')
    @yield('content')
    @include('fragment.footer')
    @include('fragment.js')
</body>
</html>
