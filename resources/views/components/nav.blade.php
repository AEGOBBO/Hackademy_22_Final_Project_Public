<nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0 nav-custom">
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
                        data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.allCategories') }}</a>
                    <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                        @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('categoryShow', compact('category')) }}"
                                    class="dropdown-item">{{ __("ui.$category->name") }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-title"
                        href="{{ route('advertisement.index') }}">{{ __('ui.allAdvertisements') }}</a>
                </li>
                <div class="dropdown">
                    <a role="button" class="nav-link nav-title dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.allLanguages') }}
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li class="dropdown-item">
                            <x-_locale lang="it" nation='it' />
                        </li>
                        <li class="dropdown-item">
                            <x-_locale lang="en" nation='gb' />
                        </li>
                        <li class="dropdown-item">
                            <x-_locale lang="es" nation='es' />
                        </li>
                    </ul>
                </div>
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-title" href="#!" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.welcome') }} <i class="fa-solid fa-house-tsunami"></i>
                                {{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                @if (Auth::user()->is_revisor)
                                    <li class="nav-item">
                                        <a role="button" class="nav-link position-relative"
                                            href="{{ route('revisor.index') }}">{{ __('ui.toBeRevised') }}
                                            <span
                                                class="position-absolute top-0 start-75 translate-middle-relative">{{ App\Models\Advertisement::toBeRevisonedCount() }}
                                                <span class="visually-hidden">{{ __('ui.allUnreadMessages') }}</span>
                                            </span>
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ route('revisor.become') }}"
                                            class="nav-link">{{ __('ui.workWithUs') }}</a>
                                    </li>
                                @endif
                                {{-- LOGOUT --}}
                                <li class="nav-item me-3 me-lg-0">
                                    <a class="nav-link" href="#"
                                        onclick="event.preventDefault(); document.querySelector('#logout').submit();">
                                        Logout
                                    </a>
                                </li>
                                <form action="{{ route('logout') }}" method="POST" id="logout">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle nav-title" href="#!" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.welcome') }}</a>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                {{-- ACCEDI --}}
                                <li class="nav-item me-3 me-lg-0">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        {{ __('ui.login') }}
                                    </a>
                                </li>
                                {{-- REGISTRATI --}}
                                <li class="nav-item me-3 me-lg-0">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        {{ __('ui.register') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>
