<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    {{-- Favicon icon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
    {{-- Preloader start --}}
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
            <div class="sk-child sk-bounce4"></div>
        </div>
    </div>
    {{-- Preloader end --}}
    {{-- Main wrapper start --}}
    <div id="main-wrapper">
        {{-- Nav header start --}}
        @include('includes.nav-header')
        {{-- Nav header end --}}
        {{-- Header start --}}
        @include('includes.header')
        {{-- Header end ti-comment-alt --}}
        {{-- Sidebar start --}}
        @include('admin.includes.sidebar')
        {{-- Sidebar end --}}
        {{-- Content body start --}}
        <div class="content-body">
            @yield('content')
        </div>
        {{-- Content body end --}}
        @include('includes.footer')
    </div>
    {{-- Required vendors --}}
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('js/quixnav-init.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('vendor/highlightjs/highlight.pack.min.js') }}"></script>
    @yield('script')
</body>

</html>