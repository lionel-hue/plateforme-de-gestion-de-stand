@extends('components.aut-layout')

@section('title', 'commandes par stands')

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
    <h2 class="text-primary"><i class="bi bi-cart4 me-2"></i>Commandes - {{ $stand->nom_entreprise }}</h2>
    <p class="text-muted">Historique des commandes reçues.</p>
</div>
<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Total</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($commandes as $commande)
        <tr>
            <td>{{ $commande->id }}</td>
            <td>{{ $commande->produit->nom }}</td>
            <td>{{ $commande->quantite }}</td>
            <td>{{ number_format($commande->total, 2) }} €</td>
            <td>{{ $commande->created_at->format('d/m/Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> f962611fdb400e91ba0fc7842b0a9eb1546c9d6c
