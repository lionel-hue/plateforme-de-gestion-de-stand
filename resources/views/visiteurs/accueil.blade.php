<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue | Eat&Drink Bénin</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --glass-bg: rgba(255, 255, 255, 0.12);
            --glass-border: rgba(255, 255, 255, 0.2);
            --glass-shadow: rgba(0, 0, 0, 0.3);
            --primary-red: #e63946;
            --primary-red-hover: #c1121f;
        }

        body, html {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            width: 100%;
            font-family: 'Inter', sans-serif;
            background: #000;
        }

        /* 🖱️ Custom High-End Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0a0505;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--primary-red), #801a1a);
            border-radius: 10px;
            border: 2px solid #0a0505;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-red-hover);
            box-shadow: 0 0 10px var(--primary-red);
        }

        .welcome-wrapper {
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 40px 20px; /* Space for the card to breathe */
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: auto; /* Allow vertical scrolling for the whole page */
        }

        /* 📸 High-End Background Slider */
        .bg-slider {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .bg-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            z-index: 1;
            transform: scale(1);
            transition: transform 1.2s cubic-bezier(0.8, 0, 0.2, 1);
        }

        .bg-slide.active {
            opacity: 1;
            z-index: 2;
            animation: swell 15s ease-in-out infinite alternate;
        }

        @keyframes swell {
            0% { transform: scale(1); }
            100% { transform: scale(1.15); }
        }

        .slide-out-left { transform: translateX(-100%) scale(1.1) !important; opacity: 1 !important; }
        .slide-out-right { transform: translateX(100%) scale(1.1) !important; opacity: 1 !important; }
        .slide-in-left { transform: translateX(100%) scale(1.1); opacity: 1 !important; z-index: 3; }
        .slide-in-right { transform: translateX(-100%) scale(1.1); opacity: 1 !important; z-index: 3; }

        .blink-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.7) 0%, rgba(255, 230, 230, 0.3) 100%);
            backdrop-filter: blur(15px);
            z-index: 5;
            opacity: 0;
            pointer-events: none;
        }

        .blinking {
            animation: blinkTransition 1.4s ease-in-out forwards;
        }

        @keyframes blinkTransition {
            0% { opacity: 0; }
            25% { opacity: 0.25; }
            100% { opacity: 0; }
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(120, 10, 10, 0.1) 0%, rgba(0, 0, 0, 0.6) 100%);
            z-index: 4;
            pointer-events: none;
        }

        /* 💎 Main Portal Card */
        .glass-portal {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 1050px;
            background: var(--glass-bg);
            backdrop-filter: blur(30px) saturate(200%);
            -webkit-backdrop-filter: blur(30px) saturate(200%);
            border-radius: 40px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 20px 50px 0 var(--glass-shadow);
            padding: 50px 40px;
            color: white;
            text-align: center;
            overflow: hidden;
            animation: cardEntrance 1.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            margin: auto;
        }

        @keyframes cardEntrance {
            0% { opacity: 0; transform: scale(0.8) translateY(100px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
        }

        .glass-portal::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -150%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transform: rotate(45deg);
            z-index: 11;
            pointer-events: none;
            animation: glowSweep 1.8s ease-in-out forwards;
            animation-delay: 1.5s;
        }

        @keyframes glowSweep {
            0% { left: -150%; }
            100% { left: 150%; }
        }

        /* 🔱 Branded Header */
        .header-section {
            margin-bottom: 40px;
        }

        .logo-box i {
            font-size: 3rem;
            color: white;
            animation: logoGlow 3s ease-in-out infinite alternate;
        }

        .logo-text {
            font-size: 2.5rem;
            font-weight: 900;
            letter-spacing: -2px;
            margin-top: 5px;
            animation: logoGlow 3s ease-in-out infinite alternate;
        }

        .logo-text span {
            color: var(--primary-red);
        }

        @keyframes logoGlow {
            from { text-shadow: 0 0 10px rgba(230, 57, 70, 0.2); }
            to { text-shadow: 0 0 25px rgba(230, 57, 70, 0.8), 0 0 15px rgba(255, 255, 255, 0.4); }
        }

        .welcome-title {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-top: 10px;
        }

        /* 🚀 Portal Options Grid */
        .portal-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .portal-item {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 35px 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            opacity: 0;
            animation: shuffleIn 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        @keyframes shuffleIn {
            0% { opacity: 0; transform: translateX(-100px) scale(0.9); }
            100% { opacity: 1; transform: translateX(0) scale(1); }
        }

        .portal-item:nth-child(1) { animation-delay: 1.2s; }
        .portal-item:nth-child(2) { animation-delay: 1.4s; }
        .portal-item:nth-child(3) { animation-delay: 1.6s; }

        .portal-item:hover {
            background: rgba(255, 255, 255, 0.12);
            transform: translateY(-8px);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        }

        .portal-item i {
            font-size: 2rem;
            color: var(--primary-red);
            margin-bottom: 15px;
        }

        .portal-item h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .portal-item p {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 20px;
            line-height: 1.4;
            min-height: 4.2em;
        }

        .btn-portal {
            display: block;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 8px;
        }

        .btn-primary {
            background: var(--primary-red);
            color: white;
            box-shadow: 0 4px 15px rgba(230, 57, 70, 0.4);
            animation: buttonPulse 3s ease-in-out infinite alternate;
        }

        .btn-outline {
            background: rgba(255, 255, 255, 0.05);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .btn-primary:hover {
            background: var(--primary-red-hover);
            transform: scale(1.05);
        }

        @keyframes buttonPulse {
            from { transform: scale(1); }
            to { transform: scale(1.04); }
        }

        .btn-primary::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -100%;
            width: 100%;
            height: 200%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.3), transparent);
            transform: rotate(35deg);
            animation: buttonShimmer 4s infinite;
        }

        @keyframes buttonShimmer {
            0% { left: -100%; }
            20% { left: 100%; }
            100% { left: 100%; }
        }

        /* 📊 Vertical Progress Dots */
        .slider-nav {
            position: fixed;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 20px;
            z-index: 100;
            padding: 20px 12px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .dot.active {
            background: var(--primary-red);
            height: 24px;
            border-radius: 10px;
            box-shadow: 0 0 15px var(--primary-red);
        }

        .footer-note {
            margin-top: 40px;
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.5);
        }

        @media (max-width: 1000px) {
            .portal-grid { grid-template-columns: 1fr; }
            .glass-portal { padding: 40px 20px; max-width: 450px; }
            .slider-nav { right: 15px; }
        }
    </style>
