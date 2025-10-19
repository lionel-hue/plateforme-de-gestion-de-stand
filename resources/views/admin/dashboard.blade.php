@extends('components.aut-layout')

@section('title', 'Admin | Eat&Drink')

@include('partials.toast')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-white to-red-50 flex flex-col">
    <!-- 🌈 Navbar -->
    <nav class="bg-white/80 backdrop-blur-md shadow-md sticky top-0 z-50 border-b border-red-100">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('accueil') }}" class="text-2xl font-extrabold text-red-600 flex items-center gap-2">
                <i class="fa-solid fa-utensils text-yellow-500"></i>
                <span>Eat<span class="text-yellow-500">&</span>Drink</span>
            </a>

            <!-- Menu principal -->
            <div class="hidden md:flex gap-8 items-center font-medium">
                <a href="{{ route('dashboard') }}" class="hover:text-red-600 transition {{ request()->routeIs('dashboard') ? 'text-red-600 font-semibold' : 'text-gray-700' }}">Dashboard</a>
                <a href="{{ route('demandes') }}" class="hover:text-red-600 transition {{ request()->routeIs('demandes') ? 'text-red-600 font-semibold' : 'text-gray-700' }}">Demandes</a>
                <a href="{{ route('stands') }}" class="hover:text-red-600 transition {{ request()->routeIs('stands') ? 'text-red-600 font-semibold' : 'text-gray-700' }}">Stands</a>
                <a href="{{ route('commandes', ['id' => Auth::guard('user')->user()->id]) }}" class="hover:text-red-600 transition {{ request()->routeIs('commandes') ? 'text-red-600 font-semibold' : 'text-gray-700' }}">Commandes</a>
            </div>

            <!-- Déconnexion -->
            <form method="POST" action="{{ route('admin.logout') }}" class="ml-4">
                @csrf
                <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-full shadow-md flex items-center gap-2 transition">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Déconnexion</span>
                </button>
            </form>
        </div>
    </nav>

    <!-- 🏠 Contenu principal -->
    <main class="flex-grow max-w-7xl mx-auto w-full px-6 py-10">
        <div class="bg-white/70 backdrop-blur-md shadow-md border border-yellow-100 rounded-3xl p-8 mb-10 text-center">
            <h1 class="text-3xl md:text-4xl font-extrabold text-red-600 mb-2">
                Bienvenue sur le Tableau de Bord 🎉
            </h1>
            <p class="text-gray-600 text-lg">Gérez vos exposants, commandes et festivités avec style et efficacité.</p>
        </div>

        <!-- 📊 Cartes statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- 🔸 Demandes -->
            <div class="bg-gradient-to-br from-yellow-100 to-yellow-50 rounded-3xl shadow-lg p-6 hover:scale-[1.02] transition-transform">
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="bg-yellow-500 text-white p-3 rounded-full shadow">
                        <i class="fa-solid fa-hourglass-half text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-yellow-700">Demandes en attente</h3>
                    <p class="text-4xl font-extrabold text-gray-800">{{ $demandesEnAttente ?? '...' }}</p>
                    <a href="{{ route('demandes') }}" class="mt-3 inline-block text-yellow-600 hover:underline font-medium text-decoration-none">Voir les demandes</a>
                </div>
            </div>

            <!-- 🔸 Stands -->
            <div class="bg-gradient-to-br from-green-100 to-green-50 rounded-3xl shadow-lg p-6 hover:scale-[1.02] transition-transform">
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="bg-green-500 text-white p-3 rounded-full shadow">
                        <i class="fa-solid fa-shop text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-green-700">Stands approuvés</h3>
                    <p class="text-4xl font-extrabold text-gray-800">{{ $standsApprouves ?? '...' }}</p>
                    <a href="{{ route('stands') }}" class="mt-3 inline-block text-green-600 hover:underline font-medium text-decoration-none">Voir les stands</a>
                </div>
            </div>

            <!-- 🔸 Commandes -->
            <div class="bg-gradient-to-br from-blue-100 to-blue-50 rounded-3xl shadow-lg p-6 hover:scale-[1.02] transition-transform">
                <div class="flex flex-col items-center text-center space-y-3">
                    <div class="bg-blue-500 text-white p-3 rounded-full shadow">
                        <i class="fa-solid fa-cart-shopping text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-blue-700">Commandes</h3>
                    <p class="text-4xl font-extrabold text-gray-800">{{ $nombreCommandes ?? '...' }}</p>
                    <a href="{{ route('commandes', ['id' => Auth::guard('user')->user()->id]) }}" class="mt-3 inline-block text-blue-600 hover:underline font-medium text-decoration-none">Voir les commandes</a>
                </div>
            </div>
        </div>
    </main>

    <!-- ⚙️ Footer -->
    <footer class="mt-10 py-6 bg-white/70 text-center text-gray-500 border-t border-yellow-100">
        © {{ date('Y') }} <span class="text-red-600 font-semibold">Eat&Drink</span> — Tous droits réservés 🍷
    </footer>
</div>
@endsection
