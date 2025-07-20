@extends('components.aut-layout')

@section('title', 'stands')

@section('content')
    <h2 class="mb-4">Stands approuvés</h2>
    <div class="row">
        @foreach($stands as $stand)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $stand->image ?? 'https://via.placeholder.com/300x150' }}" class="card-img-top" alt="stand image">
                <div class="card-body">
                    <h5 class="card-title">{{ $stand->nom_entreprise }}</h5>
                    <p class="card-text">{{ $stand->description ?? 'Pas de description.' }}</p>
                    <a href="{{ route('admin.commandes', $stand->id) }}" class="btn btn-outline-primary">Voir commandes</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
