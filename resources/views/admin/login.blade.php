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
    }

    /* 📸 Dynamic Background Slider */
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
        animation: slideAnimation 24s infinite;
    }

    .bg-slide:nth-child(1) {
        background-image: url('/img/admin-login-bg.png');
        animation-delay: 0s;
    }

    .bg-slide:nth-child(2) {
        background-image: url('/img/admin-login-bg-2.png');
        animation-delay: 8s;
    }

    .bg-slide:nth-child(3) {
        background-image: url('/img/admin-login-bg-3.png');
        animation-delay: 16s;
    }

    @keyframes slideAnimation {
        0% {
            opacity: 0;
            transform: translateX(-50px) scale(1.1);
        }
        5% {
            opacity: 1;
            transform: translateX(0) scale(1.05);
        }
        28% {
            opacity: 1;
            transform: translateX(50px) scale(1);
        }
        33% {
            opacity: 0;
            transform: translateX(100px) scale(0.95);
        }
        /* Second cycle (Right to Left) */
        33.0001% {
            transform: translateX(50px) translateY(0) scale(1.1);
        }
        38% {
            opacity: 1;
            transform: translateX(0) scale(1.05);
        }
        61% {
            opacity: 1;
            transform: translateX(-50px) scale(1);
        }
        66% {
            opacity: 0;
            transform: translateX(-100px) scale(0.95);
        }
        /* Third cycle (Down to Up) */
        66.0001% {
            transform: translateY(50px) translateX(0) scale(1.1);
        }
        71% {
            opacity: 1;
            transform: translateY(0) scale(1.05);
        }
        94% {
            opacity: 1;
            transform: translateY(-50px) scale(1);
        }
        100% {
            opacity: 0;
            transform: translateY(-100px) scale(0.95);
        }
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
        z-index: 1;
    }

    .glass-card {
        position: relative;
        z-index: 2;
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
        animation: fadeInScale 1s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes fadeInScale {
        from { opacity: 0; transform: scale(0.9) translateY(20px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }

    .logo-container {
        text-align: center;
        margin-bottom: 40px;
    }

    .logo-container i {
        font-size: 3rem;
        color: white;
        text-shadow: 0 0 15px rgba(230, 57, 70, 0.8);
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

    .glass-input::placeholder {
        color: rgba(255, 255, 255, 0.4);
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
    }

    .btn-submit:hover {
        background: var(--primary-red-hover);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(230, 57, 70, 0.6);
    }

    .btn-submit:active {
        transform: translateY(0);
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

    .error-msg {
        color: #ffb3b3;
        font-size: 0.8rem;
        margin-top: 6px;
        display: block;
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
    <!-- 🌠 Dynamic Background Slider -->
    <div class="bg-slider">
        <div class="bg-slide"></div>
        <div class="bg-slide"></div>
        <div class="bg-slide"></div>
    </div>
    <div class="overlay"></div>

    <div class="glass-card">
        <!-- Logo Section -->
        <div class="logo-container">
            <i class="fa-solid fa-utensils"></i>
            <div class="logo-text">Eat<span>&</span>Drink</div>
            <p class="subtitle">Espace Administration</p>
        </div>

        <!-- Login Form -->
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
                    <span class="error-msg">{{ $message }}</span>
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
                    <span class="error-msg">{{ $message }}</span>
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

    // 🌪️ Subtle randomization of slide directions via JS (Optional, but adds to the "unpredictable" feel)
    const slides = document.querySelectorAll('.bg-slide');
    const animations = [
        'slideLeftRight',
        'slideRightLeft',
        'slideBottomTop',
        'slideTopBottom'
    ];
    
    // We can inject different keyframes or just let the CSS handle the sequence
</script>
@endsection
