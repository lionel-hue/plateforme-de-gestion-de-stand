<x-mail::message>
# Votre demande d'inscription a été rejetée

Bonjour {{ $user->nom_entreprise }},

Nous avons étudié votre demande d'inscription en tant qu'entrepreneur.  
Malheureusement, celle-ci a été **rejetée**.

@if($user->raison_rejet)
## Motif du rejet :
{{ $user->raison_rejet }}
@endif

<x-mail::button :url="route('accueil')">
Retour à l'accueil
</x-mail::button>

Merci de votre compréhension,  
**L'équipe Eat&Drink**
</x-mail::message>
