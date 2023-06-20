<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <span class="fs-4">Espace privé</span> <br>
        @auth()
            <span>
                {{ \Illuminate\Support\Facades\Auth::user()->name }}
            </span>
        @endauth
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li>
            <a href="{{ route('home') }}" title="Voir le site public"   class="nav-link text-white">
                Voir le site
            </a>
        </li>
        <li>
            <a href="{{ route('home_admin') }}" title="Dashbord admin"   class="nav-link text-white">
                Mes produits
            </a>
        </li>

        <li>
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="nav-link text-white">
                    Se déconnecter
                </button>
            </form>

        </li>
    </ul>

</div>
