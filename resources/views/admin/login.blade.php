@extends('components.aut-layout')

@section('title', 'Authentification Admin')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-yellow-50 via-white to-red-50">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 p-8">

        <!-- Logo / Titre -->
        <div class="text-center mb-6">
            <a href="{{ route('accueil') }}" class="flex items-center justify-center gap-2 mb-2">
                <i class="fa-solid fa-utensils text-red-500 text-2xl"></i>
                <h1 class="text-2xl font-extrabold text-gray-800">
                    Eat<span class="text-red-600">&</span>Drink
                </h1>
            </a>
            <h2 class="text-xl font-semibold text-gray-700 mt-4">Connexion à l’espace admin</h2>
            <p class="text-gray-500 text-sm mt-1">Entrez vos identifiants pour accéder au tableau de bord</p>
        </div>

        <!-- Formulaire -->
        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse e-mail</label>
                <input type="email" name="email" id="email" placeholder="ex: admin@exemple.com"
                       value="{{ old('email') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-150">
                @error('email')
                    <small class="text-red-500 text-sm mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            <!-- Mot de passe -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                <div class="relative">
                    <input type="password" name="password" id="password"
                           placeholder="********"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 pr-10 focus:outline-none focus:ring-2 focus:ring-red-400 transition duration-150">
                    <button type="button" id="togglePassword"
                            class="absolute inset-y-0 right-3 flex items-center text-gray-500 hover:text-red-500 transition">
                        <i class="fa-solid fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
                @error('password')
                    <small class="text-red-500 text-sm mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            <!-- Bouton -->
            <button type="submit"
                class="w-full bg-red-600 text-white font-semibold py-2 rounded-lg hover:bg-red-700 transition duration-200 shadow-md">
                <i class="fa-solid fa-right-to-bracket mr-2"></i> Se connecter
            </button>
        </form>

        <!-- Lien mot de passe oublié -->
        <div class="text-center mt-4">
            <a href="#" class="text-sm text-gray-500 hover:text-red-600 transition">
                Mot de passe oublié ?
            </a>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center py-4 text-gray-500 text-sm">
    © {{ date('Y') }} <span class="text-red-600 font-semibold">Eat&Drink</span> — Tous droits réservés 🍹
</footer>

<!-- Script pour afficher / masquer le mot de passe -->
<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', () => {
        const isHidden = passwordField.type === 'password';
        passwordField.type = isHidden ? 'text' : 'password';
        eyeIcon.classList.toggle('fa-eye');
        eyeIcon.classList.toggle('fa-eye-slash');
    });
</script>
@endsection
