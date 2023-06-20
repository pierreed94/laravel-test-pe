<table class="table">
    <thead>
    <tr>
        <th>Produit</th>
        <th>Prix HT</th>
        <th>Qté</th>
        <th>Prix TTC</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @php
        $total = 0 ;
        $qtTotal = 0;
    @endphp
    @if(session('cart'))
        @foreach(session('cart') as $k => $o)
            <tr rowId="{{ $k }}">
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-12">
                            <h6>{{ $o['name'] }}</h6>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{ $o['price'] }}</td>
                <td><input type="number" min="1" max="10" class="input__qt" value="{{  $o['quantity'] }}"></td>
                <td>{{ ( $o['quantity'] * $o['price']) * 1.20  }} €</td>
                <td class="actions">
                    <a class="btn btn-outline-danger btn-sm delete__product">supprimer</a>
                </td>
            </tr>
            @php $total += ( $o['quantity'] * $o['price']) * 1.20  @endphp
            @php $qtTotal +=  $o['quantity']  @endphp
        @endforeach
        <tr>
            <td colspan="2">Total</td>
            <td>{{ $qtTotal }}</td>
            <td> {{ $total }} € </td>
            <td></td>
        </tr>
    @endif
    </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>

    $(document).ready(function() {


        /**
         * update la page cart (quantité)
         */

            $('.input__qt').on( "change", function(e) {
                e.preventDefault();
                var element = $(this);


                $.ajax({
                    url: '{{ route('update_cart') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: element.parents("tr").attr("rowId"),
                        qt: element.val(),
                    },
                    success: function (response) {
                        console.log('success', response)

                        console.log(response.view)
                        $("#cart").html(response.view);

                        $("#icon__cart").html(response.view2)

                    }
                });
            } );



        /**
         * supprimer le produit du panier
         */
        $(".delete__product").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Voulez-vous vraiment supprimer le(s) produit(s) du panier ?")) {
                $.ajax({
                    url: '{{ route('delete_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("rowId")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    })



</script>
