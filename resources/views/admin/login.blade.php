@extends('components.aut-layout')

@section('title', 'Authentification Admin | Eat&Drink')

@section('content')
<style>
    :root {
        --glass-bg: rgba(255, 255, 255, 0.15);
        --glass-border: rgba(255, 255, 255, 0.25);
        --glass-shadow: rgba(0, 0, 0, 0.2);
        --primary-red: #e63946;
        --primary-red-hover: #c1121f;
    }

    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
        font-family: 'Inter', 'Segoe UI', sans-serif;
    }

    .login-wrapper {
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        background: #000;
    }

    /* 📸 Professional Parallel Slider */
    .bg-slider {
        position: absolute;
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
        transition: transform 1.5s cubic-bezier(0.8, 0, 0.2, 1), opacity 0.5s ease;
    }

    .bg-slide.active {
        opacity: 1;
        z-index: 2;
        animation: swell 12s ease-in-out infinite alternate;
    }

    @keyframes swell {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }

    /* 🌪️ Transition Classes */
    .slide-out-left { transform: translateX(-100%) scale(1.1) !important; opacity: 1 !important; }
    .slide-out-right { transform: translateX(100%) scale(1.1) !important; opacity: 1 !important; }
    .slide-out-top { transform: translateY(-100%) scale(1.1) !important; opacity: 1 !important; }
    .slide-out-bottom { transform: translateY(100%) scale(1.1) !important; opacity: 1 !important; }

    .slide-in-left { transform: translateX(100%) scale(1.1); opacity: 1 !important; z-index: 3; }
    .slide-in-right { transform: translateX(-100%) scale(1.1); opacity: 1 !important; z-index: 3; }
    .slide-in-top { transform: translateY(100%) scale(1.1); opacity: 1 !important; z-index: 3; }
    .slide-in-bottom { transform: translateY(-100%) scale(1.1); opacity: 1 !important; z-index: 3; }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
        z-index: 4;
        pointer-events: none;
    }

    /* 💎 Glass Card with Entrance Animations */
    .glass-card {
        position: relative;
        z-index: 10;
        width: 100%;
        max-width: 440px;
        background: var(--glass-bg);
        backdrop-filter: blur(25px) saturate(200%);
        -webkit-backdrop-filter: blur(25px) saturate(200%);
        border-radius: 35px;
        border: 1px solid var(--glass-border);
        box-shadow: 0 12px 40px 0 var(--glass-shadow);
        padding: 45px;
        color: white;
        overflow: hidden;
        animation: cardEntrance 1.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }

    @keyframes cardEntrance {
        0% { opacity: 0; transform: scale(0.7) translateY(100px); }
        100% { opacity: 1; transform: scale(1) translateY(0); }
    }

    /* ✨ Overall Card Glow Sweep (One-time) */
    .glass-card::after {
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
        animation: glowSweep 1.5s ease-in-out forwards;
        animation-delay: 1.5s;
    }

    @keyframes glowSweep {
        0% { left: -150%; }
        100% { left: 150%; }
    }

    /* 🔱 Logo Continuous Glow */
    .logo-container {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .logo-container i, .logo-text {
        animation: logoGlow 3s ease-in-out infinite alternate;
    }

    @keyframes logoGlow {
        from { text-shadow: 0 0 10px rgba(230, 57, 70, 0.3); }
        to { text-shadow: 0 0 25px rgba(230, 57, 70, 0.9), 0 0 10px rgba(255, 255, 255, 0.5); }
    }

    /* ⚛️ Physics Reaction for Inputs */
    .form-group {
        opacity: 0;
        animation: physicsEntrance 1.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }

    .form-group:nth-child(1) { animation-delay: 0.1s; }
    .form-group:nth-child(2) { animation-delay: 0.2s; }
    .btn-submit { animation-delay: 0.3s; }

    @keyframes physicsEntrance {
        0% { opacity: 0; transform: scale(1.1) translateY(-20px); } /* Inverse reaction (Opposite direction) */
        100% { opacity: 1; transform: scale(1) translateY(0); }
    }

    .logo-container i {
        font-size: 3rem;
        color: white;
        margin-bottom: 10px;
    }

    .logo-text {
        font-size: 2.2rem;
        font-weight: 900;
        letter-spacing: -1px;
    }

    .logo-text span {
        color: var(--primary-red);
    }

    .subtitle {
        font-size: 0.95rem;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 8px;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 0.85rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.9);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .input-wrapper {
        position: relative;
    }

    .input-wrapper i.fa-envelope, 
    .input-wrapper i.fa-lock {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, 0.4);
        font-size: 1.1rem;
        pointer-events: none;
    }

    .glass-input {
        width: 100%;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 18px 65px 18px 50px;
        color: white;
        font-size: 1.05rem;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-sizing: border-box;
    }

    .glass-input:focus {
        outline: none;
        background: rgba(255, 255, 255, 0.1);
        border-color: var(--primary-red);
        box-shadow: 0 0 20px rgba(230, 57, 70, 0.2);
    }

    .btn-submit {
        width: 100%;
        background: var(--primary-red);
        color: white;
        border: none;
        padding: 16px;
        border-radius: 12px;
        font-size: 1.1rem;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        margin-top: 10px;
        box-shadow: 0 4px 15px rgba(230, 57, 70, 0.4);
        
        /* Continuous Pulse Animation */
        animation: physicsEntrance 1.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards,
                   buttonPulse 3s ease-in-out infinite alternate;
        animation-delay: 0.3s, 1.6s; /* Starts pulse after entrance completes */
    }

    @keyframes buttonPulse {
        from { transform: scale(1); box-shadow: 0 4px 15px rgba(230, 57, 70, 0.4); }
        to { transform: scale(1.03); box-shadow: 0 8px 25px rgba(230, 57, 70, 0.6); }
    }

    .btn-submit:hover {
        background: var(--primary-red-hover);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(230, 57, 70, 0.6);
    }

    #togglePassword {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        color: rgba(255, 255, 255, 0.4);
        cursor: pointer;
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10;
    }

    #togglePassword:hover {
        background: rgba(255, 255, 255, 0.15);
        color: white;
        border-color: rgba(255, 255, 255, 0.3);
    }

    .footer-text {
        text-align: center;
        margin-top: 30px;
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.6);
    }

    .footer-text a {
        color: var(--primary-red);
        text-decoration: none;
        font-weight: 600;
    }
