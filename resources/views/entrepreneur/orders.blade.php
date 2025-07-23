<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management - Eat&Drink Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .benin-flag {
            background: linear-gradient(to right, #008751 33%, #fcd116 33% 66%, #e8112d 66%);
        }
        .filter-btn.active {
            background-color: #E63946;
            color: white;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm benin-flag">
        <div class="bg-white bg-opacity-90">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="/dashboard/entrepreneur" class="text-2xl font-bold text-red-600">Eat<span class="text-yellow-500">&</span>Drink</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="/dashboard/entrepreneur" class="text-gray-700 hover:text-red-600">Dashboard</a>
                    <a href="/entrepreneur/products" class="text-gray-700 hover:text-red-600">Products</a>
                    <a href="/entrepreneur/orders" class="text-red-600 font-semibold">Orders</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">Welcome, Nom de l'Entreprise !</span>
                    <form method="POST" action="/logout" class="inline">
                        <input type="hidden" name="_token" value="CSRF_TOKEN_ICI">
                        <button type="submit" class="text-gray-700 hover:text-red-600">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="mb-8">
            <div class="bg-gradient-to-r from-green-700 via-yellow-500 to-red-600 rounded-lg p-8 text-center text-white">
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Gestion des Commandes</h1>
                <p class="text-xl">Suivez et gérez les commandes de vos clients</p>
            </div>
        </section>

        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">Commandes Clients</h2>
                <div class="flex space-x-2">
                    <button class="filter-btn active px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">
                        Toutes
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">
                        En attente
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-100 transition">
                        Complétées
                    </button>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg p-12 text-center">
                <div class="mx-auto max-w-md">
                    <i class="fas fa-shopping-cart fa-4x text-gray-300 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Aucune commande pour le moment</h3>
                    <p class="text-gray-500 mb-6">Les commandes de vos clients apparaîtront ici une fois que vous commencerez à en recevoir.</p>
                    <a href="/entrepreneur/products" class="inline-block bg-red-600 text-white px-6 py-3 rounded-full hover:bg-red-700 transition font-semibold">
                        <i class="fas fa-plus mr-2"></i>Ajouter des produits
                    </a>
                </div>
            </div>
        </div>
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