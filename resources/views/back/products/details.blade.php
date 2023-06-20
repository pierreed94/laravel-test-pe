@extends('layouts.back')

@section('content')
    <div class="row mt-5">
        <div class="col-12">

            <h2>
                {{ $product->name }}, <small> créé le {{ $product->created_at->format('d/m/Y') }}</small>
            </h2>

            <small>Modifié le :  {{ $product->updated_at->format('d/m/Y') }}</small>
            <hr>

            @if($product->quantity > 0)

                <div>En stock</div>

            @else

                <div>En rupture</div>

            @endif

            <div class="mt-3 mb-5 ">
                <h3>Descriptif</h3>
                {{ $product->summary }}
            </div>

            <div class="mb-5">
                <h3>Texte</h3>
                {{ $product->text }}
            </div>


            <div class="mb-5">
                <h3>Prix HT</h3>
                {{ $product->price }} €
            </div>


        </div>
    </div>

@stop
