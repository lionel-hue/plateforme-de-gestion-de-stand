<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat&Drink - Accueil</title>
    <style>
        :root {
            --primary-color: #FF6B6B; 
            --secondary-color: #4ECDC4; 
            --dark-color: #292F36; 
            --light-color: #F7FFF7; 
            --accent-color: #FFE66D; 
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .hero-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: linear-gradient(to bottom, rgba(255,255,255,0.2), rgba(41,47,54,0.6)); ;
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 0.8;
        }
        
        .hero-bg::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(255,255,255,0.1), rgba(41,47,54,0.7));
        }
        
        .site-header {
            background-color: rgba(255, 107, 107, 0.9);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
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
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .logo span {
            color: var(--accent-color);
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
        }
        
        .nav-bar a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .nav-bar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        .site-content {
            flex: 1;
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            position: relative;
            background-color: rgba(247, 255, 247, 0.9);
            border-radius: 10px;
            margin-top: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .accueil-container {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }
        
        .accueil-container h1 {
            font-size: 3rem;
            color: var(--dark-color);
            margin-bottom: 1.5rem;
        }
        
        .accueil-container .logo {
            color: var(--primary-color);
            font-weight: bold;
        }
        
        .slogan {
            font-size: 1.3rem;
            color: var(--dark-color);
            margin-bottom: 2.5rem;
            line-height: 1.7;
        }
        
        .btn-visiter {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary-color);
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            box-shadow: 0 4px 10px rgba(255, 107, 107, 0.3);
        }
        
        .btn-visiter:hover {
            background-color: #e05555;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(255, 107, 107, 0.4);
        }
        
        .site-footer {
            background-color: rgba(41, 47, 54, 0.9);
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: auto;
        }
        
        @media (max-width: 768px) {
            .nav-bar {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            
            .nav-links {
                flex-direction: column;
                gap: 0.5rem;
                width: 100%;
            }
            
            .nav-bar a {
                display: block;
                text-align: center;
            }
            
            .accueil-container h1 {
                font-size: 2.2rem;
            }
            
            .slogan {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="hero-bg"></div>
 
    <header class="site-header">
        <nav class="nav-bar">
            <a href="#" class="logo"><h1>Eat<span>&</span>Drink</h1></a>
            <div class="nav-links">
                <a href="{{ route('accueil') }}">Accueil</a>
                <a href="#">Événements/Programme</a>
                <a href="#">Connexion</a>
            </div>
        </nav>
    </header>

    <main class="site-content">
        <div class="accueil-container">
            <h1>Bienvenue à <span class="logo"><h2>Eat<span>&</span>Drink</h2></span></h1>
            <p class="slogan">
                L'événement culinaire qui rassemble les meilleurs talents gastronomiques du pays.<br>
                Explorez des saveurs uniques, découvrez les exposants passionnés et régalez-vous !
            </p>
        
            <a href="#" class="btn-visiter">Visiter nos stands</a>
        </div>
    </main>

    <footer class="site-footer">
        <p>&copy; 2025 Eat&Drink. Tous droits réservés.</p>
    </footer>
</body>
</html>