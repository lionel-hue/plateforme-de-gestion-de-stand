@extends('components.aut-layout')

@section('title', 'Commandes par stand')

@include('partials.toast')

@section('content')
<!-- 🌈 Navbar moderne -->
<nav class="bg-white shadow-md sticky top-0 z-50 border-b border-red-100">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('accueil') }}" class="text-2xl font-extrabold text-red-600 flex items-center gap-2">
            <i class="fa-solid fa-utensils text-yellow-500"></i> Eat<span class="text-yellow-500">&</span>Drink
        </a>

        <div class="hidden md:flex gap-8 items-center font-medium">
            <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-red-600 transition">Dashboard</a>
            <a href="{{ route('demandes') }}" class="text-gray-700 hover:text-red-600 transition">Demandes</a>
            <a href="{{ route('stands') }}" class="text-gray-700 hover:text-red-600 transition">Stands</a>
            <a href="{{ route('commandes', ['id' => Auth::guard('user')->user()->id]) }}" class="text-red-600 font-semibold">Commandes</a>
        </div>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 transition flex items-center gap-2">
                <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
            </button>
        </form>
    </div>
</nav>

<!-- 🏷️ En-tête de page -->
<section class="bg-gradient-to-r from-red-50 to-yellow-50 py-10 mb-8 shadow-sm border-b border-yellow-100">
    <div class="max-w-7xl mx-auto px-6 text-center md:text-left">
        <h2 class="text-3xl font-extrabold text-red-600 flex items-center justify-center md:justify-start gap-3">
            <i class="fa-solid fa-cart-shopping text-yellow-500"></i>
            Commandes du stand : 
            <span class="text-gray-800">{{ $stand->nom_stand }}</span>
        </h2>
        <p class="text-gray-600 mt-2 text-lg">Historique des commandes reçues.</p>
    </div>
</section>

<!-- 📋 Tableau stylisé -->
<div class="max-w-7xl mx-auto px-6 pb-12">
    <div class="overflow-x-auto bg-white rounded-2xl shadow-lg border border-gray-100">
        <table class="min-w-full table-auto">
            <thead class="bg-gradient-to-r from-red-600 to-yellow-500 text-white uppercase text-sm">
                <tr>
                    <th class="px-6 py-4 text-left">#</th>
                    <th class="px-6 py-4 text-left">Produit</th>
                    <th class="px-6 py-4 text-center">Quantité</th>
                    <th class="px-6 py-4 text-center">Total</th>
                    <th class="px-6 py-4 text-right">Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($commandes as $commande)
                    <tr class="hover:bg-red-50 transition">
                        <td class="px-6 py-4 font-semibold text-gray-800">#{{ $commande->id }}</td>
                        <td class="px-6 py-4 text-gray-700">{{ $commande->produit->nom }}</td>
                        <td class="px-6 py-4 text-center font-medium text-gray-800">{{ $commande->quantite }}</td>
                        <td class="px-6 py-4 text-center font-semibold text-green-600">{{ number_format($commande->total, 2) }} €</td>
                        <td class="px-6 py-4 text-right text-gray-500">{{ $commande->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                            <i class="fa-solid fa-circle-info text-red-400 text-xl mb-2"></i><br>
                            Aucune commande enregistrée pour ce stand.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- ✅ Résumé -->
    <div class="mt-8 bg-yellow-50 border-l-4 border-yellow-400 p-5 rounded-xl shadow-sm">
        <h4 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
            <i class="fa-solid fa-chart-line text-yellow-500"></i> Résumé des ventes
        </h4>
        <p class="text-gray-600 mt-2">Total de commandes : 
            <span class="font-semibold text-red-600">{{ $commandes->count() }}</span>
        </p>
        <p class="text-gray-600">Montant global : 
            <span class="font-semibold text-green-600">
                {{ number_format($commandes->sum('total'), 2) }} €
            </span>
        </p>
    </div>
</div>

<!-- ⚙️ Footer -->
<footer class="mt-10 py-6 bg-white text-center text-gray-500 border-t border-yellow-100">
    © {{ date('Y') }} <span class="text-red-600 font-semibold">Eat&Drink</span> — Tous droits réservés 🍽️
</footer>
@endsection
