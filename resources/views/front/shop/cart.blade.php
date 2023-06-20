@extends('layouts.front')

@section('content')


    @include('front.includes.breadcrumb')

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="cart">
                            @if(session('cart'))
                                @include('front.includes.table-cart')
                            @else
                                <h2>Votre panier est vide</h2>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@stop
