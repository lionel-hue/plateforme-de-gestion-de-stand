<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
        
        .product-form {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 30px;
            margin-top: -50px;
            position: relative;
            z-index: 1;
        }
        
        .form-title {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .form-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .form-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 8px;
        }
        
        .form-control, .form-select {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(230, 57, 70, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 30px;
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
        
        .image-upload-container {
            border: 2px dashed #ddd;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: #f9f9f9;
        }
        
        .image-upload-container:hover {
            border-color: var(--primary-color);
            background-color: #fff;
        }
        
        .image-preview {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            display: none;
            margin-top: 15px;
        }
        
        .upload-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .footer {
            background-color: #2d3436;
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer h4 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer a {
            color: #adb5bd;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer a:hover {
            color: white;
        }
        
        .footer-bottom {
            border-top: 1px solid #495057;
            padding-top: 30px;
            margin-top: 30px;
            text-align: center;
            color: #adb5bd;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icons a {
            font-size: 1.2rem;
        }
        
        @media (max-width: 768px) {
            .breadcrumb-section {
                padding: 70px 0;
            }
            
            .product-form {
                margin-top: -30px;
                padding: 20px;
            }
            
            .footer {
                text-align: center;
            }
            
            .social-icons {
                justify-content: center;
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
                        <li><a href="/entrepreneur/commandes">Orders</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h2 class="mb-3">Add New Product</h2>
                <div class="d-flex justify-content-center gap-3">
                    <a href="/dashboard/entrepreneur" class="text-white"><i class="fas fa-home"></i> Dashboard</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <a href="/entrepreneur/produits" class="text-white">Products</a>
                    <span><i class="fas fa-chevron-right"></i></span>
                    <span>Add Product</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="product-form">
                    <h3 class="form-title"><i class="fas fa-plus-circle me-2"></i>Product Information</h3>
                    
                    <form id="productForm" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="productName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="productName" required>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label for="productCategory" class="form-label">Category</label>
                                <select class="form-select" id="productCategory" required>
                                    <option value="" selected disabled>Select category</option>
                                    <option value="food">Food</option>
                                    <option value="drink">Drink</option>
                                    <option value="snack">Snack</option>
                                    <option value="dessert">Dessert</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label for="productPrice" class="form-label">Price (FCFA)</label>
                                <input type="number" class="form-control" id="productPrice" min="0" step="100" required>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label for="productStock" class="form-label">Stock Quantity</label>
                                <input type="number" class="form-control" id="productStock" min="0" required>
                            </div>
                            
                            <div class="col-12 mb-4">
                                <label for="productDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="productDescription" rows="3" required></textarea>
                            </div>
                            
                            <div class="col-12 mb-4">
                                <label class="form-label">Product Image</label>
                                <div class="image-upload-container" id="uploadContainer">
                                    <input type="file" id="productImage" accept="image/*" style="display: none;">
                                    <div class="upload-icon">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                    </div>
                                    <h5>Drag & drop your image here</h5>
                                    <p class="text-muted">or click to browse (JPEG, PNG - Max 2MB)</p>
                                    <img id="imagePreview" class="image-preview" alt="Preview">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <a href="/entrepreneur/produits" class="btn btn-outline-secondary">
                                        <i class="fas fa-arrow-left me-2"></i>Cancel
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-2"></i>Save Product
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h4>Eat&Drink</h4>
                <p>Plateforme des entrepreneurs culinaires béninois.</p>
                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h4>Liens rapides</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#">Accueil</a></li>
                    <li class="mb-2"><a href="#">Produits</a></li>
                    <li class="mb-2"><a href="#">Commandes</a></li>
                    <li class="mb-2"><a href="#">A propos</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h4>Contact</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Cotonou, Bénin</li>
                    <li class="mb-2"><i class="fas fa-phone-alt me-2"></i> +229 01 23 45 67</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> contact@eatdrink.com</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <h4>Newsletter</h4>
                <p>Abonnez-vous pour recevoir nos dernières actualités.</p>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Votre email">
                    <button class="btn btn-primary" type="button">S'abonner</button>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="mb-0">&copy; 2023 Eat&Drink. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const uploadContainer = document.getElementById('uploadContainer');
        const productImage = document.getElementById('productImage');
        const imagePreview = document.getElementById('imagePreview');
        uploadContainer.addEventListener('click', function() {
            productImage.click();
        });

        uploadContainer.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.style.borderColor = 'var(--primary-color)';
            this.style.backgroundColor = 'rgba(230, 57, 70, 0.1)';
        });
        
        uploadContainer.addEventListener('dragleave', function() {
            this.style.borderColor = '#ddd';
            this.style.backgroundColor = '#f9f9f9';
        });
        
        uploadContainer.addEventListener('drop', function(e) {
            e.preventDefault();
            this.style.borderColor = '#ddd';
            this.style.backgroundColor = '#f9f9f9';
            
            if (e.dataTransfer.files.length) {
                productImage.files = e.dataTransfer.files;
                previewImage(e.dataTransfer.files[0]);
            }
        });
        
        productImage.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                previewImage(this.files[0]);
            }
        });
        
        function previewImage(file) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
                uploadContainer.querySelector('h5').style.display = 'none';
                uploadContainer.querySelector('p').style.display = 'none';
                uploadContainer.querySelector('.upload-icon').style.display = 'none';
            }
            
            reader.readAsDataURL(file);
        }
        
        document.getElementById('productForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            alert('Product added successfully!');
        });
    });
</script>
</body>
</html>