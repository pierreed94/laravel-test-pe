

@extends('layouts.front')

@section('content')


    @include('front.includes.breadcrumb')

    <main>
        <section>
            <div class="container">

                <div class="row">

                    @foreach($objects as $o )
                        @include('front.includes.card-product')
                    @endforeach
                </div>

                <hr>

                <div class="pagination d-flex justify-content-center">
                    <!-- pagination -->
                    {{ $objects->links() }}
                </div>

            </div>
        </section>
    </main>

@stop


