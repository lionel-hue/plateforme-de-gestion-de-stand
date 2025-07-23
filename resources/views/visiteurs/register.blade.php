<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Utilisateur</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #e63946;
            --secondary-color: #f1c40f;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            color: #333;
        }
        
        .benin-flag-header {
            background: linear-gradient(to right, #008751 33%, #fcd116 33% 66%, #e8112d 66%);
            height: 8px;
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        
        .logo-text {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .hero-section {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.95)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .registration-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            transform: translateY(-50px);
            margin-bottom: -50px;
            transition: all 0.3s ease;
        }
        
        .registration-card:hover {
            transform: translateY(-55px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .card-header::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 65%, rgba(255,255,255,0.2) 65%);
        }
        
        .card-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            position: relative;
            z-index: 1;
        }
        
        .card-body {
            padding: 40px;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 8px;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 20px;
            transition: all 0.3s;
            height: 50px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(230, 57, 70, 0.2);
        }
        
        .btn-register {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: 700;
            padding: 14px;
            transition: all 0.3s;
            width: 100%;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 1.05rem;
        }
        
        .btn-register:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(230, 57, 70, 0.3);
        }
        
        .btn-register:active {
            transform: translateY(0);
        }
        
        .login-link {
            color: var(--primary-color);
            font-weight: 600;
            transition: all 0.2s;
        }
        
        .login-link:hover {
            color: #c1121f;
            text-decoration: none;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .feature-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s;
            height: 100%;
            border-top: 4px solid var(--primary-color);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-title {
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 15px;
        }
        
        footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 0;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: white;
        }
        
        .footer-links h4 {
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-links h4::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }
        
        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
            transition: all 0.2s;
            display: block;
            margin-bottom: 8px;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: white;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-icon:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            margin-top: 40px;
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .card-body {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="benin-flag-header"></div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="logo-text">Eat&Drink</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('stand') }}">Stands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('evènement') }}">Programme</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-outline-danger" href="{{ route('login') }}">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title animate__animated animate__fadeInDown">Rejoignez Eat&Drink</h1>
            <p class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s">
                Découvrez les meilleures saveurs du Bénin et profitez d'une expérience culinaire exceptionnelle
            </p>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="registration-card">
                        <div class="card-header">
                            <h3 class="card-title">Créer un compte utilisateur</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Remplissez le formulaire pour créer votre compte et commencer votre expérience culinaire</p>
                            
                            <div class="alert alert-danger d-none" id="error-messages">
                                <ul class="mb-0" id="error-list"></ul>
                            </div>
                            
                            <form id="registration-form">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="first-name" class="form-label">Prénom <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="first-name" required>
                                        <div class="invalid-feedback">Veuillez entrer votre prénom</div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="last-name" class="form-label">Nom <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="last-name" required>
                                        <div class="invalid-feedback">Veuillez entrer votre nom</div>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="email" class="form-label">Adresse email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" required>
                                    <div class="invalid-feedback">Veuillez entrer une adresse email valide</div>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="phone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" required>
                                    <div class="invalid-feedback">Veuillez entrer un numéro de téléphone valide</div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="password" class="form-label">Mot de passe <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" required>
                                            <button class="btn btn-outline-secondary toggle-password" type="button">
                                                <i class="far fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="invalid-feedback">Le mot de passe doit contenir au moins 8 caractères</div>
                                        <small class="form-text text-muted">Minimum 8 caractères</small>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="confirm-password" class="form-label">Confirmer le mot de passe <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="confirm-password" required>
                                            <button class="btn btn-outline-secondary toggle-password" type="button">
                                                <i class="far fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="invalid-feedback">Les mots de passe ne correspondent pas</div>
                                    </div>
                                </div>
                                
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="newsletter">
                                    <label class="form-check-label" for="newsletter">Je souhaite recevoir les newsletters et offres spéciales</label>
                                </div>
                                
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" required>
                                    <label class="form-check-label" for="terms">J'accepte les <a href="#" class="text-primary">Conditions Générales</a> et la <a href="#" class="text-primary">Politique de Confidentialité</a></label>
                                    <div class="invalid-feedback">Vous devez accepter les conditions</div>
                                </div>
                                
                                <button type="submit" class="btn btn-register mb-4 animate__animated animate__pulse animate__infinite animate__slower">
                                    <i class="fas fa-user-plus me-2"></i> S'inscrire maintenant
                                </button>
                                
                                <div class="text-center pt-3 border-top">
                                    <p class="mb-0">
                                        Vous avez déjà un compte ?
                                        <a href="{{ route('login') }}" class="login-link">Connectez-vous ici</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Pourquoi rejoindre Eat&Drink ?</h2>
                <p class="text-muted">Découvrez tous les avantages de notre plateforme</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h4 class="feature-title">Découvertes culinaires</h4>
                        <p>Accédez à des centaines de stands et découvrez les meilleures spécialités du Bénin.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4 class="feature-title">Offres exclusives</h4>
                        <p>Bénéficiez de réductions et d'offres spéciales réservées à nos membres.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4 class="feature-title">Réservations faciles</h4>
                        <p>Réservez vos places pour les événements en quelques clics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a href="#" class="footer-logo">Eat&Drink</a>
                    <p class="mt-3 text-muted">La plateforme qui célèbre la richesse culinaire du Bénin à travers des événements exceptionnels.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer-links">
                        <h4>Liens rapides</h4>
                        <a href="{{ route('accueil') }}">Accueil</a>
                        <a href="{{ route('stand') }}">Stands</a>
                        <a href="{{ route('evènement') }}">Programme</a>
                        <a href="{{ route('evènement') }}">Événements</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer-links">
                        <h4>À propos</h4>
                        <a href="#">Notre histoire</a>
                        <a href="#">L'équipe</a>
                        <a href="#">Partenaires</a>
                        <a href="#">Carrières</a>
                        <a href="#">Blog</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-links">
                        <h4>Contactez-nous</h4>
                        <p class="text-muted mb-2"><i class="fas fa-map-marker-alt me-2"></i> Cotonou, Bénin</p>
                        <p class="text-muted mb-2"><i class="fas fa-phone-alt me-2"></i> +229 01 68 81 42 94</p>
                        <p class="text-muted mb-2"><i class="fas fa-envelope me-2"></i> contact@eatdrink-benin.com</p>
                    </div>
                </div>
            </div>
            
            <div class="copyright text-center py-4">
                <p class="mb-0 text-muted">&copy; 2025 Eat&Drink Bénin. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.toggle-password').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    const icon = this.querySelector('i');
                    
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });
            
            document.getElementById('registration-form').addEventListener('submit', function(e) {
                e.preventDefault();
                document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                document.getElementById('error-messages').classList.add('d-none');
                
                const firstName = document.getElementById('first-name').value;
                const lastName = document.getElementById('last-name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirm-password').value;
                const termsChecked = document.getElementById('terms').checked;
                
                let isValid = true;
                const errors = [];
                
                if (!firstName) {
                    document.getElementById('first-name').classList.add('is-invalid');
                    errors.push("Le prénom est requis");
                    isValid = false;
                }
                
                if (!lastName) {
                    document.getElementById('last-name').classList.add('is-invalid');
                    errors.push("Le nom est requis");
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
            
                if (!phone) {
                    document.getElementById('phone').classList.add('is-invalid');
                    errors.push("Le numéro de téléphone est requis");
                    isValid = false;
                } else if (!/^[0-9]{8,15}$/.test(phone)) {
                    document.getElementById('phone').classList.add('is-invalid');
                    errors.push("Veuillez entrer un numéro de téléphone valide");
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
                    const submitBtn = document.querySelector('#registration-form button[type="submit"]');
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Création du compte...';
                    submitBtn.disabled = true;
                    
                    setTimeout(() => {
                        alert('Inscription réussie ! Bienvenue sur Eat&Drink.');
                        submitBtn.innerHTML = '<i class="fas fa-check me-2"></i> Inscription réussie';
                    }, 2000);
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
        });
    </script>
</body>
</html>