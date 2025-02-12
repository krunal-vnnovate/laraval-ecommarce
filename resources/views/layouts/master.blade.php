<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.nav')
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
    @include('layouts.script')

</body>

</html>