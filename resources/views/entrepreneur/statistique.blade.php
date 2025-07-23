<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        .stat-card {
            border-left: 4px solid;
        }
        .stat-card.orders {
            border-left-color: #E63946;
        }
        .stat-card.revenue {
            border-left-color: #28a745;
        }
        .stat-card.customers {
            border-left-color: #17a2b8;
        }
        .stat-card.rating {
            border-left-color: #ffc107;
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
                <a href="{{ route('entrepreneur.dashboard') }}" class="py-4 px-2 text-gray-600 hover:text-red-600">Dashboard</a>
                <a href="{{ route('entrepreneur.products') }}" class="py-4 px-2 text-gray-600 hover:text-red-600">Produits</a>
                <a href="{{ route('entrepreneur.orders') }}" class="py-4 px-2 text-gray-600 hover:text-red-600">Commandes</a>
                <a href="{{ route('entrepreneur.statistique') }}" class="py-4 px-2 active-nav">Statistiques</a>
                <a href="{{ route('entrepreneur.settings') }}" class="py-4 px-2 text-gray-600 hover:text-red-600">Paramètres</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Statistiques de performance</h1>
            <div class="flex space-x-2">
                <select class="border rounded px-3 py-2 text-sm bg-white">
                    <option>7 derniers jours</option>
                    <option selected>30 derniers jours</option>
                    <option>3 derniers mois</option>
                    <option>12 derniers mois</option>
                </select>
                <button class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 flex items-center">
                    <i class="fas fa-download mr-2"></i> Exporter
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded shadow stat-card orders p-6 card-hover">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-500 text-sm">Commandes</p>
                        <h3 class="text-2xl font-bold mt-1">156</h3>
                        <p class="text-green-500 text-sm mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> 12% vs période précédente
                        </p>
                    </div>
                    <div class="bg-red-100 p-3 rounded-full text-red-600">
                        <i class="fas fa-shopping-cart text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow stat-card revenue p-6 card-hover">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-500 text-sm">Revenu total</p>
                        <h3 class="text-2xl font-bold mt-1">452,500 FCFA</h3>
                        <p class="text-green-500 text-sm mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> 18% vs période précédente
                        </p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full text-green-600">
                        <i class="fas fa-money-bill-wave text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow stat-card customers p-6 card-hover">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-500 text-sm">Clients uniques</p>
                        <h3 class="text-2xl font-bold mt-1">87</h3>
                        <p class="text-green-500 text-sm mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> 5% vs période précédente
                        </p>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full text-blue-600">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded shadow stat-card rating p-6 card-hover">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-gray-500 text-sm">Note moyenne</p>
                        <h3 class="text-2xl font-bold mt-1">4.7/5</h3>
                        <p class="text-green-500 text-sm mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> 0.2 vs période précédente
                        </p>
                    </div>
                    <div class="bg-yellow-100 p-3 rounded-full text-yellow-600">
                        <i class="fas fa-star text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Revenu mensuel</h2>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 bg-gray-100 rounded text-sm active">FCFA</button>
                        <button class="px-3 py-1 bg-gray-100 rounded text-sm">Commandes</button>
                    </div>
                </div>
                <canvas id="revenueChart" height="250"></canvas>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">Top produits</h2>
                    <select class="border rounded px-3 py-1 text-sm bg-white">
                        <option>Par revenu</option>
                        <option>Par quantité</option>
                        <option>Par notation</option>
                    </select>
                </div>
                <canvas id="productsChart" height="250"></canvas>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Répartition des commandes</h2>
                <div class="flex items-center justify-center">
                    <canvas id="ordersPieChart" height="250" width="250"></canvas>
                </div>
                <div class="mt-4 grid grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-red-600 rounded-full mr-2"></div>
                        <span class="text-sm">Livrées: 128 (82%)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-yellow-400 rounded-full mr-2"></div>
                        <span class="text-sm">En attente: 18 (12%)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-sm">En préparation: 8 (5%)</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-gray-400 rounded-full mr-2"></div>
                        <span class="text-sm">Annulées: 2 (1%)</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6 card-hover">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Heures d'activité</h2>
                <canvas id="hoursChart" height="250"></canvas>
                <div class="mt-4 text-sm text-gray-600">
                    <p><i class="fas fa-info-circle mr-2 text-blue-500"></i>Vos heures de pointe sont entre 12h-14h et 19h-21h</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 mt-8 card-hover">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Comparaison avec les autres stands</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Métrique</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Votre stand</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Moyenne des stands</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Top 10%</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Commandes/mois</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">156</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">98</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">210+</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Revenu moyen/commande</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2,900 FCFA</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2,400 FCFA</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3,500+ FCFA</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Note moyenne</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4.7/5</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4.3/5</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4.8+</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Taux de répétition</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">32%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">25%</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">45%+</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 text-sm text-gray-600">
                <p><i class="fas fa-trophy mr-2 text-yellow-500"></i>Vous êtes dans le top 15% des stands pour le nombre de commandes</p>
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
        document.addEventListener('DOMContentLoaded', function() {
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            const revenueChart = new Chart(revenueCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [{
                        label: 'Revenu (FCFA)',
                        data: [85000, 102000, 120500, 110200, 135000, 158000, 145000, 165000, 142000, 155000, 168000, 185000],
                        backgroundColor: 'rgba(230, 57, 70, 0.1)',
                        borderColor: '#E63946',
                        borderWidth: 2,
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value.toLocaleString() + ' FCFA';
                                }
                            }
                        }
                    }
                }
            });

            const productsCtx = document.getElementById('productsChart').getContext('2d');
            const productsChart = new Chart(productsCtx, {
                type: 'bar',
                data: {
                    labels: ['Dibi spécial', 'Brochette mixte', 'Alloco poulet', 'Poulet braisé', 'Poisson grillé'],
                    datasets: [{
                        label: 'Revenu (FCFA)',
                        data: [185500, 125000, 98000, 75600, 68400],
                        backgroundColor: [
                            'rgba(230, 57, 70, 0.7)',
                            'rgba(40, 167, 69, 0.7)',
                            'rgba(255, 193, 7, 0.7)',
                            'rgba(23, 162, 184, 0.7)',
                            'rgba(108, 117, 125, 0.7)'
                        ],
                        borderColor: [
                            'rgba(230, 57, 70, 1)',
                            'rgba(40, 167, 69, 1)',
                            'rgba(255, 193, 7, 1)',
                            'rgba(23, 162, 184, 1)',
                            'rgba(108, 117, 125, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value.toLocaleString() + ' FCFA';
                                }
                            }
                        }
                    }
                }
            });

            const ordersPieCtx = document.getElementById('ordersPieChart').getContext('2d');
            const ordersPieChart = new Chart(ordersPieCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Livrées', 'En attente', 'En préparation', 'Annulées'],
                    datasets: [{
                        data: [128, 18, 8, 2],
                        backgroundColor: [
                            '#E63946',
                            '#FFC107',
                            '#17A2B8',
                            '#6C757D'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

            const hoursCtx = document.getElementById('hoursChart').getContext('2d');
            const hoursChart = new Chart(hoursCtx, {
                type: 'bar',
                data: {
                    labels: ['8h', '9h', '10h', '11h', '12h', '13h', '14h', '15h', '16h', '17h', '18h', '19h', '20h', '21h', '22h'],
                    datasets: [{
                        label: 'Commandes',
                        data: [2, 5, 8, 12, 25, 32, 28, 15, 10, 12, 18, 30, 35, 28, 10],
                        backgroundColor: 'rgba(230, 57, 70, 0.7)',
                        borderColor: '#E63946',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Nombre de commandes'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Heures de la journée'
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>