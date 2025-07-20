@extends('components.aut-layout')

@section('title', ' Authentification Admin')

@section('content')
<div class="container">
    <h2 class="mb-4">Connexion</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
            <x-input label="Email" name="email" type="email" placeholder="Email" />
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <x-input label="Mot de passe" name="password" type="password" placeholder="Mot de passe" />
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <p class="mt-4 text-center">
        Vous n'etes pas autorisé a etre ici, bon retour sur la page d'accueil
        <a href="/" class="btn btn-secondary">Retour</a>
    </p>
</div>
@endsection