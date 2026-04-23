<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programme | Eat&Drink Bénin</title>
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
            color: white;
            overflow-x: hidden;
        }

        /* 🖱️ Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0a0505; }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--primary-red), #801a1a);
            border-radius: 10px;
        }

        .event-wrapper {
            position: relative;
            z-index: 10;
            padding-top: 120px;
            padding-bottom: 80px;
            min-height: 100vh;
            max-width: 1200px;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        /* 📸 Background Slider */
        .bg-slider {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            z-index: 0;
        }
        .bg-slide {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background-size: cover; background-position: center;
            opacity: 0; transition: opacity 1.2s ease-in-out;
        }
        .bg-slide.active { opacity: 1; animation: swell 15s infinite alternate; }
        @keyframes swell { from { transform: scale(1); } to { transform: scale(1.1); } }
        
        .overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(circle, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.8) 100%);
            z-index: 1;
        }

        .blink-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: white; z-index: 5; opacity: 0; pointer-events: none;
        }
        .blinking { animation: blinkTransition 1.4s ease-in-out forwards; }
        @keyframes blinkTransition { 0% { opacity: 0; } 25% { opacity: 0.25; } 100% { opacity: 0; } }

        /* 🌊 Glass Navbar */
        .navbar {
            position: fixed; top: 20px; left: 50%; transform: translateX(-50%);
            width: 90%; max-width: 1100px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px 40px;
            display: flex; justify-content: space-between; align-items: center;
            z-index: 1000;
        }
        .logo-text { font-size: 1.8rem; font-weight: 900; color: white; text-decoration: none; }
        .logo-text span { color: var(--primary-red); }
        .nav-link { color: rgba(255, 255, 255, 0.7); text-decoration: none; font-weight: 600; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { color: white; }

        /* 📅 Day Filters */
        .filter-container {
            display: flex; justify-content: center; gap: 15px; margin-bottom: 50px; flex-wrap: wrap;
        }
        .filter-btn {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white; padding: 12px 25px; border-radius: 30px;
            cursor: pointer; font-weight: 700; transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            animation: buttonPulse 4s infinite alternate;
        }
        .filter-btn:hover, .filter-btn.active {
            background: var(--primary-red); transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(230, 57, 70, 0.5);
        }
        @keyframes buttonPulse { from { box-shadow: 0 0 5px rgba(230, 57, 70, 0.2); } to { box-shadow: 0 0 15px rgba(230, 57, 70, 0.5); } }

        /* 📋 Programme Grid */
        .day-section { display: none; animation: shuffleIn 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards; }
        @keyframes shuffleIn { 0% { opacity: 0; transform: translateX(-50px); } 100% { opacity: 1; transform: translateX(0); } }

        .event-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px; margin-top: 30px; }
        
        .event-card {
            background: var(--glass-bg);
            backdrop-filter: blur(25px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            padding: 30px;
            position: relative;
            overflow: hidden;
            transition: 0.4s;
        }
        .event-card:hover { transform: translateY(-10px) scale(1.02); background: rgba(255, 255, 255, 0.15); border-color: rgba(255, 255, 255, 0.3); }

        .event-card::after {
            content: ""; position: absolute; top: -50%; left: -150%; width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg); animation: glowSweep 4s infinite;
        }
        @keyframes glowSweep { 0% { left: -150%; } 20% { left: 150%; } 100% { left: 150%; } }

        .event-time { font-size: 0.85rem; font-weight: 800; color: var(--primary-red); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; display: block; }
        .event-title { font-size: 1.5rem; font-weight: 900; margin-bottom: 10px; }
        .event-desc { color: rgba(255, 255, 255, 0.6); font-size: 0.95rem; line-height: 1.6; }

        .event-badge {
            position: absolute; top: 20px; right: 20px; background: rgba(255, 255, 255, 0.1);
            padding: 5px 15px; border-radius: 10px; font-size: 0.7rem; font-weight: 800; text-transform: uppercase;
        }

        /* 🎟️ CTA */
        .cta-box {
            margin-top: 80px; text-align: center; background: rgba(230, 57, 70, 0.1);
            backdrop-filter: blur(20px); border: 1px solid rgba(230, 57, 70, 0.3);
            border-radius: 40px; padding: 60px 40px;
        }
        .btn-ticket {
            display: inline-block; background: var(--primary-red); color: white;
            padding: 18px 50px; border-radius: 15px; font-weight: 900; text-decoration: none;
            text-transform: uppercase; letter-spacing: 2px; transition: 0.3s;
            position: relative; overflow: hidden;
            animation: buttonPulse 3s infinite alternate;
        }
        .btn-ticket:hover { transform: scale(1.1); box-shadow: 0 15px 35px rgba(230, 57, 70, 0.6); }

        /* 📊 Dots */
        .slider-nav {
            position: fixed; right: 40px; top: 50%; transform: translateY(-50%);
            display: flex; flex-direction: column; gap: 20px; z-index: 100;
        }
        .dot { width: 8px; height: 8px; border-radius: 50%; background: rgba(255, 255, 255, 0.2); transition: 0.6s; }
        .dot.active { background: var(--primary-red); height: 24px; border-radius: 10px; box-shadow: 0 0 15px var(--primary-red); }

        @media (max-width: 800px) {
            .event-grid { grid-template-columns: 1fr; }
            .navbar { display: none; }
            .filter-btn { padding: 10px 20px; font-size: 0.8rem; }
        }
    </style>
</head>
<body>

