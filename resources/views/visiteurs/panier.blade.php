<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .active-nav {
            border-bottom: 3px solid #E63946;
            color: #E63946;
            font-weight: 600;
        }
        .product-image {
            height: 180px;
            object-fit: cover;
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('accueil')}}" class="text-2xl font-bold text-red-600">Eat<span class="text-yellow-500">&</span>Drink</a>
            <div class="flex items-center space-x-4">
                <span class="text-gray-700">
                    <i class="fas fa-user mr-1"></i> Mon Compte
                </span>
                <!--<a href="#" class="relative text-gray-700 hover:text-red-600">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">0</span>
                </a>-->
            </div>
        </div>
    </header>

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex space-x-8">
                <a href="{{ route('accueil') }}" class="py-4 px-2 text-gray-600 hover:text-red-600">Accueil</a>
                <!--<a href="#" class="py-4 px-2 text-gray-600 hover:text-red-600">Menu</a>-->
                <!--<a href="#" class="py-4 px-2 text-gray-600 hover:text-red-600">Contact</a>-->
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center text-sm text-gray-500 mb-6">
                <a href="{{ route('accueil') }}" class="hover:text-red-600">Accueil</a>
                <span class="mx-2">/</span>
                <span class="text-red-600">Panier</span>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <h1 class="text-2xl font-bold text-gray-800">Mon Panier</h1>
                </div>

                <div class="p-8 text-center">
                    <div class="mx-auto w-32 h-32 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shopping-cart text-5xl text-gray-400"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-700 mb-2">Votre panier est vide</h2>
                    <p class="text-gray-500 mb-6">Parcourez notre menu et ajoutez des délicieux plats à votre panier</p>
                    <!--<a href="#" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                        <i class="fas fa-shopping-cart mr-2"></i> Voir tout le panier
                    </a>-->
                </div>

                <div class="p-6 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Vous pourriez aimer</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <div class="border rounded-lg overflow-hidden card-hover">
                            <img src="https://images.unsplash.com/photo-1603360946369-dc9bb6258143?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                alt="Dibi spécial" class="product-image">
                            <div class="p-4">
                                <h3 class="font-bold">Dibi spécial</h3>
                                <div class="flex justify-between items-center mt-3">
                                    <span class="text-red-600 font-semibold">3,500 FCFA</span>
                                    <button class="text-xs bg-red-600 text-white px-3 py-1 rounded-full hover:bg-red-700 transition">
                                        <i class="fas fa-plus mr-1"></i> Ajouter
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg overflow-hidden card-hover">
                            <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                alt="Brochette mixte" class="product-image">
                            <div class="p-4">
                                <h3 class="font-bold">Brochette mixte</h3>
                                <div class="flex justify-between items-center mt-3">
                                    <span class="text-red-600 font-semibold">2,500 FCFA</span>
                                    <button class="text-xs bg-red-600 text-white px-3 py-1 rounded-full hover:bg-red-700 transition">
                                        <i class="fas fa-plus mr-1"></i> Ajouter
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-lg overflow-hidden card-hover">
                            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                                alt="Alloco poulet" class="product-image">
                            <div class="p-4">
                                <h3 class="font-bold">Pastèles de poulet</h3>
                                <div class="flex justify-between items-center mt-3">
                                    <span class="text-red-600 font-semibold">2,000 FCFA</span>
                                    <button class="text-xs bg-red-600 text-white px-3 py-1 rounded-full hover:bg-red-700 transition">
                                        <i class="fas fa-plus mr-1"></i> Ajouter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Eat&Drink</h3>
                    <p class="text-gray-400">Plateforme culinaire pour tous les goûts.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Ressources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Centre d'aide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Documentation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Politiques</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-400"><i class="fas fa-envelope mr-2"></i>support@eatdrink.com</li>
                        <li class="text-gray-400"><i class="fas fa-phone-alt mr-2"></i>+229 01 68 81 42 94</li>
                        <li class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i>Cotonou</li>
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
                <p>&copy; 2025 Plateforme Eat&Drink. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            document.querySelectorAll('nav a').forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active-nav');
                    link.classList.remove('text-gray-600', 'hover:text-red-600');
                }
            });
        });
    </script>
</body>
</html>