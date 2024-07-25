<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="/">RestoBesto<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('menu.index') ? 'active' : '' }}" href="{{ route('menu.index') }}">Menu</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('keranjang.index') ? 'active' : '' }}" href="{{ route('keranjang.index') }}">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('order') ? 'active' : '' }}" href="{{ route('link.order') }}">Pesanan</a>
                </li>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</nav>
