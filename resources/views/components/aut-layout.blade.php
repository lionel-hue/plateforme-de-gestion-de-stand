<!DOCTYPE html data-bs-theme="{{ session('theme', 'light') }}>
<html lang="fr">
<head>
    <title>@yield('title') | Eat&Drink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
    <link rel="stylesheet" href="#">

    <style>
        html, body {
            transition: background-color 0.5s ease, color 0.5s ease;
        }
        .transition-fade {
            animation: fadeInUp 0.5s ease;
        }
        .btn, .nav-link, .btn-outline-secondary {
            transition: all 0.3s ease-in-out;
        }
        .btn:hover, .nav-link:hover, .btn-outline-secondary:hover {
            transform: scale(1.05);
            box-shadow: 0 0 0.5rem rgba(0,0,0,0.2);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
