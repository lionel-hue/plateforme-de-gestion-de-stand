@extends('layouts.visiteur')

@section('title', 'Accueil')

@section('css')
<style>
    .accueil-container {
        max-width: 700px;
        margin: 50px auto;
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .accueil-container h1 {
        font-size: 2.8rem;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .logo {
        color: #ff7e5f;
        font-weight: bold;
    }

    .slogan {
        font-size: 1.2rem;
        color: #555;
        margin-bottom: 30px;
    }

    .btn-visiter {
        display: inline-block;
        padding: 12px 25px;
        background-color: #ff7e5f;
        color: white;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-visiter:hover {
        background-color: #e36b4a;
    }
</style>
@endsection

