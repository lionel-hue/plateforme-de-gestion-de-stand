<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Accueil</h1>
    <a href="{{ route('login') }}">Se connecter</a>
    <a href="{{ route('register') }}">S'inscrire</a>
    <a href="{{ route('stand') }}">Voir les stands</a>
    <a href="{{ route('entrepreneur.register') }}">S'inscrire en tant qu'entrepreneur</a>
    <a href="{{ route('login') }}">Se connecter en tant qu'admin</a>
</body>
</html>
