<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}"><span style="color: #5e9693;">Presto.it</span><span
                style="color: #fff;">logist</span></a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#!">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex flex-row">
                @auth
                    <a class="nav-link" href="#" role="button"
                         aria-expanded="false">
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
                            <i class="fa-regular fa-user"></i>
                        </a>
                    </li>
                    {{-- REGISTRATI --}}
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
