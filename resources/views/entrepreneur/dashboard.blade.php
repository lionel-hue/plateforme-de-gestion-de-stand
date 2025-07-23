<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Entrepreneur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .benin-flag {
            background: linear-gradient(to right, #008751 33%, #fcd116 33% 66%, #e8112d 66%);
        }
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
        .badge-approved {
            background-color: #28a745;
        }
        .badge-pending {
            background-color: #ffc107;
            color: #212529;
        }
        .badge-rejected {
            background-color: #dc3545;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm benin-flag">
        <div class="bg-white bg-opacity-90">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="{{ route('accueil') }}" class="text-2xl font-bold text-red-600">Eat<span class="text-yellow-500">&</span>Drink</a>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">
                        <i class="fas fa-envelope mr-1"></i> entrepreneur@example.com
                    </span>
                    <div class="relative group">
                        <button class="flex items-center space-x-1">
                            <span class="text-gray-700">Mon Entreprise</span>
                            <i class="fas fa-chevron-down text-sm"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 hidden group-hover:block">
                            <form method="POST" action="/entrepreneur/logout">
                                <input type="hidden" name="_token" value="[CSRF_TOKEN]">
                                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Déconnexion
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex space-x-8">
                <a href="{{ route('entrepreneur.dashboard') }}" class="py-4 px-2 active-nav">Dashboard</a>
                <a href="{{ route('entrepreneur.products') }}" class="py-4 px-2 text-gray-600 hover:text-red-600">Produits</a>
                <a href="{{ route('entrepreneur.orders') }}" class="py-4 px-2 text-gray-600 hover:text-red-600">Commandes</a>
                <a href="{{ route('entrepreneur.settings') }}" class="py-4 px-2 text-gray-600 hover:text-red-600">Paramètres</a>
            </div>
        </div>
    </nav>
    <main class="container mx-auto px-4 py-8">
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-8" role="alert">
            <div class="flex">
                <div class="py-1">
                    <i class="fas fa-clock text-yellow-500 mr-3 mt-1"></i>
                </div>
                <div>
                    <p class="font-bold">Compte en attente d'approbation</p>
                    <p>Votre compte entrepreneur est en cours de validation. Vous pouvez gérer vos produits et voir les commandes, mais certaines fonctionnalités peuvent être limitées jusqu'à l'approbation de votre compte par un administrateur.</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100 text-red-600 mr-4">
                        <i class="fas fa-shopping-bag text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-gray-500">Produits</p>
                        <h3 class="text-2xl font-bold">24</h3>
                    </div>
                </div>
                <a href="{{ route('entrepreneur.products') }}" class="mt-4 inline-block w-full text-center bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">
                    Gérer les produits
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                        <i class="fas fa-shopping-cart text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-gray-500">Commandes</p>
                        <h3 class="text-2xl font-bold">156</h3>
                    </div>
                </div>
                <a href="{{ route('entrepreneur.orders') }}" class="mt-4 inline-block w-full text-center bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    Voir les commandes
                </a>
            </div>


            <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <div>
                        <p class="text-gray-500">En attente</p>
                        <h3 class="text-2xl font-bold">12</h3>
                    </div>
                </div>
                <a href="{{ route('entrepreneur.orders') }}" class="mt-4 inline-block w-full text-center bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700 transition">
                    Traiter les commandes
                </a>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Actions rapides</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <a href="{{ route('products.create') }}" class="bg-white p-4 rounded-lg shadow-md flex items-center card-hover">
                    <div class="bg-blue-100 p-3 rounded-full text-blue-600 mr-4">
                        <i class="fas fa-plus-circle text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">Ajouter un produit</h3>
                        <p class="text-sm text-gray-600">Ajoutez un nouveau produit à votre catalogue</p>
                    </div>
                    <div class="ml-auto text-gray-400">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>

                <a href="{{ route('entrepreneur.orders') }}" class="bg-white p-4 rounded-lg shadow-md flex items-center card-hover">
                    <div class="bg-purple-100 p-3 rounded-full text-purple-600 mr-4">
                        <i class="fas fa-chart-line text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold">Voir les statistiques</h3>
                        <p class="text-sm text-gray-600">Analysez vos performances commerciales</p>
                    </div>
                    <div class="ml-auto text-gray-400">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800">Activité récente</h2>
                <a href="{{ route('entrepreneur.orders') }}" class="text-red-600 hover:text-red-800">Voir tout</a>
            </div>

            <div class="space-y-4">
                <div class="flex items-start pb-4 border-b border-gray-100">
                    <div class="bg-green-100 p-2 rounded-full text-green-600 mr-4">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Nouvelle commande #4587</p>
                        <p class="text-sm text-gray-600">2x Dibi spécial, 1x Alloco - Total: 5,500 FCFA</p>
                        <p class="text-xs text-gray-400 mt-1">Il y a 2 heures</p>
                    </div>
                    <div>
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">En attente</span>
                    </div>
                </div>

                <div class="flex items-start pb-4 border-b border-gray-100">
                    <div class="bg-blue-100 p-2 rounded-full text-blue-600 mr-4">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Avis reçu</p>
                        <p class="text-sm text-gray-600">Nouvel avis 5 étoiles pour votre Dibi spécial</p>
                        <p class="text-xs text-gray-400 mt-1">Il y a 1 jour</p>
                    </div>
                    <div class="flex text-yellow-400 text-sm">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="bg-red-100 p-2 rounded-full text-red-600 mr-4">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium">Produit épuisé</p>
                        <p class="text-sm text-gray-600">Votre "Brochette mixte" est épuisé</p>
                        <p class="text-xs text-gray-400 mt-1">Il y a 2 jours</p>
                    </div>
                    <div>
                        <a href="{{ route('products.edit', 1) }}" class="text-xs bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Réapprovisionner</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Produits populaires</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="border rounded-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Dibi spécial" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold">Dibi spécial</h3>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-red-600 font-semibold">3,500 FCFA</span>
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-gray-500 ml-1">(42)</span>
                            </div>
                        </div>
                        <div class="mt-3 flex justify-between text-sm text-gray-500">
                            <span>Vendu: 128</span>
                            <span>Stock: 15</span>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                        alt="Brochette mixte" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold">Brochette mixte</h3>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-red-600 font-semibold">2,500 FCFA</span>
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="text-gray-500 ml-1">(28)</span>
                            </div>
                        </div>
                        <div class="mt-3 flex justify-between text-sm text-gray-500">
                            <span>Vendu: 95</span>
                            <span class="text-red-500">Stock: 0</span>
                        </div>
                    </div>
                </div>


                <div class="border rounded-lg overflow-hidden card-hover">
                    <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                        alt="Alloco poulet" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold">Alloco poulet</h3>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-red-600 font-semibold">2,000 FCFA</span>
                            <div class="flex text-yellow-400 text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                                <span class="text-gray-500 ml-1">(19)</span>
                            </div>
                        </div>
                        <div class="mt-3 flex justify-between text-sm text-gray-500">
                            <span>Vendu: 76</span>
                            <span>Stock: 22</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-8 mt-12 benin-flag">
        <div class="bg-gray-800 bg-opacity-90">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">Eat&Drink Bénin</h3>
                        <p class="text-gray-400">Plateforme des entrepreneurs culinaires béninois.</p>
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
                            <li class="text-gray-400"><i class="fas fa-envelope mr-2"></i>support@eatdrink-benin.com</li>
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
                    <p>&copy; 2025 Plateforme Eat&Drink Bénin. Tous droits réservés.</p>
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