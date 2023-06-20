@extends('layouts.back')

@section('content')

    <div class="row mt-5">
        <div class="col-12">
            <form method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Votre nom">
                    <label for="name">Nom du produit (doit être unique)</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="summary"  name="summary" value="{{ old('summary') }}" placeholder="descriptif">
                    <label for="summary">Descriptif rapide du produit</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" name="text" id="text" placeholder="Présentation du produit"> {{ old('text') }}</textarea>
                    <label for="text">Présentation du produit</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" placeholder="Prix du produit">
                    <label for="price">Prix du produit</label>
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity') }}" placeholder="Quantité">
                    <label for="topic">Quantité</label>
                    @error('quantity')
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="button__secondary ml-auto">Créer le produit</button>
                </div>
            </form>
        </div>
    </div>

@stop
