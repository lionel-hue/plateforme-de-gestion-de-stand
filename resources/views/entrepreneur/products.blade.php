<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - Eat&Drink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #E63946;
            --secondary-color: #F1FAEE;
            --dark-color: #1D3557;
            --light-color: #A8DADC;
            --accent-color: #457B9D;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        
        .header {
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            background: white;
        }
        
        .header__top {
            background-color: var(--dark-color);
            color: white;
            padding: 8px 0;
            font-size: 0.9rem;
        }
        
        .header__logo h3 {
            font-weight: 700;
            font-size: 1.8rem;
            margin: 0;
            padding: 15px 0;
        }
        
        .header__menu ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            height: 100%;
            align-items: center;
        }
        
        .header__menu li {
            margin-right: 25px;
            position: relative;
        }
        
        .header__menu a {
            color: var(--dark-color);
            text-decoration: none;
            font-weight: 600;
            padding: 15px 0;
            transition: all 0.3s ease;
            display: block;
        }
        
        .header__menu .active a {
            color: var(--primary-color);
        }
        
        .header__menu .active a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .breadcrumb-section {
            padding: 100px 0;
            position: relative;
            background-size: cover;
            background-position: center;
            background-color: var(--dark-color);
        }
        
        .breadcrumb__text h2 {
            color: white;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }
        
        .breadcrumb__option {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .breadcrumb__option a, 
        .breadcrumb__option span {
            color: rgba(255,255,255,0.9);
            font-size: 1rem;
        }
        
        .breadcrumb__option a:hover {
            color: white;
            text-decoration: none;
        }
        
        .shoping-cart {
            padding: 60px 0;
        }
        
        .shoping__cart__table {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        
        .shoping__cart__table h4 {
            color: var(--dark-color);
            font-weight: 700;
            font-size: 1.5rem;
            margin: 0;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            margin-top: 20px;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary:hover {
            background-color: #c1121f;
            border-color: #c1121f;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
        }
        
        .btn-lg {
            padding: 12px 35px;
            font-size: 1.1rem;
        }
        
        .fa-shopping-bag {
            color: var(--primary-color);
            opacity: 0.7;
            margin-bottom: 20px;
        }
        
        .text-center.py-5 h4 {
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .text-center.py-5 p {
            max-width: 500px;
            margin: 0 auto 25px;
            font-size: 1.05rem;
        }
        
        .header__top__right__auth button {
            background: none;
            border: none;
            color: inherit;
            font-size: inherit;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.2s ease;
        }
        
        .header__top__right__auth button:hover {
            color: var(--light-color);
        }
        
        @media (max-width: 768px) {
            .header__menu ul {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .header__menu li {
                margin-right: 0;
                margin-bottom: 10px;
            }
            
            .breadcrumb-section {
                padding: 70px 0;
            }
            
            .breadcrumb__text h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul class="list-unstyled mb-0 d-flex gap-4">
                            <li><i class="fas fa-envelope"></i> entrepreneur@example.com</li>
                            <li>Welcome, NomEntreprise!</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right text-end">
                        <div class="header__top__right__auth">
                            <form method="POST" action="/entrepreneur/logout" class="d-inline">
                                <input type="hidden" name="_token" value="CSRF_TOKEN">
                                <button type="submit" class="btn btn-link text-white p-0 text-decoration-none">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-6">
                <div class="header__logo">
                    <a href="/dashboard/entrepreneur" class="text-decoration-none">
                        <h3 class="text-success m-0">Eat&Drink</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <nav class="header__menu">
                    <ul class="mb-0">
                        <li><a href="/dashboard/entrepreneur">Dashboard</a></li>
                        <li class="active"><a href="/entrepreneur/produits">Products</a></li>
                        <li><a href="{{ route('entrepreneur.orders') }}">Orders</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<section class="breadcrumb-section set-bg" style="background-image: linear-gradient(rgba(29, 53, 87, 0.8), rgba(29, 53, 87, 0.8)), url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Product Management</h2>
                    <div class="breadcrumb__option">
                        <a href="/dashboard/entrepreneur"><i class="fas fa-home"></i> Dashboard</a>
                        <a href="{{ route('entrepreneur.add_product') }}"><span><i class="fas fa-chevron-right"></i> Products</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4><i class="fas fa-box-open me-2"></i>Your Products</h4>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add New Product
                        </button>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="text-center py-5">
                                <i class="fas fa-shopping-bag fa-4x mb-4"></i>
                                <h4 class="mb-3">No Products Yet</h4>
                                <p class="mb-4">Start by adding your first product to begin selling on our platform.</p>
                                <button class="btn btn-primary btn-lg">
                                    <i class="fas fa-plus"></i> Add Your First Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addButton = document.querySelector('.btn-primary');
        
        addButton.addEventListener('mouseenter', function() {
            this.querySelector('i').style.transform = 'rotate(90deg)';
        });
        
        addButton.addEventListener('mouseleave', function() {
            this.querySelector('i').style.transform = 'rotate(0deg)';
        });
        
        const icons = document.querySelectorAll('i');
        icons.forEach(icon => {
            icon.style.transition = 'transform 0.3s ease';
        });
    });
</script>
</body>
</html>