<!doctype html>

<html>

<head>
    @include('front.includes.head')
</head>

<body id="back">

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col-12">
            <div id="main">
                <div class="row">
                    <aside class="col-3 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
                        @include('back.includes.menu')
                    </aside>

                    <main class="col-9">
                        <div class="mx-3">
                            @yield('content')
                        </div>
                    </main>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


            </div>
        </div>
    </div>

</div>

@yield('scripts')

</body>

</html>