<div class="bg-slider">
    <div class="bg-slide active" style="background-image: url('/img/stand.png');"></div>
    <div class="bg-slide" style="background-image: url('/img/stand-2.png');"></div>
    <div class="bg-slide" style="background-image: url('/img/stand-3.png');"></div>
</div>
<div class="overlay"></div>
<div class="blink-overlay" id="blinkOverlay"></div>

<nav class="navbar">
    <a href="{{ route('accueil') }}" class="logo-text">Eat<span>&</span>Drink</a>
    <div style="display: flex; gap: 30px; align-items: center;">
        <a href="{{ route('accueil') }}" class="nav-link">Accueil</a>
        <a href="{{ route('stand') }}" class="nav-link">Stands</a>
        <a href="{{ route('evènement') }}" class="nav-link active" style="color: var(--primary-red);">Programme</a>
        <a href="{{ route('panier') }}" class="nav-link">Panier</a>
        <a href="#" class="nav-link" style="background: var(--primary-red); padding: 8px 15px; border-radius: 10px;">Profil</a>
    </div>
</nav>

<div class="event-wrapper">
    <header style="text-align: center; margin-bottom: 60px;">
        <h1 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 10px; text-transform: uppercase; letter-spacing: -2px;">Programme du Festival</h1>
        <p style="color: rgba(255,255,255,0.6); font-size: 1.2rem;">Dégustations et animations non-stop de 16h à l'aube</p>
    </header>

    <div class="filter-container">
        <button class="filter-btn active" data-day="mercredi">MERCREDI</button>
        <button class="filter-btn" data-day="jeudi">JEUDI</button>
        <button class="filter-btn" data-day="vendredi">VENDREDI</button>
        <button class="filter-btn" data-day="samedi">SAMEDI</button>
        <button class="filter-btn" data-day="dimanche">DIMANCHE</button>
    </div>

    <!-- Mercredi -->
    <div class="day-section" id="mercredi" style="display: block;">
        <div class="event-grid">
            <div class="event-card" style="grid-column: span 2; background: rgba(255,255,255,0.1);">
                <span class="event-badge">Ouverture</span>
                <span class="event-time">16h00 - Aube</span>
                <h3 class="event-title">Dégustation Libre & Village Gastronomique</h3>
                <p class="event-desc">Lancement officiel du festival. Accès illimité à plus de 50 stands de spécialités béninoises et internationales. Ambiance musicale douce pour débuter l'aventure.</p>
            </div>
            <div class="event-card">
                <span class="event-time">18h00 - 20h00</span>
                <h3 class="event-title">Ambiance Acoustique</h3>
                <p class="event-desc">Performance live d'artistes locaux sur la scène principale pendant votre dîner.</p>
            </div>
            <div class="event-card">
                <span class="event-time">22h00 - Aube</span>
                <h3 class="event-title">Night Warm-up DJ</h3>
                <p class="event-desc">Première soirée clubbing en plein air pour les lève-tard.</p>
            </div>
        </div>
    </div>

    <!-- Jeudi -->
    <div class="day-section" id="jeudi">
        <div class="event-grid">
            <div class="event-card" style="grid-column: span 2; background: linear-gradient(135deg, rgba(230,57,70,0.2), rgba(0,0,0,0.2));">
                <span class="event-badge">Spécial</span>
                <span class="event-time">20h00 - 22h00</span>
                <h3 class="event-title">Nuit des Saveurs Épicées</h3>
                <p class="event-desc">Un parcours gustatif dédié aux amateurs de sensations fortes. Défis pimentés et découvertes culinaires intenses.</p>
            </div>
            <div class="event-card">
                <span class="event-time">23h00 - Aube</span>
                <h3 class="event-title">Nuit Blanche DJ Set</h3>
                <p class="event-desc">Immersion totale dans les sons afro-beat et urbains jusqu'au petit matin.</p>
            </div>
        </div>
    </div>

    <div class="cta-box">
        <h2 style="font-size: 2.5rem; font-weight: 900; margin-bottom: 20px;">Ne manquez aucun moment !</h2>
        <p style="color: rgba(255,255,255,0.7); margin-bottom: 40px; font-size: 1.1rem;">Accès illimité à tous les stands et toutes les soirées avec notre pass festival.</p>
        <a href="#" class="btn-ticket">ACHETER MON PASS DÈS MAINTENANT</a>
    </div>

</div>

<div class="slider-nav">
    <div class="dot active"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>

<script>
    // 🌪️ Bg Slider
    const slides = document.querySelectorAll('.bg-slide');
    const dots = document.querySelectorAll('.dot');
    const blink = document.getElementById('blinkOverlay');
    let currentIdx = 0;

    function nextSlide() {
        blink.classList.add('blinking');
        setTimeout(() => {
            slides[currentIdx].classList.remove('active');
            dots[currentIdx].classList.remove('active');
            currentIdx = (currentIdx + 1) % slides.length;
            slides[currentIdx].classList.add('active');
            dots[currentIdx].classList.add('active');
            setTimeout(() => blink.classList.remove('blinking'), 1000);
        }, 300);
    }
    setInterval(nextSlide, 8000);

    // 📅 Filter Logic
    const filters = document.querySelectorAll('.filter-btn');
    const sections = document.querySelectorAll('.day-section');

    filters.forEach(btn => {
        btn.addEventListener('click', () => {
            filters.forEach(f => f.classList.remove('active'));
            btn.classList.add('active');
            
            const target = btn.getAttribute('data-day');
            sections.forEach(sec => {
                sec.style.display = 'none';
                if(sec.id === target) {
                    sec.style.display = 'block';
                }
            });
        });
    });
</script>

</body>
</html>
