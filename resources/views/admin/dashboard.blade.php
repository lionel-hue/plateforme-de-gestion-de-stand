@php use Illuminate\Support\Facades\Auth; @endphp

@extends('components.aut-layout')

@section('title', 'Admin | Eat&Drink')

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

<div class="container mt-4">
    <div class="bg-warning-subtle p-4 rounded-4 shadow-sm mb-4">
        <h1 class="display-6 text-danger fw-bold">Bienvenue sur le tableau de bord 🎉</h1>
        <p class="lead">Gérez vos exposants, commandes et festivités avec style !</p>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 bg-light text-center h-100">
                <div class="card-body">
                    <h5 class="card-title text-warning"><a href="{{ route('demandes') }}" class="text-decoration-none card-title text-warning">Demandes en attente</a></h5>
                    <p class="fs-1 fw-bold text-dark">{{ $demandesEnAttente ?? '...' }}</p>
                    <i class="bi bi-hourglass-split fs-2 text-muted"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 bg-light text-center h-100">
                <div class="card-body">
                    <h5 class="card-title text-success"><a href="{{ route('stands') }}" class="text-decoration-none card-title text-success">Stands approuvés</a></h5>
                    <p class="fs-1 fw-bold text-dark">{{ $standsApprouves ?? '...' }}</p>
                    <i class="bi bi-shop-window fs-2 text-muted"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 bg-light text-center h-100">
                <div class="card-body">
                    <h5 class="card-title text-primary"><a href="{{ route('commandes', ['id' => Auth::user()->id]) }}" class="text-decoration-none card-title text-primary">Commandes</a></h5>
                    <p class="fs-1 fw-bold text-dark">{{ $nombreCommandes ?? '...' }}</p>
                    <i class="bi bi-cart4 fs-2 text-muted"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection