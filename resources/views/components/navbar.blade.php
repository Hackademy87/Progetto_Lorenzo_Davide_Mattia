<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.create') }}">aggiungi prodotto</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('your.products') }}">i tuoi prodotti</a>
                  </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Materiali
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($materials as $material)
                            <li><a class="dropdown-item" href="#">{{ $material->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @if (Auth::user() == null)
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary mx-2" href="{{ route('register') }}">Registrati</a>
                    </li>
                @else
                    <li class="nav-item">
                        {{ Auth::user()->name }}
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-secondary mx-2">Logout</button>
                        </form>
                    </li>
                @endif
            </ul>


        </div>
    </div>
</nav>
