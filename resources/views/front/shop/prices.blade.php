@extends('layouts.front')

@section('content')


    @include('front.includes.breadcrumb')

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 offset-sm-8">
                        <div>
                            <select id="filter" class="form-select" aria-label="Trier par ">
                                <option value="prixUp" selected>Prix croissant</option>
                                <option value="prixDown" >Prix décroissant</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row" >
                    <div class="col-12" id="table__list">
                        @include('front.includes.table-list')
                    </div>
                </div>

            </div>
        </section>
    </main>

 @section('scripts')
     <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
     <script>

         $(document).ready(function() {

             $('#filter').on( "change", function(e) {
                 e.preventDefault();
                 var element = $(this);


                 $.ajax({
                     url: '{{ route('ajaxSortArray') }}',
                     method: "post",
                     data: {
                         _token: '{{ csrf_token() }}',
                         value : element.val()
                     },
                     success: function (response) {
                         console.log('success', response)
                         $("#table__list").html(response.view);
                     },
                 });
             } );

         })



     </script>
 @endsection


@stop


