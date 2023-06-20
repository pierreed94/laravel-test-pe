<table class="table">
    <thead>
    <tr>
        <th scope="col">Nom du produit</th>
        <th scope="col">Prix HT</th>
        <th scope="col">TVA (20%) </th>
        <th scope="col">Prix TTC </th>
    </tr>
    </thead>
    <tbody>


    @foreach($objects as $o )
        <tr>
            <td>{{ $o->name }}</td>
            <td>{{ $o->price }} €</td>
            <td>{{ $o->getCalculTVA($o->price)['TVA'] }} €</td>
            <td>{{ $o->getCalculTVA($o->price)['priceTTC'] }} €</td>
        </tr>
    @endforeach
    </tbody>
</table>
