<x-mail::message>
# 🎉 Votre demande a été approuvée !

Bonjour {{ $user->nom_entreprise }},

Bonne nouvelle ! Votre inscription en tant qu'entrepreneur à l'événement **Eat&Drink** a été **approuvée** ✅.

Vous pouvez dès à présent :
- Accéder à votre tableau de bord exposant.
- Ajouter vos produits.
- Préparer votre stand pour l'événement.

<x-mail::button :url="route('login')">
Se connecter
</x-mail::button>

Nous sommes ravis de vous compter parmi les exposants ! 🎪

Merci,  
**L'équipe Eat&Drink**
</x-mail::message>
