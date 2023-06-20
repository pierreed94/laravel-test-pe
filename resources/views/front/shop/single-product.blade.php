@extends('layouts.front')

@section('content')
    @include('front.includes.breadcrumb')


    <main>
        <section class="pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/runner-1.jpeg') }}" alt="{{ $object->name }}">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h1>{{ $object->name }}</h1>

                        <span class="price d-block mb-3">{{ $object->getCalculTVA($object->price)['priceTTC'] }} € </span>
                        <h6>Description</h6>

                        <p>{{ $object->summary }}</p>


                        <p class="mb-3">Drop {{ $object->drop }} mm</p>

                        <a  title="Ajouter {{ $object->name }} au panier" class="button__secondary add__product">Ajouter au panier</a>


                        <span class="success__add"></span>


                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text">
                            {{ $object->text }}
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bg-body-tertiary">
            <div class="container-fluid">
                <div class="row">
                    <h3 class="text-center">Une question sur ce produit ?</h3>
                    @include('front.includes.form')
                </div>
            </div>

        </section>
    </main>
    @section('scripts')


        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script>

            $(document).ready(function() {

                /**
                 * add produt
                 */

                $(".add__product").click(function (e) {
                    e.preventDefault();

                    var element = $(this);

                        $.ajax({
                            url: '{{ route('add_cart', $object->id) }}',
                            method: "POST",
                            data: {
                                _token: '{{ csrf_token() }}',
                                id: '{{ $object->id }}'
                            },
                            success: function (response) {
                                $("#icon__cart").html(response.view)

                                $(".success__add").text('Produit bien ajouté au panier !')
                                setTimeout(() => {
                                    $(".success__add").text('')
                                }, 2000)

                            }
                        });

                });
            })


        </script>
    @endsection
@stop


