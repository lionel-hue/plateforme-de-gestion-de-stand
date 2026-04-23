<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier | Eat&Drink Bénin</title>
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
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0a0505; }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, var(--primary-red), #801a1a);
            border-radius: 10px;
            border: 2px solid #0a0505;
        }
        ::-webkit-scrollbar-thumb:hover { background: var(--primary-red-hover); }

        .panier-wrapper {
            min-height: 100vh;
            width: 100%;
            position: relative;
            padding: 40px 20px;
            padding-top: 120px;
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: auto;
        }

        /* 📸 Background Slideshow */
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

        /* 🌊 Glass Navbar */
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

        .logo-text {
            font-size: 1.8rem;
            font-weight: 900;
            color: white;
            text-decoration: none;
            letter-spacing: -1px;
            animation: logoGlow 3s ease-in-out infinite alternate;
        }

        .logo-text span { color: var(--primary-red); }

        @keyframes logoGlow {
            from { text-shadow: 0 0 10px rgba(230, 57, 70, 0.2); }
            to { text-shadow: 0 0 25px rgba(230, 57, 70, 0.8), 0 0 10px rgba(255, 255, 255, 0.4); }
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .nav-link:hover, .nav-link.active { color: white; }

        /* 💎 Glass Panier Card */
        .glass-card {
            position: relative;
            z-index: 10;
            background: var(--glass-bg);
            backdrop-filter: blur(30px) saturate(200%);
            border: 1px solid var(--glass-border);
            border-radius: 40px;
            box-shadow: 0 20px 50px var(--glass-shadow);
            max-width: 900px;
            margin: 0 auto;
            padding: 50px;
            color: white;
            animation: cardEntrance 1.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }

        @keyframes cardEntrance {
            0% { opacity: 0; transform: scale(0.9) translateY(50px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
        }

        .empty-state {
            text-align: center;
            padding: 40px 0;
        }

        .empty-icon {
            font-size: 5rem;
            color: rgba(255, 255, 255, 0.2);
            margin-bottom: 20px;
            animation: iconFloat 4s ease-in-out infinite alternate;
        }

        @keyframes iconFloat {
            from { transform: translateY(0); opacity: 0.2; }
            to { transform: translateY(-20px); opacity: 0.5; }
        }

        .btn-action {
            display: inline-block;
            background: var(--primary-red);
            color: white;
            padding: 15px 40px;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 700;
            margin-top: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            animation: buttonPulse 3s ease-in-out infinite alternate;
        }

        .btn-action:hover {
            background: var(--primary-red-hover);
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(230, 57, 70, 0.5);
        }

        @keyframes buttonPulse {
            from { transform: scale(1); box-shadow: 0 4px 15px rgba(230, 57, 70, 0.3); }
            to { transform: scale(1.04); box-shadow: 0 10px 20px rgba(230, 57, 70, 0.6); }
        }

        .btn-action::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -100%;
            width: 100%;
            height: 200%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.4), transparent);
            transform: rotate(35deg);
            animation: buttonShimmer 4s infinite;
        }

        @keyframes buttonShimmer {
            0% { left: -100%; }
            20% { left: 100%; }
            100% { left: 100%; }
        }

        /* 🥘 Recommendations Grid */
        .rec-section {
            margin-top: 60px;
        }

        .rec-title {
            font-size: 1.5rem;
            font-weight: 800;
            margin-bottom: 30px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .rec-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .rec-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            flex-direction: column;
            opacity: 0;
            animation: physicsEntrance 1.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }

        .rec-card:nth-child(1) { animation-delay: 0.2s; }
        .rec-card:nth-child(2) { animation-delay: 0.4s; }
        .rec-card:nth-child(3) { animation-delay: 0.6s; }

        @keyframes physicsEntrance {
            0% { opacity: 0; transform: scale(1.1) translateY(-30px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
        }

        .rec-card:hover {
            transform: translateY(-10px) scale(1.05);
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .rec-img-box {
            position: relative;
            height: 150px;
            overflow: hidden;
        }

        .rec-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            animation: imgGlowPulse 4s infinite alternate;
        }

        @keyframes imgGlowPulse {
            0% { filter: drop-shadow(0 0 5px rgba(230, 57, 70, 0.1)); }
            100% { filter: drop-shadow(0 0 20px rgba(230, 57, 70, 0.4)); }
        }

        .rec-card:hover .rec-img {
            transform: scale(1.1);
        }

        .rec-content {
            padding: 20px;
            flex-grow: 1;
        }

        .rec-name {
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .rec-price {
            color: var(--primary-red);
            font-weight: 800;
            font-size: 0.9rem;
        }

        .btn-add {
            background: var(--primary-red);
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(230, 57, 70, 0.4);
            animation: buttonPulse 3s ease-in-out infinite alternate;
        }

        .btn-add::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -100%;
            width: 100%;
            height: 200%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.4), transparent);
            transform: rotate(35deg);
            animation: buttonShimmer 4s infinite;
        }

        .btn-add:hover {
            transform: scale(1.15);
            background: var(--primary-red-hover);
            box-shadow: 0 8px 20px rgba(230, 57, 70, 0.7);
        }

        /* 🎭 Scroll Shuffle Animation */
        .rec-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            flex-direction: column;
            opacity: 0;
            transform: translateX(-100px) rotate(-5deg);
        }

        .rec-card.revealed {
            opacity: 1;
            transform: translateX(0) rotate(0deg);
        }

        .rec-card:nth-child(1) { transition-delay: 0.1s; }
        .rec-card:nth-child(2) { transition-delay: 0.3s; }
        .rec-card:nth-child(3) { transition-delay: 0.5s; }

        .rec-card:hover {
            transform: translateY(-10px) scale(1.05);
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.3);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .rec-img-box {
            position: relative;
            height: 150px;
            overflow: hidden;
        }