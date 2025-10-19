@extends('components.aut-layout')

@section('title', 'Demandes en attente')

@include('partials.toast')

@section('content')
<!-- 🌈 Navbar -->
<nav class="bg-white shadow-md sticky top-0 z-50 border-b border-yellow-100">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('accueil') }}" class="text-2xl font-extrabold text-red-600 flex items-center gap-2">
            <i class="fa-solid fa-utensils text-yellow-500"></i> Eat<span class="text-yellow-500">&</span>Drink
        </a>

        <div class="hidden md:flex gap-8 items-center font-medium">
            <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-red-600 transition">Dashboard</a>
            <a href="{{ route('demandes') }}" class="text-yellow-600 font-semibold">Demandes</a>
            <a href="{{ route('stands') }}" class="text-gray-700 hover:text-red-600 transition">Stands</a>
            <a href="{{ route('commandes', ['id' => Auth::guard('user')->user()->id]) }}" class="text-gray-700 hover:text-red-600 transition">Commandes</a>
        </div>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700 transition flex items-center gap-2">
                <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
            </button>
        </form>
    </div>
</nav>

<!-- 🏷️ En-tête -->
<section class="bg-gradient-to-r from-yellow-50 to-red-50 py-10 mb-8 shadow-sm border-b border-yellow-100">
    <div class="max-w-7xl mx-auto px-6 text-center md:text-left">
        <h2 class="text-3xl font-extrabold text-yellow-600 flex items-center justify-center md:justify-start gap-3">
            <i class="fa-solid fa-clock-rotate-left text-red-500"></i>
            Demandes de stand en attente
        </h2>
        <p class="text-gray-600 mt-2 text-lg">Validez ou refusez les candidatures des exposants.</p>
    </div>
</section>

<!-- 📋 Tableau des demandes -->
<div class="flex flex-col min-h-[80vh]">
    <div class="max-w-7xl mx-auto px-6 flex-grow">
        <div class="overflow-x-auto bg-white rounded-2xl shadow-lg border border-gray-100">
            <table class="min-w-full table-auto">
                <thead class="bg-gradient-to-r from-yellow-500 to-red-500 text-white uppercase text-sm">
                    <tr>
                        <th class="px-6 py-4 text-left">Entreprise</th>
                        <th class="px-6 py-4 text-left">Email</th>
                        <th class="px-6 py-4 text-center">Date</th>
                        <th class="px-6 py-4 text-center">Statut</th>
                        <th class="px-6 py-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($demandes as $demande)
                        <tr class="hover:bg-yellow-50 transition">
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $demande->nom_entreprise }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ $demande->email }}</td>
                            <td class="px-6 py-4 text-center text-gray-500">{{ $demande->created_at->format('d/m/Y') }}</td>
                            <td class="px-6 py-4 text-center">
                                @if($demande->statut === 'approuvé')
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">🟢 Approuvée</span>
                                @elseif($demande->statut === 'rejeté')
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">🔴 Rejetée</span>
                                @else
                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-medium">🟡 En attente</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex flex-col md:flex-row gap-2 justify-center">
                                    <!-- Approuver -->
                                    <form action="{{ route('admin.approuver', $demande->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        <button type="submit" 
                                                class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-semibold flex items-center justify-center gap-2 transition">
                                            <i class="fa-solid fa-check"></i> Approuver
                                        </button>
                                    </form>

                                    <!-- Rejeter -->
                                    <form action="{{ route('admin.rejeter', $demande->id) }}" method="POST" class="inline-block flex items-center gap-2">
                                        @csrf
                                        <input type="text" name="raison_rejet" placeholder="Motif"
                                            class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-red-400 w-40">
                                        <button type="submit" 
                                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-lg text-sm font-semibold transition flex items-center justify-center">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                <i class="fa-solid fa-circle-info text-yellow-400 text-xl mb-2"></i><br>
                                Aucune demande en attente pour le moment.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- ⚙️ Footer fixé -->
    <footer class="bg-white border-t border-yellow-100 text-center py-4 text-gray-500 mt-8 w-full">
        © {{ date('Y') }} <span class="text-red-600 font-semibold">Eat&Drink</span> — Tous droits réservés 🍹
    </footer>
</div>
@endsection
