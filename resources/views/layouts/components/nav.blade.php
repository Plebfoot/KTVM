<nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top" style="background-color: #fff;">
    <div id="navigation" class="container-fluid d-flex" style="margin-left:150px;margin-right:150px">
        <a class="navbar-brand me-4" href="/">
            <span class="ms-2 align-middle">KTVM</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav" style="margin-left: auto;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="over-ons-dropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Over ons
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="over-ons-dropdown">
                        <li><a class="dropdown-item" href="#">Het Harmonieorkest</a></li>
                        <li><a class="dropdown-item" href="#">De Opmaat</a></li>
                        <li><a class="dropdown-item" href="#">De BBK</a></li>
                        <li><a class="dropdown-item" href="/bestuur">Het Bestuur</a></li>
                        <li><a class="dropdown-item" href="#">Onze Historie</a></li>
                        <li><a class="dropdown-item" href="#">Opleidingen</a></li>
                        <li><a class="dropdown-item" href="#">Concertagenda</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-right: 0.5rem;">Nieuws</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="over-ons-dropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Doneer hier
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="over-ons-dropdown">
                        <li><a class="dropdown-item" href="#">Word sponsor</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                            {{ __('Log uit') }}
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
            </ul>
        </div>
    </div>
</nav>
