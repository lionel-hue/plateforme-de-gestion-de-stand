<<<<<<< HEAD
=======

>>>>>>> f962611fdb400e91ba0fc7842b0a9eb1546c9d6c
@extends('components.aut-layout')

@section('title', 'Inscription Admin')

@section('content')
    <div class="container">
        <h2 class="mb-4">Inscription</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
                <x-input label="Nom d'entreprise" name="nom_entreprise" type="text" placeholder="Nom d'entreprise" />
                @error('nom_entreprise')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <x-input label="Email" name="email" type="email" placeholder="Email" />
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <x-input label="Mot de passe" name="password" type="password" placeholder="Mot de passe"/>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <x-input label="Confirmer le mot de passe" name="password_confirmation" type="password" placeholder="Confirmer le mot de passe"/>
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <x-input label="role" name="role" type="text" placeholder="role"/>
                @error('role')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
        <p class="mt-4 text-center">
            déjà un compte ? se connecter
            <a href="{{ route ('login') }}" class="btn btn-secondary">Retour</a>
        </p>
    </div>
@endsection
