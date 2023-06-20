

@extends('layouts.front')

@section('content')


    <div class="banner" style="background-image: url('{{ Vite::asset('resources/images/runner-1.jpeg') }}')">

        <div class="content__banner">

            <h1>CKC-NET - Vos chaussures de sport</h1>
            <div class="buttons">
                <a href="{{ route('category') }}" class="button__primary" title="Nos chaussures">Nos chaussures</a>
                <a href="{{ route('contact') }}" class="button__secondary"  title="Nos chaussures">Contact</a>
            </div>

        </div>
    </div>


    <section>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xs-12 col-sm-7">
                    <div class="title__sec">
                        <span class="subtitle">
                        CKC-sport
                        </span>

                        <h2>Une marque de sport pour l'élite !</h2>
                    </div>

                    <div class="text">

                        <div class="big__text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolore non sequi vel. Accusantium animi architecto assumenda cumque delectus dolore, ducimus expedita impedit iure
                        </div>

                        <br>

                        labore molestiae necessitatibus praesentium quo quod ullam voluptas voluptatum. Ad aliquam animi architecto blanditiis corporis deleniti dolore doloremque ducimus esse est ex exercitationem, hic id impedit inventore iste iure laborum modi mollitia nemo nisi optio provident quae quod repellat, tenetur totam! Aliquam autem corporis dolorum ex illum ipsa modi odio praesentium! A accusantium aliquid aperiam consequatur deserunt dignissimos dolore dolores dolorum ea enim esse ex impedit molestias nam nobis non nostrum, obcaecati odio omnis optio perferendis quibusdam quisquam sapiente sunt temporibus vel veniam voluptatum.
                    </div>

                </div>

                <div class="col-xs-12 col-sm-5">
                    <img  class="img-fluid" src="{{ Vite::asset('resources/images/runner-1.jpeg') }}" alt="image de présentation de la marque">
                </div>
            </div>
        </div>

    </section>


    <section class="bg-body-secondary">

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title__sec">
                            <h2 class="text-center">Quelques produits</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    @foreach($objects as $o )
                        @include('front.includes.card-product')
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{{ route('category') }}" class="button__secondary">voir les produits </a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="bg__primary">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h4 class="text-white">
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </h4>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" alt="" class="button__third">Contactez-nous</a>
                </div>
            </div>
        </div>
    </section>


@stop


