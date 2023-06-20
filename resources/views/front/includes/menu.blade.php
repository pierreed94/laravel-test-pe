<div class="subheader bg-body-tertiary  d-none  d-sm-block">
    <div class="container">
        <div class="d-flex justify-content-between">

            <span><i class="bi bi-geo-alt"></i> Roanne</span>
            <span>Livraison gratuite dès 50€ d'achat</span>
            <span>S.A.V 06 59 93 41 53</span>

        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ Vite::asset('resources/images/logo-ckc.svg') }}" alt="Logo CKC" width="100"  class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}" title="Page accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category') }}" title="Page catalogue">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product_price') }}" titile="Page tableau dex prix">Tableau des prix</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}" title="Page contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex ms-auto">
                <ul class="navbar-nav">

                    @auth()
                        <li class="nav-item">
                            <form action="{{ route('auth.logout') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="nav-link">
                                    Se déconnecter
                                </button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('auth.login') }}">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('register') }}">Créer un compte</a>
                        </li>
                    @endguest


                    <li class="nav-item" id="icon__cart">
                        @include('front.includes.count-cart')
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

