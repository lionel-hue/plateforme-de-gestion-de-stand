@extends('components.aut-layout')

@section('title', 'Demandes en attente')

@section('content')
    <h2 class="mb-4">Demandes de stand en attente</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-warning">
            <tr>
                <th>Entreprise</th>
                <th>Email</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($demandes as $demande)
            <tr>
                <td>{{ $demande->nom_entreprise }}</td>
                <td>{{ $demande->email }}</td>
                <td>{{ $demande->created_at->format('d/m/Y') }}</td>
                <td>
                    <form action="{{ route('admin.approuver', $demande->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Approuver</button>
                    </form>
                    <form action="{{ route('admin.rejeter', $demande->id) }}" method="POST" class="d-inline">
                        @csrf
                        <input type="text" name="raison_rejet" placeholder="Motif" class="form-control form-control-sm d-inline w-auto">
                        <button type="submit" class="btn btn-danger btn-sm">Rejeter</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
