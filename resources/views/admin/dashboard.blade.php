@php use Illuminate\Support\Facades\Auth; @endphp

@extends('components.aut-layout')

@section('title', 'Admin | Eat&Drink')

@include('partials.toast')


@section('content')
  <!-- 🌈 Barre de navigation -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="{{ route('accueil') }}" class="text-2xl font-bold text-red-600 flex items-center gap-2">
        <i class="fa-solid fa-utensils text-yellow-500"></i> Eat<span class="text-yellow-500">&</span>Drink
      </a>
      <div class="hidden md:flex gap-6">
        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-red-600 transition">Dashboard</a>
        <a href="{{ route('demandes') }}" class="text-gray-700 hover:text-red-600 transition">Demandes</a>
        <a href="{{ route('stands') }}" class="text-red-600 font-semibold">Stands</a>
        <a href="{{ route('commandes', ['id' => Auth::guard('user')->user()->id]) }}" class="text-gray-700 hover:text-red-600 transition">Commandes</a>
      </div>
      <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 transition">
          <i class="fa-solid fa-right-from-bracket mr-2"></i>Déconnexion
        </button>
      </form>
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
