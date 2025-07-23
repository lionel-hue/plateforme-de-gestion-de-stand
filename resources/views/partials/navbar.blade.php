
<nav class="navbar navbar-expand-lg {{ session('theme') === 'dark' ? 'navbar-dark bg-dark' : 'navbar-light bg-light' }} shadow-sm transition-fade">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold {{ session('theme') === 'dark' ? 'text-warning' : 'text-danger' }}" href="#">Eat&Drink Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('demandes') }}">Demandes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stands') }}">Stands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('commandes', ['id' => Auth::user()->id]) }}">Commandes</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-danger">Déconnexion</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('theme.toggle') }}" class="ms-2">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-secondary">
                            {{ session('theme') === 'dark' ? '🌞 Mode clair' : '🌙 Mode sombre' }}
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