</head>
<body>

<div class="welcome-wrapper">
    <!-- 📸 Background Slideshow -->
    <div class="bg-slider">
        <div class="bg-slide active" style="background-image: url('/img/welcome-bg.png');"></div>
        <div class="bg-slide" style="background-image: url('/img/welcome-bg-2.png');"></div>
        <div class="bg-slide" style="background-image: url('/img/welcome-bg-3.png');"></div>
    </div>
    <div class="overlay"></div>
    <div class="blink-overlay" id="blinkOverlay"></div>

    <!-- 📊 Progress Dots -->
    <div class="slider-nav">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <!-- 💎 Portal Card -->
    <div class="glass-portal">
        <div class="header-section">
            <div class="logo-box">
                <i class="fa-solid fa-utensils"></i>
            </div>
            <div class="logo-text">Eat<span>&</span>Drink</div>
            <div class="welcome-title">Plateforme de Gestion de Stands</div>
        </div>

        <div class="portal-grid">
            <!-- Visiteur -->
            <div class="portal-item">
                <i class="fa-solid fa-eye"></i>
                <h3>Visiteur</h3>
                <p>Découvrez les meilleurs stands et commandez vos produits préférés en quelques clics.</p>
                <div>
                    <a href="{{ route('stand') }}" class="btn-portal btn-primary">DÉCOUVRIR LES STANDS</a>
                    <a href="{{ route('visiteurs.login') }}" class="btn-portal btn-outline">SE CONNECTER</a>
                </div>
            </div>

            <!-- Entrepreneur -->
            <div class="portal-item">
                <i class="fa-solid fa-shop"></i>
                <h3>Entrepreneur</h3>
                <p>Rejoignez notre réseau, gérez votre stand et boostez votre visibilité digitale.</p>
                <div>
                    <a href="{{ route('entrepreneur.register') }}" class="btn-portal btn-primary">DEVENIR PARTENAIRE</a>
                    <a href="{{ route('entrepreneur.login') }}" class="btn-portal btn-outline">MON ESPACE</a>
                </div>
            </div>

            <!-- Admin -->
            <div class="portal-item">
                <i class="fa-solid fa-user-shield"></i>
                <h3>Administrateur</h3>
                <p>Supervision complète de la plateforme et gestion des demandes de stands.</p>
                <div>
                    <a href="{{ route('admin.login') }}" class="btn-portal btn-primary">DASHBOARD ADMIN</a>
                </div>
            </div>
        </div>

        <div class="footer-note">
            &copy; {{ date('Y') }} Eat&Drink Bénin. Tous droits réservés.
        </div>
    </div>
</div>

<script>
    // 🌪️ Background Logic
    const slides = document.querySelectorAll('.bg-slide');
    const dots = document.querySelectorAll('.dot');
    const blinkOverlay = document.getElementById('blinkOverlay');
    let currentIdx = 0;
    
    const transitions = [
        { exit: 'slide-out-left', entry: 'slide-in-left' },
        { exit: 'slide-out-right', entry: 'slide-in-right' }
    ];

    function transitionBackground() {
        blinkOverlay.classList.remove('blinking');
        void blinkOverlay.offsetWidth;
        blinkOverlay.classList.add('blinking');

        setTimeout(() => {
            const prevSlide = slides[currentIdx];
            currentIdx = (currentIdx + 1) % slides.length;
            const nextSlide = slides[currentIdx];

            dots.forEach(d => d.classList.remove('active'));
            dots[currentIdx].classList.add('active');

            const flow = transitions[Math.floor(Math.random() * transitions.length)];
            
            nextSlide.className = `bg-slide ${flow.entry}`;
            void nextSlide.offsetWidth;
            prevSlide.classList.add(flow.exit);
            nextSlide.style.transform = 'translate(0, 0) scale(1)';
            nextSlide.style.opacity = '1';

            setTimeout(() => {
                slides.forEach(s => {
                    s.className = 'bg-slide';
                    s.style.transform = '';
                    s.style.opacity = '';
                });
                nextSlide.classList.add('active');
            }, 1200);
        }, 300);
    }

    setInterval(transitionBackground, 8000);
</script>
</body>
</html>
