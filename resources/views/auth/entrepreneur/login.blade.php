<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Entrepreneur - Eat&Drink Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        header {
            background: linear-gradient(to right, #008751 33%, #fcd116 33% 66%, #e8112d 66%);
        }
        
        .header-content {
            background-color: white;
            background-opacity: 0.9;
        }
        
        .login-section {
            background: #2c3e50;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .login-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .login-form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-header {
            background: linear-gradient(135deg, #e63946, #f1c40f);
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .form-body {
            padding: 30px;
        }
        
        .form-title {
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: #e63946;
            box-shadow: 0 0 0 0.2rem rgba(230, 57, 70, 0.25);
        }
        
        .btn-login {
            background: linear-gradient(135deg, #e63946, #f1c40f);
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            padding: 12px;
            transition: all 0.3s;
            width: 100%;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.4);
        }
        
        .register-link {
            color: #e63946;
            font-weight: 500;
        }
        
        .register-link:hover {
            color: #c1121f;
            text-decoration: none;
        }
        
        .alert {
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
        
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
        
        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
            display: block;
        }
        
        .is-invalid {
            border-color: #dc3545 !important;
        }
        
        footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0;
        }
        
        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .social-icons a {
            color: #bdc3c7;
            font-size: 1.2rem;
            margin-right: 15px;
        }
        
        .social-icons a:hover {
            color: white;
        }
        
        .copyright {
            border-top: 1px solid #34495e;
            color: #bdc3c7;
            padding-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="shadow-sm">
        <div class="bg-white bg-opacity-90">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="#" class="text-2xl font-bold text-red-600">Eat<span class="text-yellow-500">&</span>Drink</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('accueil') }}" class="text-gray-700 hover:text-red-600">Accueil</a>
                    <a href="{{ route('stand') }}" class="text-red-600 font-semibold">Stands</a>
                    <a href="#" class="text-gray-700 hover:text-red-600">Programme</a>
                </nav>
            </div>
        </div>
    </header>

    <section class="login-section">
        <div class="container">
            <h1 class="login-title">Connexion Entrepreneur</h1>
            <p class="lead">Accédez à votre tableau de bord</p>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="alert alert-danger d-none" id="error-messages">
                        <ul class="mb-0" id="error-list"></ul>
                    </div>
                    <div class="alert alert-success d-none" id="success-message"></div>
                    
                    <div class="login-form-container shadow">
                        <div class="form-header">
                            <h3 class="mb-0">Connexion Entrepreneur</h3>
                        </div>
                        
                        <div class="form-body">
                            <p class="text-muted mb-4">Entrez vos identifiants pour accéder à votre compte</p>
                            
                            <form id="login-form" methode="POST" action="{{ route('entre.login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" required>
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror                                
                                </div>
                                
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password" required>
                                    @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror                                
                                </div>
                                
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                                
                                <button type="submit" class="btn btn-login mb-3">
                                    <i class="fas fa-sign-in-alt me-2"></i> Se connecter
                                </button>
                                
                                <div class="text-center mt-3">
                                    <p>Vous n'avez pas de compte ? 
                                        <a href="{{ route('entrepreneur.register') }}" class="register-link text-red-600 hover:underline">Inscrivez-vous ici</a>
                                    </p>
                                    <p><a href="#" class="register-link">Mot de passe oublié ?</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
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
            <div class="copyright">
                <p>&copy; 2025 Festival Eat&Drink Bénin. Tous droits réservés.</p>
                <p class="mt-2 text-sm">Fièrement béninois</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>