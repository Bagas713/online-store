<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />

<title>@yield('title', 'Laptop Store')</title>
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{asset('/img/logo.png')}}" style="width: 30%" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link {{ request()->routeIs('product.index') ? 'active' : '' }}" href="{{ route('product.index') }}">Products</a>
                <a class="nav-link {{ request()->routeIs('cart.index') ? 'active' : '' }}" href="{{ route('cart.index') }}">Cart</a>
                <a class="nav-link {{ request()->routeIs('home.about') ? 'active' : '' }}" href="{{ route('home.about') }}">About</a>
                <div class="vr bg-white mx-2 d-none d-lg-block active"></div>
                    @guest
                        <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                        <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                        @else
                            @if (Auth::user()->role == 'admin')
                                <a class="nav-link {{ request()->routeIs('admin.home.index') ? 'active' : '' }}" href="{{ route('admin.home.index') }}">Dashboard</a>
                            @endif
                            <a class="nav-link {{ request()->routeIs('myaccount.orders') ? 'active' : '' }}" href="{{ route('myaccount.orders') }}">My Orders</a>
                            <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link"
                            onclick="document.getElementById('logout').submit();">Logout</a>
                        @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

<!-- header -->

    <div class="container my-4">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" target="_blank" rel="noopener noreferrer" href="https://web.facebook.com/bagas.gumelar.94/">
                <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" target="_blank" rel="noopener noreferrer" href="https://github.com/Bagas713">
                <ion-icon name="logo-GitHub"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/bagas-gumelar-0713p/">
                <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/bagasd592/">
                <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
            </ul>
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="{{ route('home.index') }}">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('home.about') }}">About</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

            </ul>
            <p>&copy;2023 Bagas Gumelar | All Rights Reserved</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
