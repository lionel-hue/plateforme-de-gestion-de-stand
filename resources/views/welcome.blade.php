<<<<<<< HEAD
@extends('components.aut-layout')

@section('title', 'Accueil')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Eat&Drink</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('demandes') }}">Demandes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/login" aria-disabled="true">S'inscrire</a>
                </li>
            </ul>
        </div>
    </div>





</nav>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Plateforme de gestion de stand</h2>
                </div>
                <div class="card-body">
                    <p class="text-center">Plateforme de gestion de stand</p>
                </div>
            </div>
        </div>
    </div>
@endsection
=======
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Accueil</h1>
    <a href="{{ route('login') }}">Se connecter</a>
    <a href="{{ route('register') }}">S'inscrire</a>
    <a href="{{ route('stand') }}">Voir les stands</a>
    <a href="{{ route('entrepreneur.register') }}">S'inscrire en tant qu'entrepreneur</a>
    <a href="{{ route('admin.login') }}">Se connecter en tant qu'admin</a>
</body>
</html>
>>>>>>> f962611fdb400e91ba0fc7842b0a9eb1546c9d6c
