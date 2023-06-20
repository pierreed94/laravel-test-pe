<!doctype html>

<html>

<head>
    @include('front.includes.head')
</head>

<body>

    <div class="container-fluid">

        <div id="main" class="row">

            @include('front.includes.menu')

            @yield('content')

        </div>

            @include('front.includes.footer')

    </div>

    @yield('scripts')

</body>

</html>
