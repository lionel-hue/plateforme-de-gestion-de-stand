@extends('layouts.app')

@section('title', 'Order Management - Eat&Drink Platform')

@section('content')
<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> {{ $entrepreneur->email }}</li>
                            <li>Welcome, {{ $entrepreneur->enterprise_name }}!</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__auth">
                            <form method="POST" action="{{ route('entrepreneur.logout') }}" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-link text-white p-0" style="text-decoration: none;">
                                    <i class="fa fa-sign-out"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{ route('entrepreneur.dashboard') }}">
                        <h3 class="text-success">Eat&Drink</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{ route('entrepreneur.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('entrepreneur.products') }}">Products</a></li>
                        <li class="active"><a href="{{ route('entrepreneur.orders') }}">Orders</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Order Management</h2>
                    <div class="breadcrumb__option">
                        <a href="{{ route('entrepreneur.dashboard') }}">Dashboard</a>
                        <span>Orders</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Orders Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4>Customer Orders</h4>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-primary active">All Orders</button>
                            <button type="button" class="btn btn-outline-warning">Pending</button>
                            <button type="button" class="btn btn-outline-success">Completed</button>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center py-5">
                                <i class="fa fa-shopping-cart fa-4x text-muted mb-4"></i>
                                <h4 class="text-muted">No Orders Yet</h4>
                                <p class="text-muted mb-4">Orders from customers will appear here once you start receiving them.</p>
                                <a href="{{ route('entrepreneur.products') }}" class="btn btn-primary btn-lg">
                                    <i class="fa fa-plus"></i> Add Products to Start Selling
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Orders Section End -->
@endsection

@push('styles')
<style>
    .header__top__right__auth button {
        background: none;
        border: none;
        color: inherit;
        font-size: inherit;
    }
    .header__top__right__auth button:hover {
        text-decoration: underline !important;
    }
    .btn-group .btn {
        border-radius: 0;
    }
    .btn-group .btn:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    }
    .btn-group .btn:last-child {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
    }
</style>
@endpush
