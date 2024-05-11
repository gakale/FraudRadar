<header class="navbar navbar-expand-lg navbar-dark fixed-top" data-scroll-header>
    <div class="container">
        <a class="navbar-brand me-3 me-xl-4" href="{{ route('home') }}">
            <img class="d-block" src="{{ asset('img/logo/logo-light.svg') }}" width="116" alt="FraudRadar">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="btn btn-link btn-light btn-sm d-none d-lg-block order-lg-3"
            href="{{ route('showLoginForm') }}"><i class="fi-user me-2"></i>Se connecter</a>
        <a class="btn btn-primary btn-sm ms-2 order-lg-3"
            href="{{ route('fraud.create') }}"><i class="fi-plus me-2"></i>Signaler une fraude</a>
        <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
                <!-- Menu items-->
                <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">À propos</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Signaler une fraude</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Signaler une
                                fraude</a></li>
                        <li><a class="dropdown-item" href="#">Liste des fraudes
                                signalées</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Compte</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Informations
                                personnelles</a></li>
                        <li><a class="dropdown-item" href="#">Mot de passe et
                                sécurité</a></li>
                        <li><a class="dropdown-item" href="#">Mes
                                signalements</a></li>


                        <li><a class="dropdown-item" href="{{ route('showLoginForm') }}">Se
                                connecter</a></li>
                        <li><a class="dropdown-item" href="{{ route('showRegistrationForm') }}">S'inscrire</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
