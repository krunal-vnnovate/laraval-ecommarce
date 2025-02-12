<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.frontend.head')

<body class="preload-wrapper">
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        @include('layouts.frontend.nav')
        <section class="flat-spacing-9">
            <div class="container">
                @yield('content')
            </div>
        </section>
        @include('layouts.frontend.footer')
    </div>
    @include('layouts.frontend.script')
</body>

</html>