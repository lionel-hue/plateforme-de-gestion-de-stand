<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stands - Festival Eat&Drink</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .stand-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .filter-btn.active {
            background-color: #E63946;
            color: white;
        }
        .benin-flag {
            background: linear-gradient(to right, #008751 33%, #fcd116 33% 66%, #e8112d 66%);
        }
        .food-tag {
            background-color: #FFD166;
            color: #1D3557;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm benin-flag">
        <div class="bg-white bg-opacity-90">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="{{ route('accueil') }}" class="text-2xl font-bold text-red-600">Eat<span class="text-yellow-500">&</span>Drink</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('accueil') }}" class="text-gray-700 hover:text-red-600">Accueil</a>
                    <a href="{{ route('stand') }}" class="text-red-600 font-semibold">Stands</a>
                    <a href="{{ route('panier') }}" class="text-red-600 font-semibold">panier</a>
                    <a href="{{ route('evènement') }}" class="text-red-600 font-semibold">Programme</a>
                    <a href="#" class="bg-red-600 text-white px-4 py-2 rounded-full hover:bg-red-700">Profile</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
    <section class="mb-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Découvrez nos exposants</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">Rencontrez les artisans culinaires qui font vibrer les saveurs du Bénin</p>
    </section>

    <div class="flex flex-wrap justify-center gap-3 mb-12">
        <button class="filter-btn active px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">Tous</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition" data-filter="dibiteries">Dibiteries</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition" data-filter="maquis">Maquis</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition" data-filter="specialites-locale">Spécialités locales</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition" data-filter="grillades">Grillades</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition" data-filter="patisseries">Patisseries</button>

    </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">    
            @foreach ($stands as $stand)
                    @php
                        $types = explode(',', strtolower($stand->type_stand));
                        $typesAttr = implode(',', array_map('trim', $types));
                    @endphp
            <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300" data-types="{{ $typesAttr ?? 'inconnu' }}">
                <div class="relative">
                    <img src="{{ asset($stand->image) }}" 
                        alt="{{ $stand->nom_stand }}" 
                        class="w-full h-48 object-cover">
                    <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">{{ $stand->slug }}</div>
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xl font-bold text-gray-800">{{ $stand->nom_stand }}</h3>
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-gray-500 ml-1 text-sm">(27)</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">{{ $stand->description }}</p>

                    <div class="flex flex-wrap gap-2 mb-4">
                    @foreach ($types as $type)
                        <span class="food-tag px-2 py-1 rounded text-xs font-semibold">{{ trim(ucfirst($type)) }}</span>
                    @endforeach
                    </div>
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>{{ $stand->localisation }}</span>
                    </div>
                    <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                        <i class="fas fa-utensils mr-2"></i>Découvrir
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    
    <section class="mt-16 bg-gradient-to-r from-green-700 via-yellow-500 to-red-600 rounded-lg p-8 text-center text-white">
        <h2 class="text-2xl font-bold mb-4">Vous êtes restaurateur au Bénin ?</h2>
        <p class="mb-6 max-w-2xl mx-auto">Rejoignez-nous pour mettre en lumière les richesses culinaires de notre pays</p>
      <a href="{{ route('entrepreneur.register') }}" class="inline-block bg-white text-red-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                <i class=""></i> Devenez exposant
      </a>
    </section>
</main>


    <footer class="bg-gray-800 text-white py-12 benin-flag">
        <div class="bg-gray-800 bg-opacity-90">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">Eat&Drink Bénin</h3>
                        <p class="text-gray-400">Célébrons ensemble la gastronomie béninoise.</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Nos spécialités</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Dibi et Grillades</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Plats traditionnels</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Pâtisseries locales</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Contact Bénin</h4>
                        <ul class="space-y-2">
                            <li class="text-gray-400"><i class="fas fa-envelope mr-2"></i>contact@eatdrink-benin.com</li>
                            <li class="text-gray-400"><i class="fas fa-phone-alt mr-2"></i>+229 01 68 81 42 94</li>
                            <li class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i>Cotonou, Bénin</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-4">Suivez-nous</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; 2025 Festival Eat&Drink Bénin. Tous droits réservés.</p>
                    <p class="mt-2 text-sm">Fièrement béninois</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.getAttribute('data-filter');
        const cards = document.querySelectorAll('.stand-card');

        cards.forEach(card => {
            const typeAttr = card.getAttribute('data-type');
            if (!typeAttr) return; // 🛡️ évite l'erreur si data-type est manquant

            const types = typeAttr.split(',').map(t => t.trim());
            if (filter === 'tous' || types.includes(filter.toLowerCase())) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    });
});
    </script>
</body>
</html>

