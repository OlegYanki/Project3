<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INTITA API portal</title>
    @section('script')
        @include('layout.common_scripts')
    @show

    @section('style')
        @include('layout.common_styles')
    @show
</head>
<body>

<div class="page-wrapper">
    <header>
        @include('layout.header')
        @yield('header')
    </header>
    @yield('content')
    <div class="page-buffer"></div>
</div>

<div class="page-footer">
    <footer>
        @include('layout.mainFooter')
        @yield('footer')
    </footer>
</div>

</body>
</html>