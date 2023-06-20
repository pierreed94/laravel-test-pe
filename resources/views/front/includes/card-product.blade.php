<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-5">
    <a href="{{ route('product', ['slug' => $o->slug]) }}" title="{{ $o->name  }}" class="card">
        <img class="card-img-top" src="{{ Vite::asset('resources/images/runner-1.jpeg') }}" alt="{{ $o->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $o->name  }}</h5>

            <span class="price__item">
                {{ $o->getCalculTVA($o->price)['priceTTC'] }} €
            </span>
        </div>
    </a>
</div>