</style>

<div class="login-wrapper">
    <div class="bg-slider" id="bgSlider">
        <div class="bg-slide active" style="background-image: url('/img/admin-login-bg.png');"></div>
        <div class="bg-slide" style="background-image: url('/img/admin-login-bg-2.png');"></div>
        <div class="bg-slide" style="background-image: url('/img/admin-login-bg-3.png');"></div>
    </div>
    <div class="overlay"></div>

    <div class="glass-card">
        <div class="logo-container">
            <i class="fa-solid fa-utensils"></i>
            <div class="logo-text">Eat<span>&</span>Drink</div>
            <p class="subtitle">Espace Administration</p>
        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Identifiant</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" id="email" class="glass-input" 
                           placeholder="admin@eatdrink.bj" value="{{ old('email') }}" required autofocus>
                </div>
                @error('email')
                    <span class="error-msg" style="color: #ffb3b3; font-size: 0.8rem; margin-top: 6px; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" class="glass-input" 
                           placeholder="••••••••" required>
                    <button type="button" id="togglePassword">
                        <i class="fa-solid fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
                @error('password')
                    <span class="error-msg" style="color: #ffb3b3; font-size: 0.8rem; margin-top: 6px; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn-submit">
                ACCÉDER AU DASHBOARD
            </button>
        </form>

        <div class="footer-text">
            &copy; {{ date('Y') }} Eat&Drink Bénin. <br>
            <a href="{{ route('accueil') }}">Retour à l'accueil</a>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', () => {
        const isHidden = passwordField.type === 'password';
        passwordField.type = isHidden ? 'text' : 'password';
        eyeIcon.classList.toggle('fa-eye');
        eyeIcon.classList.toggle('fa-eye-slash');
    });

    // 🌪️ Professional Carousel Flow Logic
    const slides = document.querySelectorAll('.bg-slide');
    let currentIdx = 0;
    
    const transitions = [
        { exit: 'slide-out-left', entry: 'slide-in-left' },
        { exit: 'slide-out-right', entry: 'slide-in-right' },
        { exit: 'slide-out-top', entry: 'slide-in-top' },
        { exit: 'slide-out-bottom', entry: 'slide-in-bottom' }
    ];

    function transitionBackground() {
        const prevSlide = slides[currentIdx];
        currentIdx = (currentIdx + 1) % slides.length;
        const nextSlide = slides[currentIdx];

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
        }, 1500);
    }

    setInterval(transitionBackground, 8000);
</script>
@endsection
