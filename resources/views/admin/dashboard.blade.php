@extends('components.aut-layout')

@section('title', 'Admin | Eat&Drink')

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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-danger">Déconnexion</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h1 class="mb-4">Tableau de bord</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title text-warning">Demandes en attente</h5>
                    <p class="display-5">{{ $demandesEnAttente ?? '...' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title text-success">Stands approuvés</h5>
                    <p class="display-5">{{ $standsApprouves ?? '...' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title text-primary">Commandes</h5>
                    <p class="display-5">{{ $nombreCommandes ?? '...' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
