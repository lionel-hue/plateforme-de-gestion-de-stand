<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat&Drink - Festival Culinaire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #E63946;
            --secondary-color: #457B9D;
            --accent-color: #A8DADC;
            --dark-color: #1D3557;
            --light-color: #F1FAEE;
            --gold-color: #FFD166; 
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.7;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        .hero-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center;
            background-size: cover;
            z-index: -1;
            opacity: 0.4;
        }
        
        .hero-bg::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(241,250,238,0.3) 0%, rgba(29,53,87,0.6) 100%);
        }
        
        .site-header {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
            backdrop-filter: blur(5px);
        }
        
        .nav-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .logo:hover {
            transform: scale(1.05);
        }
        
        .logo span {
            color: var(--gold-color);
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .nav-links a {
            color: var(--dark-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            white-space: nowrap;
        }
        
        .nav-links a:hover {
            color: var(--primary-color);
            background-color: rgba(230, 57, 70, 0.1);
            transform: translateY(-2px);
        }
        
        /* Boutons spéciaux pour les inscriptions */
        .nav-links a[href*="register"] {
            background-color: var(--secondary-color);
            color: white;
            border-radius: 25px;
        }
        
        .nav-links a[href*="register"]:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .nav-links a[href*="entrepreneur"] {
            background-color: var(--gold-color);
            color: var(--dark-color);
        }
        
        .nav-links a[href*="entrepreneur"]:hover {
            background-color: #e6bb3d;
            color: var(--dark-color);
        }
        
        /* Menu hamburger pour mobile */
        .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 0.5rem;
        }
        
        .menu-toggle span {
            width: 25px;
            height: 3px;
            background-color: var(--dark-color);
            margin: 3px 0;
            transition: 0.3s;
        }
        
        .site-content {
            flex: 1;
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            position: relative;
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
            margin-top: 3rem;
            margin-bottom: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .accueil-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .accueil-container h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            color: var(--dark-color);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .logo-text {
            font-family: 'Playfair Display', serif;
            color: var(--primary-color);
            font-weight: bold;
            display: inline-block;
        }
        
        .slogan {
            font-size: 1.4rem;
            color: var(--dark-color);
            margin-bottom: 3rem;
            line-height: 1.7;
        }
        
        .btn-visiter {
            display: inline-block;
            padding: 15px 40px;
            background-color: var(--primary-color);
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.4s ease;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .btn-visiter:hover {
            background-color: #c1121f;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(230, 57, 70, 0.4);
        }
        
        .btn-visiter::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }
        
        .btn-visiter:hover::before {
            left: 100%;
        }
        
        .site-footer {
            background-color: var(--dark-color);
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: auto;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-bar {
                position: relative;
            }
            
            .menu-toggle {
                display: flex;
            }
            
            .nav-links {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: rgba(255, 255, 255, 0.98);
                flex-direction: column;
                gap: 0.5rem;
                padding: 2rem;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                border-radius: 0 0 15px 15px;
                display: none;
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .nav-links a {
                font-size: 1.1rem;
                padding: 0.8rem 1.5rem;
                text-align: center;
                border-radius: 25px;
            }
            
            .accueil-container h1 {
                font-size: 2.5rem;
            }
            
            .slogan {
                font-size: 1.2rem;
            }
            
            .site-content {
                padding: 3rem 1.5rem;
                margin: 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .nav-bar {
                padding: 0 1rem;
            }
            
            .logo {
                font-size: 1.5rem;
            }
            
            .nav-links a {
                font-size: 1rem;
                padding: 0.6rem 1rem;
            }
            
            .accueil-container h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="hero-bg"></div>

    <header class="site-header">
        <nav class="nav-bar">
            <a href="{{ route('accueil') }}" class="logo">Eat<span>&</span>Drink</a>
            
            <div class="menu-toggle" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav-links row " id="navLinks">
                <div class="nav-links" id="navLinks">
                    <a href="{{ route('evènement') }}">Programme</a>
                    <a href="{{ route('stand') }}">Voir les stands</a>
                    <a href="{{ route('login') }}">Se connecter</a>
                    <a href="{{ route('visiteur.register') }}">S'inscrire</a>
                    <a href="{{ route('entrepreneur.register') }}">Espace Entrepreneur</a>
                    <!--<a href="#"></a>-->
            </div>
            </div>
        </nav>
    </header>

    <main class="site-content">
        <div class="accueil-container">
            <h1>Bienvenue au <span class="logo-text">Festival Eat<span>&</span>Drink</span></h1>
            <p class="slogan">
                L'événement culinaire incontournable qui célèbre les saveurs du monde.<br>
                Rencontrez les artisans passionnés, découvrez des créations uniques et savourez l'exceptionnel.
            </p>
        
            <a href="{{ route('stand') }}" class="btn-visiter">Découvrir les exposants</a>
        </div>
    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <p>&copy; 2025 Festival Culinaire Eat&Drink. Tous droits réservés.</p>
            <p>Contact : contact@eatdrink-festival.com | Tel : +229 01 68 81 42 94</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navLinks').classList.remove('active');
            });
        });

        document.addEventListener('click', function(event) {
            const navBar = document.querySelector('.nav-bar');
            const navLinks = document.getElementById('navLinks');
            
            if (!navBar.contains(event.target)) {
                navLinks.classList.remove('active');
            }
        });
    </script>
</body>
</html>