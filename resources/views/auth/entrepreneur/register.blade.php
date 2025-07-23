<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Entrepreneur - Eat&Drink Platform</title>
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
        
        .benin-flag {
            background: linear-gradient(to right, #008751 33%, #fcd116 33% 66%, #e8112d 66%);
        }
        
        .registration-section {
            background: #2c3e50; 
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .registration-title {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .registration-form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
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
        
        .btn-register {
            background: linear-gradient(135deg, #e63946, #f1c40f);
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            padding: 12px;
            transition: all 0.3s;
            width: 100%;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.4);
        }
        
        .login-link {
            color: #e63946;
            font-weight: 500;
        }
        
        .login-link:hover {
            color: #c1121f;
            text-decoration: none;
        }
        
        .test-message {
            background: linear-gradient(135deg, #28a745, #20c997);
            border-radius: 10px;
            color: white;
            margin-bottom: 30px;
            padding: 20px;
            text-align: center;
        }
        
        footer {
            background: #2c3e50; 
            color: white;
            padding: 40px 0;
        }
        
        .footer-content {
            background-color: #2c3e50;
            background-opacity: 0.9;
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
    <header class="shadow-sm benin-flag">
        <div class="bg-white bg-opacity-90">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="{{ route('accueil') }}" class="text-2xl font-bold text-red-600">Eat<span class="text-yellow-500">&</span>Drink</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('accueil') }}" class="text-gray-700 hover:text-red-600">Accueil</a>
                    <a href="{{ route('stand') }}" class="text-red-600 font-semibold">Stands</a>
                    <a href="#" class="text-gray-700 hover:text-red-600">Programme</a>
                </nav>
            </div>
        </div>
    </header>
    <section class="registration-section">
        <div class="container">
            <h1 class="registration-title">Rejoignez Eat&Drink en tant qu'entrepreneur</h1>
            <p class="lead">Créez votre compte pour gérer votre stand sur notre plateforme</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="test-message">
                        <h2><i class="fas fa-check-circle"></i> Page d'inscription Entrepreneur</h2>
                        <p class="mb-0">Si tu vois ça, la vue fonctionne parfaitement !</p>
                    </div>
                    
                    <div class="registration-form-container shadow">
                        <div class="form-header">
                            <h3 class="mb-0">Inscription Entrepreneur</h3>
                        </div>
                        
                        <div class="form-body">
                            <p class="text-muted mb-4">Remplissez le formulaire pour créer votre compte entrepreneur</p>
                            <div class="alert alert-danger d-none" id="error-messages">
                                <ul class="mb-0" id="error-list"></ul>
                            </div>
                            
                            <form id="registration-form">
                                <div class="mb-3">
                                    <label for="nom_entreprise" class="form-label">Nom de l'entreprise <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="nom_entreprise" name="nom_entreprise" required>
                                    <div class="invalid-feedback">Veuillez entrer le nom de votre entreprise</div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">Veuillez entrer une adresse email valide</div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">Mot de passe <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="invalid-feedback">Le mot de passe doit contenir au moins 8 caractères</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="confirm-password" class="form-label">Confirmer le mot de passe <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
                                        <div class="invalid-feedback">Les mots de passe ne correspondent pas</div>
                                    </div>
                                </div>
                                
                                <input type="hidden" name="role" value="entrepreneur_waiting_approval">
                                <input type="hidden" name="status" value="waiting">
                                <input type="hidden" name="rejection_reason" value="">
                                
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" required>
                                    <label class="form-check-label" for="terms">J'accepte les <a href="#" class="text-primary">Conditions Générales</a></label>
                                </div>
                                
                                <button type="submit" class="btn btn-register mb-3">
                                    <i class="fas fa-user-plus me-2" href="{{ route('entrepreneur.dashboard') }}"></i> S'inscrire
                                </button>
                                
                                    <p class="text-center mt-3">
                                        Vous avez déjà un compte ?
                                        <a href="{{ route('entrepreneur.login') }}" class="login-link text-red-600 hover:underline">Connectez-vous ici</a>
                                    </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-12">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('registration-form').addEventListener('submit', function(e) {
            e.preventDefault();
            document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
            document.getElementById('error-messages').classList.add('d-none');
            
            const enterpriseName = document.getElementById('enterprise-name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            const termsChecked = document.getElementById('terms').checked;
            
            let isValid = true;
            const errors = [];
            
            if (!enterpriseName) {
                document.getElementById('enterprise-name').classList.add('is-invalid');
                errors.push("Le nom de l'entreprise est requis");
                isValid = false;
            }
            
            if (!email) {
                document.getElementById('email').classList.add('is-invalid');
                errors.push("L'adresse email est requise");
                isValid = false;
            } else if (!/^\S+@\S+\.\S+$/.test(email)) {
                document.getElementById('email').classList.add('is-invalid');
                errors.push("Veuillez entrer une adresse email valide");
                isValid = false;
            }
        
            if (!password) {
                document.getElementById('password').classList.add('is-invalid');
                errors.push("Le mot de passe est requis");
                isValid = false;
            } else if (password.length < 8) {
                document.getElementById('password').classList.add('is-invalid');
                errors.push("Le mot de passe doit contenir au moins 8 caractères");
                isValid = false;
            }
        
            if (password !== confirmPassword) {
                document.getElementById('confirm-password').classList.add('is-invalid');
                errors.push("Les mots de passe ne correspondent pas");
                isValid = false;
            }
            
            if (!termsChecked) {
                document.getElementById('terms').classList.add('is-invalid');
                errors.push("Vous devez accepter les conditions générales");
                isValid = false;
            }
            
            if (!isValid) {
                const errorList = document.getElementById('error-list');
                errorList.innerHTML = '';
                errors.forEach(error => {
                    const li = document.createElement('li');
                    li.textContent = error;
                    errorList.appendChild(li);
                });
                document.getElementById('error-messages').classList.remove('d-none');
            } else {
                
                alert('Formulaire valide, prêt à être soumis !');
                // this.submit();
            }
        });
        
    
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('animate__animated', 'animate__pulse');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('animate__animated', 'animate__pulse');
            });
        });
    </script>
</body>
</html>