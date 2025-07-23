@extends('components.aut-layout')

@section('title', 'Demandes en attente')

@include('partials.toast')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-danger fw-bold" href="{{route ('accueil')}}">Eat&Drink Admin</a>
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
    <h2 class="text-warning"><i class="bi bi-clock-history me-2"></i>Demandes de stand en attente</h2>
    <p class="text-muted">Validez ou refusez les candidatures des exposants.</p>
</div>
<table class="table table-hover table-bordered">
    <thead class="table-warning">
        <tr>
            <th>Entreprise</th>
            <th>Email</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($demandes as $demande)
        <tr>
            <td>{{ $demande->nom_entreprise }}</td>
            <td>{{ $demande->email }}</td>
            <td>{{ $demande->created_at->format('d/m/Y') }}</td>
            <td>
                <form action="{{ route('admin.approuver', $demande->id) }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-success btn-sm">Approuver</button>
                </form>
                <form action="{{ route('admin.rejeter', $demande->id) }}" method="POST" class="d-inline">
                    @csrf
                    <input type="text" name="raison_rejet" placeholder="Motif" class="form-control form-control-sm d-inline w-auto">
                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-x-circle"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
