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
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">Dibiteries</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">Maquis</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">Spécialités locales</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">Grillades</button>
        <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">Patisseries</button>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Carte 1: Que du Kiff Event -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Que du Kiff Event" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Top Rated</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Que du Kiff Event</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-500 ml-1 text-sm">(27)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Fidjrossè - La référence en grillades et dibiterie à Cotonou</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Dibi</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Brochettes</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Alloco</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Fidjrossè, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 2: Dibiterie du Chevalier -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1603360946369-dc9bb6258143?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Dibiterie du Chevalier" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Ambiance Live</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Dibiterie du Chevalier</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(18)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Gbedokpo - Le meilleur barbecue dans une ambiance locale authentique</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Barbecue</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Soirée</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Dibi</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Gbedokpo, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 3: Chez Maman Bénin -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Chez Maman Bénin" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Tradition</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Chez Maman Bénin</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(42)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Rue 201A - Plats traditionnels et alloco comme à la maison</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Tradition</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Aloco</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Pâte</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Maro Militaire, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 4: Chez Idrisse Dibiterie -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Chez Idrisse Dibiterie" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Spécialité</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Chez Idrisse Dibiterie</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-500 ml-1 text-sm">(35)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">En face du Chevalier - Réputée pour son dibi authentique et savoureux</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Dibi</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Brochettes</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Tradition</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Gbedokpo, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 5: Chez Amy -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Chez Amy" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Tradition</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Chez Amy</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(29)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Ganhi - Une expérience culinaire traditionnelle béninoise authentique</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Tradition</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Plats locaux</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Ambiance</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Ganhi, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 6: Berlin Restaurant -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Berlin Restaurant" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Moderne</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Berlin Restaurant</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(15)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Rue 840 - Une interprétation contemporaine de la cuisine béninoise</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Contemporain</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Fusion</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Créatif</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Rue 840, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 7: Maquis Super Pili-Pili -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Maquis Super Pili-Pili" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Populaire</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Maquis Super Pili-Pili</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(48)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Boulevard St-Michel - L'un des maquis les plus populaires de Cotonou</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Plats locaux</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Ambiance</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Tradition</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Boulevard St-Michel, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 8: Maquis La Résidence -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Maquis La Résidence" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Élégant</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Maquis La Résidence</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(32)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Près du siège Moov - Une cuisine béninoise raffinée dans un cadre élégant</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Raffiné</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Cuisine locale</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Dîner</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Près du siège Moov, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 9: Le Maquis Chez Tranquille -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Le Maquis Chez Tranquille" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Authentique</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Le Maquis Chez Tranquille</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(21)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Une cuisine béninoise typique dans une ambiance chaleureuse et conviviale</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Typique</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Convivial</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Tradition</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 10: Chez JB -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Chez JB" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Local</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Chez JB</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(26)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Carrefour St-Michel/Steinmetz - Des plats locaux savoureux dans une ambiance décontractée</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Local</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Décontracté</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Savoureux</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Carrefour St-Michel/Steinmetz, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 11: Le Vezuvio -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Le Vezuvio" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Régional</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Le Vezuvio</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(19)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Cadjèhoun - Une cuisine régionale béninoise préparée avec soin</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Régional</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Soigné</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Qualité</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Cadjèhoun, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 12: Le Maquis du Port -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1432139555190-58524dae6a55?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="Le Maquis du Port" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Fruits de mer</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Le Maquis du Port</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(25)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Ganhi - Spécialités de fruits de mer et grillades dans une ambiance portuaire</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Fruits de mer</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Grillades</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Poisson</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Ganhi, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 13: La Cabane du Pêcheur -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                    alt="La Cabane du Pêcheur" 
                    class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Poisson</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">La Cabane du Pêcheur</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-500 ml-1 text-sm">(31)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Fidjrossè - Spécialités de poisson frais dans une ambiance maritime</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Poisson</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Frais</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Maritime</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Fidjrossè, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 14: Le Lieu Unique -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Le Lieu Unique" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Varié</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Le Lieu Unique</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(45)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Fidjrossè - Une cuisine régionale variée dans un cadre unique</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Varié</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Régional</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Unique</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Fidjrossè, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 15: Le Livingstone -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Le Livingstone" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Fusion</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Le Livingstone</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(25)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Haie-Vive - Cuisine fusion et internationale dans un cadre élégant</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">International</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Fusion</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Grillades</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Haie Vive, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 16: Le Kidou Buffet -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Le Kidou Buffet" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Buffet</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Le Kidou Buffet</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(32)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Haie Vive - Buffet africain et international à volonté</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Buffet</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Africain</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">International</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Haie Vive, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 17: Madre Mia All Aperto -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Madre Mia All Aperto" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Bar-Restaurant</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Madre Mia All Aperto</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(18)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Bar-restaurant convivial avec grillades et spécialités italiennes</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Grillades</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Italien</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Bar</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 18: Pirates Club Bénin -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Pirates Club Bénin" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Plage</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Pirates Club Bénin</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-500 ml-1 text-sm">(29)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Abomey-Calavi - Restaurant de plage avec grillades et ambiance festive</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Plage</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Grillades</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Soirée</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Abomey-Calavi</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 19: Le Restaurant Karim 24 -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Le Restaurant Karim 24" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Service Rapide</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Restaurant Karim 24</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(16)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Route de Lomé - Service rapide et spécialités régionales</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Rapide</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Local</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Traditionnel</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Route de Lomé, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 20: Neuer Biergarten Restaurant -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Neuer Biergarten Restaurant" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Biergarten</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Neuer Biergarten</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(12)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Cuisine locale dans une ambiance de jardin à bière allemand</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Bière</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Local</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Grillades</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 21: La Plage by Code Bar -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="La Plage by Code Bar" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Plage</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">La Plage by Code Bar</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(15)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Fidjrossè - Cuisine régionale avec grillades en bord de mer</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Plage</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Grillades</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Poisson</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Fidjrossè, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 22: Chez Amy -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Chez Amy" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Tradition</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Chez Amy</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-500 ml-1 text-sm">(39)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Ganhi - Tradition béninoise authentique depuis 20 ans</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Traditionnel</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Local</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Pâte</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Ganhi, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 23: Berlin Restaurant -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Berlin Restaurant" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Contemporain</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Berlin Restaurant</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(11)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Rue 840 - Cuisine béninoise contemporaine et créative</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Moderne</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Créatif</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Local</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Rue 840, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 24: Maquis Super Pili-Pili -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Maquis Super Pili-Pili" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Populaire</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Tam  Tam</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(41)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Plats locaux dans une ambiance chaleureuse</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">grillades</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">fast-food</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">cocktail</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Fidjrossè, en face de la Cabane du Pêcheur</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 25: Maquis La Résidence -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Maquis La Résidence" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Ambiance</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Maquis La Résidence</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="text-gray-500 ml-1 text-sm">(45)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Près du siège Moov - Cuisine béninoise dans un cadre élégant</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Local</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Traditionnel</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Élégant</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Près du siège Moov, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 26: Le Maquis Chez Tranquille -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Le Maquis Chez Tranquille" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Typique</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Chez Tranquille</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(22)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Cuisine béninoise typique dans une ambiance conviviale</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Typique</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Local</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Convivial</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>

        <!-- Carte 27: Chez JB -->
        <div class="stand-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300">
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Chez JB" 
                     class="w-full h-48 object-cover">
                <div class="absolute top-4 right-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-semibold">Local</div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-800">Chez JB</h3>
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span class="text-gray-500 ml-1 text-sm">(26)</span>
                    </div>
                </div>
                <p class="text-gray-600 mb-4">Carrefour St-Michel/Steinmetz - Plats locaux et ambiance chaleureuse</p>
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Local</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Traditionnel</span>
                    <span class="food-tag px-2 py-1 rounded text-xs font-semibold">Chaleureux</span>
                </div>
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>Carrefour St-Michel/Steinmetz, Cotonou</span>
                </div>
                <a href="#" class="inline-block bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700 transition w-full text-center">
                    <i class="fas fa-utensils mr-2"></i>Découvrir
                </a>
            </div>
        </div>
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
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
            });
        });
    </script>
</body>
</html>

