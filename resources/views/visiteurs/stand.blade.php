<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stands | Eat&Drink Bénin</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.15);
            --glass-shadow: rgba(0, 0, 0, 0.4);
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
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0a0505; }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--primary-red), #801a1a);
            border-radius: 10px;
            border: 2px solid #0a0505;
        }
        ::-webkit-scrollbar-thumb:hover { background: var(--primary-red-hover); }

        .stand-wrapper {
            min-height: 100vh;
            width: 100%;
            position: relative;
            padding: 40px 20px;
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: auto;
        }

        /* 📸 Stand Slideshow Background */
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
            100% { transform: scale(1.1); }
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

        .blinking { animation: blinkTransition 1.4s ease-in-out forwards; }
        @keyframes blinkTransition {
            0% { opacity: 0; }
            25% { opacity: 0.6; }
            100% { opacity: 0; }
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.8) 100%);
            z-index: 4;
            pointer-events: none;
        }

        /* 🔱 Header */
        .page-header {
            position: relative;
            z-index: 10;
            text-align: center;
            margin-bottom: 60px;
            animation: cardEntrance 1.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }

        .logo-text {
            font-size: 2.5rem;
            font-weight: 900;
            color: white;
            letter-spacing: -2px;
            animation: logoGlow 3s ease-in-out infinite alternate;
        }

        .logo-text span { color: var(--primary-red); }

        @keyframes logoGlow {
            from { text-shadow: 0 0 10px rgba(230, 57, 70, 0.2); }
            to { text-shadow: 0 0 25px rgba(230, 57, 70, 0.8); }
        }

        .page-title {
            font-size: 3rem;
            font-weight: 900;
            color: white;
            margin-top: 10px;
            text-transform: uppercase;
            letter-spacing: -1px;
        }

        /* 🧪 Filter Navigation */
        .filter-nav {
            position: relative;
            z-index: 10;
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 50px;
            animation: physicsEntrance 1.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            animation-delay: 0.2s;
            opacity: 0;
        }

        .filter-btn {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--primary-red);
            border-color: var(--primary-red);
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.4);
            transform: translateY(-3px);
        }

        /* 🎪 Stand Grid */
        .stand-grid {
            position: relative;
            z-index: 10;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* 💎 Glass Stand Card */
        .stand-card {
            background: var(--glass-bg);
            backdrop-filter: blur(25px) saturate(180%);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            opacity: 0;
            animation: physicsEntrance 1.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }

        .stand-card:nth-child(3n+1) { animation-delay: 0.3s; }
        .stand-card:nth-child(3n+2) { animation-delay: 0.4s; }
        .stand-card:nth-child(3n+3) { animation-delay: 0.5s; }

        @keyframes physicsEntrance {
            0% { opacity: 0; transform: scale(1.1) translateY(-40px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
        }

        .stand-card:hover {
            transform: translateY(-12px) scale(1.02);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }

        /* 📸 Glowing Stand Image */
        .stand-image-box {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .stand-image {
            width: 100%;
            height: 100%;
            object-cover: cover;
            transition: transform 0.8s ease;
        }

        .stand-card:hover .stand-image {
            transform: scale(1.1);
        }

        /* ✨ Image Glow Effect */
        .stand-image-box::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(230, 57, 70, 0) 0%, rgba(230, 57, 70, 0) 100%);
            transition: all 0.5s ease;
            pointer-events: none;
        }

        .stand-card:hover .stand-image-box::after {
            background: radial-gradient(circle, rgba(230, 57, 70, 0) 40%, rgba(230, 57, 70, 0.4) 100%);
        }

        .stand-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--primary-red);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            box-shadow: 0 4px 10px rgba(230, 57, 70, 0.5);
        }

        .stand-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .stand-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 10px;
        }

        .stand-rating {
            color: #ffd166;
            font-size: 0.85rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .stand-desc {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .stand-tags {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .tag {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 0.7rem;
            padding: 4px 12px;
            border-radius: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-discover {
            margin-top: auto;
            background: var(--primary-red);
            color: white;
            text-decoration: none;
            text-align: center;
            padding: 14px;
            border-radius: 15px;
            font-weight: 700;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            animation: buttonPulse 3s ease-in-out infinite alternate;
        }

        .btn-discover:hover {
            background: var(--primary-red-hover);
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(230, 57, 70, 0.4);
        }

        @keyframes buttonPulse {
            from { transform: scale(1); }
            to { transform: scale(1.03); }
        }

        /* 📊 Navigation Dots */
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

        @keyframes cardEntrance {
            0% { opacity: 0; transform: scale(0.8) translateY(50px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
        }

        .navbar {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 1200px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .nav-link:hover { color: var(--primary-red); }

        .btn-profile {
            background: var(--primary-red);
            padding: 8px 20px;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .navbar { display: none; }
            .page-title { font-size: 2rem; }
            .stand-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="stand-wrapper">
    <!-- 📸 Background Slideshow -->
    <div class="bg-slider">
        <div class="bg-slide active" style="background-image: url('/img/stand.png');"></div>
        <div class="bg-slide" style="background-image: url('/img/stand-2.png');"></div>
        <div class="bg-slide" style="background-image: url('/img/welcome-bg.png');"></div>
    </div>
    <div class="overlay"></div>
    <div class="blink-overlay" id="blinkOverlay"></div>

    <!-- 📊 Progress Dots -->
    <div class="slider-nav">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>

    <!-- 🌊 Glass Navbar -->
    <nav class="navbar">
        <a href="{{ route('accueil') }}" class="nav-link logo-text">Eat<span>&</span>Drink</a>
        <div style="display: flex; gap: 30px; align-items: center;">
            <a href="{{ route('accueil') }}" class="nav-link">Accueil</a>
            <a href="{{ route('stand') }}" class="nav-link" style="color: var(--primary-red);">Stands</a>
            <a href="{{ route('panier') }}" class="nav-link">Panier</a>
            <a href="{{ route('evènement') }}" class="nav-link">Programme</a>
            <a href="#" class="nav-link btn-profile">Profil</a>
        </div>
    </nav>

    <main style="margin-top: 100px;">
        <header class="page-header">
            <h1 class="page-title">Nos Exposants</h1>
            <p style="color: rgba(255,255,255,0.6); font-size: 1.1rem; margin-top: 10px;">Rencontrez les artisans qui font vibrer les saveurs du Bénin</p>
        </header>

        <div class="filter-nav">
            <button class="filter-btn active">Tous</button>
            <button class="filter-btn">Dibiteries</button>
            <button class="filter-btn">Maquis</button>
            <button class="filter-btn">Grillades</button>
            <button class="filter-btn">Pâtisseries</button>
        </div>

        <div class="stand-grid">
            @foreach ($stands as $stand)
                @php
                    $types = explode(',', strtolower($stand->type_stand));
                @endphp
                <div class="stand-card">
                    <div class="stand-image-box">
                        <img src="{{ asset($stand->image) }}" alt="{{ $stand->nom_stand }}" class="stand-image">
                        <div class="stand-badge">{{ $stand->slug }}</div>
                    </div>
                    <div class="stand-content">
                        <div class="stand-title">{{ $stand->nom_stand }}</div>
                        <div class="stand-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span style="color: rgba(255,255,255,0.4); font-size: 0.75rem;">(27 avis)</span>
                        </div>
                        <p class="stand-desc">{{ $stand->description }}</p>
                        <div class="stand-tags">
                            @foreach ($types as $type)
                                <span class="tag">{{ trim($type) }}</span>
                            @endforeach
                        </div>
                        <div style="color: rgba(255,255,255,0.5); font-size: 0.8rem; margin-bottom: 20px;">
                            <i class="fas fa-map-marker-alt" style="color: var(--primary-red); margin-right: 8px;"></i>
                            {{ $stand->localisation }}
                        </div>
                        <a href="#" class="btn-discover">DÉCOUVRIR LE STAND</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <footer style="margin-top: 80px; text-align: center; position: relative; z-index: 10; padding-bottom: 40px;">
        <p style="color: rgba(255,255,255,0.4); font-size: 0.85rem;">&copy; {{ date('Y') }} Eat&Drink Bénin. Tous droits réservés.</p>
    </footer>
</div>

<script>
    // 🌪️ Background Logic
    const slides = document.querySelectorAll('.bg-slide');
    const dots = document.querySelectorAll('.dot');
    const blinkOverlay = document.getElementById('blinkOverlay');
    let currentIdx = 0;
    
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

            nextSlide.style.opacity = '1';
            nextSlide.classList.add('active');
            prevSlide.classList.remove('active');
            prevSlide.style.opacity = '0';
        }, 300);
    }

    setInterval(transitionBackground, 8000);
</script>
</body>
</html>
