<!-- @extends('layouts.app') -->

@section('content')
<style>
  .dashboard-container {
    max-width: 900px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
  }

  .dashboard-container h1 {
    color: #2c3e50;
    margin-bottom: 20px;
  }

  .dashboard-section {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 6px;
    margin-bottom: 15px;
  }

  .dashboard-section h2 {
    margin-top: 0;
    color: #34495e;
  }

  .dashboard-section p {
    color: #555;
  }
</style>

<div class="dashboard-container">
  <h1>Tableau de bord Entrepreneur</h1>

  <div class="dashboard-section">
    <h2>Bienvenue</h2>
    <p>Ceci est votre tableau de bord. Vous pourrez gérer vos produits et suivre vos commandes ici.</p>
  </div>

  <div class="dashboard-section">
    <h2>Statistiques</h2>
    <p>Fonctionnalité à venir : voir le nombre de produits, commandes, etc.</p>
  </div>

  <div class="dashboard-section">
    <h2>Actions rapides</h2>
    <p>Fonctionnalité à venir : ajouter un produit, modifier vos informations, etc.</p>
  </div>
</div>
@endsection
