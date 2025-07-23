<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - Eat&Drink</title>
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
            --gray-color: #e9ecef;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
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
        
        .profile-header {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.95)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0 40px;
            position: relative;
        }
        
        .profile-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background: white;
            rotate: 45deg;
            z-index: 1;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }
        
        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }
        
        .profile-name {
            font-size: 2rem;
            font-weight: 700;
            margin: 15px 0 5px;
        }
        
        .profile-bio {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .profile-stats {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .profile-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-top: 3px solid var(--primary-color);
        }
        
        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--gray-color);
        }
        
        .info-item {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }
        
        .info-icon {
            width: 40px;
            height: 40px;
            background: rgba(230, 57, 70, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary-color);
            font-size: 1.1rem;
        }
        
        .info-content {
            flex: 1;
        }
        
        .info-label {
            font-size: 0.85rem;
            color: #6c757d;
            margin-bottom: 3px;
        }
        
        .info-value {
            font-weight: 600;
            font-size: 1.05rem;
        }
        
        .btn-edit {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
            color: white;
        }
        
        .badge-premium {
            background: linear-gradient(135deg, #f1c40f, #e67e22);
            color: white;
            font-weight: 600;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .order-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid var(--gray-color);
            align-items: center;
        }
        
        .order-item:last-child {
            border-bottom: none;
        }
        
        .order-img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
            margin-right: 20px;
        }
        
        .order-details {
            flex: 1;
        }
        
        .order-title {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .order-date {
            font-size: 0.85rem;
            color: #6c757d;
        }
        
        .order-status {
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .status-delivered {
            background: #d4edda;
            color: #155724;
        }
        
        .status-pending {
            background: #fff3cd;
            color: #856404;
        }
        
        .status-cancelled {
            background: #f8d7da;
            color: #721c24;
        }
        
        .favorite-item {
            display: flex;
            margin-bottom: 20px;
            align-items: center;
            transition: all 0.3s ease;
            padding: 10px;
            border-radius: 10px;
        }
        
        .favorite-item:hover {
            background: rgba(0,0,0,0.02);
            transform: translateX(5px);
        }
        
        .favorite-img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .favorite-title {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .favorite-price {
            color: var(--primary-color);
            font-weight: 700;
        }
        
        .favorite-rating {
            color: #f1c40f;
            font-size: 0.9rem;
        }
        
        .footer {
            background: var(--dark-color);
            color: white;
            padding: 60px 0 0;
        }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            margin-top: 40px;
        }
        
        @media (max-width: 768px) {
            .profile-header {
                padding: 60px 0 30px;
            }
            
            .profile-avatar {
                width: 100px;
                height: 100px;
            }
            
            .profile-name {
                font-size: 1.6rem;
            }
            
            .profile-stats {
                gap: 15px;
            }
            
            .stat-number {
                font-size: 1.4rem;
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i> Mon compte
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Mon profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-bag me-2"></i> Mes commandes</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2"></i> Favoris</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="profile-header text-center">
        <div class="container">
            <img src="https://sdmntpritalynorth.oaiusercontent.com/files/0ca5b5f4f7d9c17_00000000-cf38-6246-9e52-a16ce5c4f81d/drvs/thumbnail/raw?se=2025-07-23T17%3A19%3A51Z&sp=r&sv=2024-08-04&sr=b&scid=efa4bdd2-a497-5b66-96cd-553b9f21f376&skoid=f71d6506-3cac-498e-b62a-67f9228033a9&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-07-22T23%3A38%3A48Z&ske=2025-07-23T23%3A38%3A48Z&sks=b&skv=2024-08-04&sig=j7BWp9n1SOqDfQ8Q%2BK8Kd4wq1P5VWtzIy9/R21jt3Ic%3D" alt="Photo de profil" class="profile-avatar animate__animated animate__fadeIn">
            <div class="d-flex justify-content-center align-items-center mt-3">
                <h1 class="profile-name animate__animated animate__fadeIn animate__delay-1s">Floriane</h1>
            </div>
            <p class="profile-bio animate__animated animate__fadeIn animate__delay-1s">Passionnée de cuisine béninoise | Exploratrice de saveurs | Membre depuis 2025</p>
            
            <div class="profile-stats animate__animated animate__fadeIn animate__delay-2s">
                <div class="stat-item">
                    <div class="stat-number">42</div>
                    <div class="stat-label">Commandes</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">28</div>
                    <div class="stat-label">Favoris</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">4.9</div>
                    <div class="stat-label">Évaluation</div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="profile-card animate__animated animate__fadeIn">
                        <h3 class="card-title">
                            <i class="fas fa-user-circle me-2"></i> Informations personnelles
                        </h3>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Email</div>
                                <div class="info-value">floriane@gmail.com</div>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Téléphone</div>
                                <div class="info-value">+229 01 68 81 42 94 </div>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Adresse</div>
                                <div class="info-value">123 Rue des Saveurs, Cotonou</div>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-birthday-cake"></i>
                            </div>
                            <div class="info-content">
                                <div class="info-label">Date de naissance</div>
                                <div class="info-value">19 ans</div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button class="btn-edit">
                                <i class="fas fa-edit"></i> Modifier le profil
                            </button>
                        </div>
                    </div>
                    
                    <div class="profile-card animate__animated animate__fadeIn animate__delay-1s">
                        <h3 class="card-title">
                            <i class="fas fa-heart me-2"></i> Préférences
                        </h3>
                        
                        <div class="mb-3">
                            <h6 class="fw-bold mb-2">Cuisines préférées</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-light text-dark">Béninoise</span>
                                <span class="badge bg-light text-dark">Sénégalaise</span>
                                <span class="badge bg-light text-dark">Française</span>
                                <span class="badge bg-light text-dark">Libanaise</span>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="fw-bold mb-2">Allergies</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-light text-dark">Arachides</span>
                                <span class="badge bg-light text-dark">Fruits de mer</span>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <h6 class="fw-bold mb-2">Régime spécial</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-light text-dark">Sans gluten</span>
                            <span class="badge bg-light text-dark">Végétarien</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="profile-card animate__animated animate__fadeIn animate__delay-1s">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="card-title mb-0">
                                <i class="fas fa-shopping-bag me-2"></i> Dernières commandes
                            </h3>
                            <a href="#" class="text-primary">Voir tout</a>
                        </div>
                        
                        <div class="order-item">
                            <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dibi spécial" class="order-img">
                            <div class="order-details">
                                <h5 class="order-title">Dibi spécial + Alloco</h5>
                                <div class="order-date">12 juin 2023 • 14:30</div>
                                <div class="d-flex gap-2 mt-2">
                                    <span class="badge bg-light text-dark">Stand: Chez Aïcha</span>
                                    <span class="badge bg-light text-dark">Quantité: 2</span>
                                </div>
                            </div>
                            <div class="order-status status-delivered">Livré</div>
                        </div>
                        
                        <div class="order-item">
                            <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Brochette mixte" class="order-img">
                            <div class="order-details">
                                <h5 class="order-title">Brochette mixte + Attiéké</h5>
                                <div class="order-date">8 juin 2023 • 19:15</div>
                                <div class="d-flex gap-2 mt-2">
                                    <span class="badge bg-light text-dark">Stand: Grillades du Lac</span>
                                    <span class="badge bg-light text-dark">Quantité: 1</span>
                                </div>
                            </div>
                            <div class="order-status status-delivered">Livré</div>
                        </div>
                        
                        <div class="order-item">
                            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Alloco poulet" class="order-img">
                            <div class="order-details">
                                <h5 class="order-title">Alloco poulet + Sauce piquante</h5>
                                <div class="order-date">5 juin 2023 • 12:45</div>
                                <div class="d-flex gap-2 mt-2">
                                    <span class="badge bg-light text-dark">Stand: Saveurs Locales</span>
                                    <span class="badge bg-light text-dark">Quantité: 3</span>
                                </div>
                            </div>
                            <div class="order-status status-pending">En préparation</div>
                        </div>
                    </div>
                    
                    <div class="profile-card animate__animated animate__fadeIn animate__delay-2s">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="card-title mb-0">
                                <i class="fas fa-heart me-2"></i> Favoris
                            </h3>
                            <a href="#" class="text-primary">Voir tout</a>
                        </div>
                        
                        <div class="favorite-item">
                            <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Dibi spécial" class="favorite-img">
                            <div class="flex-grow-1">
                                <h5 class="favorite-title">Dibi spécial</h5>
                                <div class="favorite-price">3,500 FCFA</div>
                                <div class="favorite-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span class="text-muted ms-1">(42)</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        
                        <div class="favorite-item">
                            <img src="https://images.unsplash.com/photo-1559847844-5315695dadae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Brochette mixte" class="favorite-img">
                            <div class="flex-grow-1">
                                <h5 class="favorite-title">Brochette mixte</h5>
                                <div class="favorite-price">2,500 FCFA</div>
                                <div class="favorite-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="text-muted ms-1">(28)</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        
                        <div class="favorite-item">
                            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Alloco poulet" class="favorite-img">
                            <div class="flex-grow-1">
                                <h5 class="favorite-title">Alloco poulet</h5>
                                <div class="favorite-price">2,000 FCFA</div>
                                <div class="favorite-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <span class="text-muted ms-1">(19)</span>
                                </div>
                            </div>
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
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
            const cards = document.querySelectorAll('.profile-card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.2}s`;
            });
            
            document.querySelectorAll('.favorite-item button').forEach(button => {
                button.addEventListener('click', function() {
                    const favoriteItem = this.closest('.favorite-item');
                    favoriteItem.classList.add('animate__animated', 'animate__fadeOut');
                    setTimeout(() => {
                        favoriteItem.remove();
                    }, 500);
                });
            });
        });
    </script>
</body>
</html>