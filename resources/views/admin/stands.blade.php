@extends('components.aut-layout')

@section('title', 'stands')

@include('partials.toast')


@section('content')
<body class="bg-gradient-to-b from-gray-50 to-gray-100 min-h-screen flex flex-col">

  <!-- 🌈 Barre de navigation -->
  <nav class="bg-white shadow-md sticky top-0 z-50 w-full">
    <div class="w-full px-8 py-4 flex justify-between items-center">
      <a href="{{ route('accueil') }}" class="text-2xl font-bold text-red-600 flex items-center gap-2">
        <i class="fa-solid fa-utensils text-yellow-500"></i> Eat<span class="text-yellow-500">&</span>Drink
      </a>
      <div class="hidden md:flex gap-8">
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

  <!-- 💬 Titre et description -->
  <header class="text-center py-16 bg-gradient-to-r from-red-600 via-yellow-500 to-red-600 text-white w-full shadow-lg">
    <h1 class="text-5xl font-extrabold mb-3 tracking-tight drop-shadow-lg">Stands Approuvés</h1>
    <p class="text-lg opacity-90">Découvrez les exposants présents à l'événement Eat&Drink Bénin 🇧🇯</p>
  </header>

  <!-- 💡 Liste des stands -->
  <main class="flex-grow w-full px-8 py-12">
    @if($stands->count() > 0)
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach($stands as $stand)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition transform hover:-translate-y-1 duration-300">
          <div class="relative">
            <img src="{{ $stand->image ?? 'https://via.placeholder.com/400x250' }}"
                 alt="{{ $stand->nom_stand }}"
                 class="w-full h-56 object-cover">
            <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
              {{ $stand->slug ?? 'Exposant' }}
            </div>
          </div>

          <div class="p-6 flex flex-col h-full">
            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $stand->nom_stand }}</h3>
            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
              {{ $stand->description ?? 'Aucune description disponible pour ce stand.' }}
            </p>

            <div class="flex items-center text-gray-500 text-sm mb-4">
              <i class="fa-solid fa-location-dot mr-2 text-red-500"></i>
              <span>{{ $stand->localisation ?? 'Cotonou, Bénin' }}</span>
            </div>

            <div class="flex flex-wrap gap-2 mb-4">
              @php
                $types = explode(',', $stand->type_stand ?? 'Cuisine béninoise');
              @endphp
              @foreach ($types as $type)
                <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs font-semibold">
                  {{ trim($type) }}
                </span>
              @endforeach
            </div>

            <div class="mt-auto">
              <a href="{{ route('commandes', $stand->id) }}"
                 class="inline-block w-full text-center bg-gradient-to-r from-red-600 to-yellow-500 text-white py-2 rounded-full font-semibold hover:from-red-700 hover:to-yellow-600 transition">
                <i class="fa-solid fa-receipt mr-2"></i> Voir les Commandes
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    @else
      <p class="text-center text-gray-500 text-lg mt-10">Aucun stand approuvé pour le moment.</p>
    @endif
  </main>

  <!-- 🌍 Footer -->
  <footer class="bg-gray-900 text-gray-300 py-12 w-full">
    <div class="w-full px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
      <div>
        <h3 class="text-xl font-bold text-white mb-4">Eat&Drink Bénin</h3>
        <p>Célébrons ensemble la gastronomie béninoise 🇧🇯.</p>
      </div>

      <div>
        <h4 class="font-semibold text-white mb-3">Nos spécialités</h4>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-yellow-400">Grillades & Dibi</a></li>
          <li><a href="#" class="hover:text-yellow-400">Pâtisseries locales</a></li>
          <li><a href="#" class="hover:text-yellow-400">Plats traditionnels</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-semibold text-white mb-3">Contact</h4>
        <ul class="space-y-2">
          <li><i class="fa-solid fa-envelope mr-2 text-yellow-400"></i>contact@eatdrink-benin.com</li>
          <li><i class="fa-solid fa-phone mr-2 text-yellow-400"></i>+229 01 68 81 42 94</li>
          <li><i class="fa-solid fa-map-marker-alt mr-2 text-yellow-400"></i>Cotonou, Bénin</li>
        </ul>
      </div>

      <div>
        <h4 class="font-semibold text-white mb-3">Suivez-nous</h4>
        <div class="flex gap-4 text-xl">
          <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook"></i></a>
          <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-sky-400"><i class="fab fa-twitter"></i></a>
          <a href="#" class="hover:text-green-500"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="text-center mt-10 text-sm text-gray-500 border-t border-gray-800 pt-4">
    © {{ date('Y') }} <span class="text-red-600 font-semibold">Eat&Drink</span> — Tous droits réservés 🍷    </div>
  </footer>
</body>
@endsection
