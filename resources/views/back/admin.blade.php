
@extends('layouts.back')

@section('content')

    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-end mb-5">
            <a href="{{ route('create') }}" class="btn btn-primary" title="Créer un produit">Créer un produit</a> <br>
        </div>
        <hr>
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Nom du produit</th>
                    <th scope="col" style="max-width: 200px;">Descriptif</th>
                    <th scope="col">Créé le</th>
                    <th scope="col">Modifié le</th>
                    <th scope="col">Prix HT</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($objects as $o )
                    <tr>
                        <td>{{ $o->name }}</td>
                        <td style="max-width: 200px;">{{ $o->summary }}</td>
                        <td>{{ $o->created_at->format('d/m/Y') }}</td>
                        <td>{{ $o->updated_at->format('d/m/Y') }} </td>
                        <td>
                            <a href="{{ route('details_admin_product', ['product' => $o->id]) }}" class="btn btn-primary" title="voir le produit">Voir</a> <br>
                            <a href="{{ route('edit', ['product' => $o->id]) }}" class="btn btn-success mt-2" title="Modifier le produit">Modifier</a> <br>
                            <form action="{{ route('delete_product', $o->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-2" title="supprimer le produit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@stop


