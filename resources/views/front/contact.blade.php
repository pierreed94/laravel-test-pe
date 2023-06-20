@extends('layouts.front')

@section('content')

    @include('front.includes.breadcrumb')

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Une question ? contactez-nous</h2>
                        @include('front.includes.form')
                    </div>
                </div>
            </div>
        </section>
    </main>


@stop


