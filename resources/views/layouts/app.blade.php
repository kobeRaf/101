<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/footer.js') }}"></script>

   <link rel="icon" href="{{ asset('video/profile.png') }}" type="image/x-icon">

</head>
<style>
    .nav-link {
        position: relative;
        padding: 8px 12px;
        color: #000000;
        transition: color 0.8s ease;
    }

    .nav-link.active {
        color: #000000;
    }

    .nav-underline {
        position: absolute;
        bottom: 0;
        height: 2px;
        background-color: #000000;
        transition: left 0.3s ease, width 0.3s ease;
        z-index: 1;
    }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top text-center">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3>{{ config('app.name', 'Laravel') }}</h3>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Links -->
                @if (!Request::is('login') && !Request::is('register'))
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <ul class="navbar-nav ms-auto position-relative" id="navMenu">
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == '' ? 'active' : '' }}" href="{{ url('/') }}">Top</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'paint' ? 'active' : '' }}" href="{{ route('paint') }}">Paint</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'anime' ? 'active' : '' }}" href="{{ route('anime') }}">Anime</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'goods' ? 'active' : '' }}" href="{{ route('goods') }}">Goods</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'social' ? 'active' : '' }}" href="{{ route('social') }}">Social</a>
                                </li>

                                <span class="nav-underline" id="navUnderline"></span>
                            </ul>

                            <div class="container">
                                @guest
                                    {{-- Hide login/register if on public pages --}}
                                    @if (
                                        !Request::is('/') &&
                                        !Request::is('page/paint') &&
                                        !Request::is('page/anime') &&
                                        !Request::is('page/goods') &&
                                        !Request::is('page/contact') &&
                                        !Request::is('page/social')
                                    )
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" v-pre>
                                            <strong> {{ Auth::user()->name }}</strong>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </div>
                        </ul>
                    </div>
                @endif

            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>

        <div id="footer"></div> 
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const navMenu = document.getElementById('navMenu');
            const navLinks = navMenu.querySelectorAll('.nav-link');
            const underline = document.getElementById('navUnderline');

            function moveUnderline(el) {
                const rect = el.getBoundingClientRect();
                const parentRect = navMenu.getBoundingClientRect();

                underline.style.left = (rect.left - parentRect.left) + 'px';
                underline.style.width = rect.width + 'px';
            }

            // Move underline to the current active link
            const activeLink = navMenu.querySelector('.nav-link.active');
            if (activeLink) moveUnderline(activeLink);

            // Move underline when clicking any nav link
            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    moveUnderline(this);
                });
            });
        });
</script>

</body>
</html>
