@extends('components.aut-layout')

@section('title', 'commandes par stands')

@section('content')
    <h2 class="mb-4">Commandes pour {{ $stand->nom_entreprise }}</h2>
    <table class="table table-hover table-bordered">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
            <tr>
                <td>{{ $commande->id }}</td>
                <td>{{ $commande->produit->nom }}</td>
                <td>{{ $commande->quantite }}</td>
                <td>{{ number_format($commande->total, 2) }} €</td>
                <td>{{ $commande->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
