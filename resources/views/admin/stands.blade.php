@extends('components.aut-layout')

@section('title', 'stands')

@include('partials.toast')


@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-danger fw-bold" href="#">Eat&Drink Admin</a>
        <div class="collapse navbar-collapse justify-content-end">
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
            </ul>
        </div>
    </div>
</nav>

<div class="bg-light rounded-4 shadow-sm p-4 mb-4">
    <h2 class="text-success"><i class="bi bi-shop-window me-2"></i>Stands Approuvés</h2>
    <p class="text-muted">Découvrez les exposants présents à l'événement.</p>
</div>
<div class="row">
    @foreach($stands as $stand)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-success-subtle">
            <img src="{{ $stand->image ?? 'https://via.placeholder.com/300x150' }}" class="card-img-top" alt="stand image">
            <div class="card-body">
                <h5 class="card-title text-success">{{ $stand->nom_entreprise }}</h5>
                <p class="card-text">{{ $stand->description ?? 'Pas de description.' }}</p>
                <a href="{{ route('admin.commandes', $stand->id) }}" class="btn btn-outline-success"><i class="bi bi-receipt-cutoff me-1"></i>Commandes</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> f962611fdb400e91ba0fc7842b0a9eb1546c9d6c
