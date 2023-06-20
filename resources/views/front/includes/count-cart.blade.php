<a  class="nav-link cart__nav"  href="{{ route('cart') }}">
    <i class="bi bi-cart"></i>
    @if(count((array) session('cart')) > 0)
        @php $qt = 0 @endphp
        @foreach(session('cart') as $o)
            @php $qt += $o['quantity']  ;@endphp
        @endforeach

        <span class="badge__count__cart">{{ $qt }}</span>

    @endif
</a>
