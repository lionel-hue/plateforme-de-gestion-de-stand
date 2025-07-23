<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programme</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .programme-card {
            transition: all 0.3s ease;
            border-left: 4px solid #E63946;
        }
        .programme-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .active-day {
            background-color: #E63946;
            color: white;
        }
        .food-tag {
            background-color: #FFD166;
            color: #1D3557;
        }
        .time-slot {
            position: relative;
            padding-left: 1.5rem;
        }
        .time-slot::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 0.75rem;
            height: 0.75rem;
            border-radius: 50%;
            background-color: #E63946;
        }
        .night-event {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            color: white;
        }
        .continuous-event {
            background: linear-gradient(to right, #f8ff00, #3ad59f);
            color: #1D3557;
        }
    </style>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('accueil') }}" class="text-2xl font-bold text-red-600">Eat<span class="text-yellow-500">&</span>Drink</a>
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('accueil') }}" class="text-gray-700 hover:text-red-600">Accueil</a>
                <a href="{{ route('stand') }}" class="text-gray-700 hover:text-red-600">Stands</a>
                <a href="{{ route('evènement') }}" class="text-red-600 font-semibold">Programme</a>
                <a href="#" class="text-gray-700 hover:text-red-600">Billetterie</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <section class="mb-16 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Programme du Festival</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Dégustations et animations non-stop de 16h à l'aube</p>
        </section>

        <div class="flex flex-wrap justify-center gap-3 mb-12 bg-white p-4 rounded-lg shadow-md">
            <button class="day-filter px-6 py-3 rounded-full font-medium bg-gray-100 hover:bg-gray-200 transition">Mercredi</button>
            <button class="day-filter px-6 py-3 rounded-full font-medium bg-gray-100 hover:bg-gray-200 transition">Jeudi</button>
            <button class="day-filter px-6 py-3 rounded-full font-medium bg-gray-100 hover:bg-gray-200 transition">Vendredi</button>
            <button class="day-filter px-6 py-3 rounded-full font-medium bg-gray-100 hover:bg-gray-200 transition">Samedi</button>
            <button class="day-filter px-6 py-3 rounded-full font-medium bg-gray-100 hover:bg-gray-200 transition">Dimanche</button>
        </div>

        <div class="space-y-8">
            <div class="day-section" data-day="mercredi">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="bg-red-600 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4">1</span>
                    Mercredi - Ouverture
                </h2>
                
                <div class="programme-card continuous-event rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-white text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Non-stop</span>
                        <span class="text-gray-800 font-medium">16h - Aube</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dégustation libre</h3>
                    <p class="text-gray-700 mb-4">Accès à tous les stands de nourriture en continu</p>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>Tous les stands</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="programme-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm font-semibold">Animation</span>
                            <span class="text-gray-500">18h - 20h</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ambiance musicale</h3>
                        <p class="text-gray-600 mb-4">Première soirée avec musique live</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Scène principale</span>
                        </div>
                    </div>
                    
                    <div class="programme-card bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-semibold">DJ</span>
                            <span class="text-gray-500">22h - Aube</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Soirée DJ</h3>
                        <p class="text-gray-600 mb-4">Ambiance musicale jusqu'au petit matin</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Scène principale</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="day-section" data-day="jeudi">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="bg-red-600 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4">2</span>
                    Jeudi - Nuit des saveurs
                </h2>
                
                <div class="programme-card continuous-event rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-white text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Non-stop</span>
                        <span class="text-gray-800 font-medium">16h - Aube</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dégustation libre</h3>
                    <p class="text-gray-700 mb-4">Accès à tous les stands de nourriture en continu</p>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>Tous les stands</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="programme-card night-event rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-sm font-semibold">Événement</span>
                            <span class="text-white font-medium">23h - Aube</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Nuit blanche DJ</h3>
                        <p class="text-gray-200 mb-4">Grande soirée dansante avec DJ set jusqu'au petit matin</p>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Scène principale</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="day-section" data-day="vendredi">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="bg-red-600 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4">3</span>
                    Vendredi - Soirée électro
                </h2>
                
                <div class="programme-card continuous-event rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-white text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Non-stop</span>
                        <span class="text-gray-800 font-medium">16h - Aube</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dégustation libre</h3>
                    <p class="text-gray-700 mb-4">Accès à tous les stands de nourriture en continu</p>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>Tous les stands</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="programme-card night-event rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm font-semibold">Événement</span>
                            <span class="text-white font-medium">23h - Aube</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Soirée électro</h3>
                        <p class="text-gray-200 mb-4">DJ set spécial musique électronique</p>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Scène principale</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="day-section" data-day="samedi">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="bg-red-600 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4">4</span>
                    Samedi - Grand soir
                </h2>
                
                <div class="programme-card continuous-event rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-white text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Non-stop</span>
                        <span class="text-gray-800 font-medium">16h - Aube</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dégustation libre</h3>
                    <p class="text-gray-700 mb-4">Accès à tous les stands de nourriture en continu</p>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>Tous les stands</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="programme-card night-event rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-semibold">Événement</span>
                            <span class="text-white font-medium">23h - Aube</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Grande nuit festive</h3>
                        <p class="text-gray-200 mb-4">DJ set exceptionnel avec invité surprise</p>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Scène principale</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="day-section" data-day="dimanche">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <span class="bg-red-600 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4">5</span>
                    Dimanche - Clôture
                </h2>
                
                <div class="programme-card continuous-event rounded-lg shadow-md p-6 mb-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="bg-white text-green-600 px-3 py-1 rounded-full text-sm font-semibold">Non-stop</span>
                        <span class="text-gray-800 font-medium">16h - Aube</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Dégustation libre</h3>
                    <p class="text-gray-700 mb-4">Dernière occasion de découvrir tous les stands</p>
                    <div class="flex items-center text-sm text-gray-600">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>Tous les stands</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="programme-card night-event rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-start mb-4">
                            <span class="bg-yellow-100 text-yellow-600 px-3 py-1 rounded-full text-sm font-semibold">Événement</span>
                            <span class="text-white font-medium">23h - Aube</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Final en beauté</h3>
                        <p class="text-gray-200 mb-4">Dernière soirée avec DJ jusqu'à l'aube</p>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>Scène principale</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-16 bg-gradient-to-r from-red-600 to-yellow-500 rounded-lg p-8 text-center text-white">
            <h2 class="text-2xl font-bold mb-4">Réservez vos billets dès maintenant !</h2>
            <p class="mb-6 max-w-2xl mx-auto">Accès illimité à tous les stands et animations de 16h à l'aube</p>
            <a href="#" class="inline-block bg-white text-red-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                <i class="fas fa-ticket-alt mr-2"></i> Acheter un pass
            </a>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('.day-filter').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.day-filter').forEach(btn => {
                    btn.classList.remove('active-day');
                    btn.classList.add('bg-gray-100', 'hover:bg-gray-200');
                });
                
                this.classList.add('active-day');
                this.classList.remove('bg-gray-100', 'hover:bg-gray-200');
                
                const day = this.textContent.trim().toLowerCase();
                document.querySelectorAll('.day-section').forEach(section => {
                    section.style.display = 'none';
                    if(section.dataset.day.includes(day)) {
                        section.style.display = 'block';
                    }
                });
            });
        });

        document.querySelector('.day-filter').click();
    </script>
</body>
</html>