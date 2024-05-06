<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><span class="nav-logo">Presto.it</span></a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-title" href="#!" id="categoriesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li><a href="{{ route('categoryShow', compact('category')) }}"
                                    class="dropdown-item">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                </li>
                <li class="nav-item">
                    <a class="nav-link nav-title" href="{{route('advertisement.index')}}">Annunci</a>
                </li>
                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a role="button" class="nav-link nav-title btn btn-sm position-relative" href="{{route('revisor.index')}}">Zona Revisore
                        <span class="position-absolute top-0 start-100 translate-middle-relative">{{App\Models\Advertisement::toBeRevisonedCount()}}<span class="visually-hidden">Messaggi non letti</span></span>
                    </a>
                </li>
                @endif
                @endauth
            </ul>
            <ul class="navbar-nav d-flex flex-row">
                @auth
                    <a class="nav-link" href="#" role="button" aria-expanded="false">
                        Welcome {{ Auth::user()->name }}
                    </a>
                    {{-- LOGOUT --}}
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#"
                            onclick="event.preventDefault(); document.querySelector('#logout').submit();">Logout

                        </a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST" id="logout">
                        @csrf
                    </form>
                @endauth
                @guest
                    {{-- ACCEDI --}}
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fa-regular fa-user icon-custom"></i>
                        </a>
                    </li>
                    {{-- REGISTRATI --}}
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fa-solid fa-user-plus icon-custom"></i>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
