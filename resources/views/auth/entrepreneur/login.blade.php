@extends('layouts.app')

@section('title', 'Entrepreneur Login - Eat&Drink Platform')

@section('content')
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Entrepreneur Login</h2>
                    <div class="breadcrumb__option">
                        <a href="{{ url('/') }}">Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="checkout__form">
                    <h4 class="mb-4">Entrepreneur Login</h4>
                    <p class="text-muted mb-4">Access your enterprise dashboard</p>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('entrepreneur.login') }}">
                        @csrf
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Email Address<span>*</span></p>
                                    <input type="email" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required 
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Enter your email address"
                                           autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Password<span>*</span></p>
                                    <input type="password" 
                                           name="password" 
                                           required 
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="Enter your password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="checkout__input__checkbox">
                                    <label for="remember">
                                        Remember me
                                        <input type="checkbox" id="remember" name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <button type="submit" class="site-btn btn-block">
                                    <i class="fa fa-sign-in"></i> Login to Dashboard
                                </button>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-12 text-center">
                                <p>Don't have an account? 
                                    <a href="{{ route('entrepreneur.register') }}" class="text-primary">Register here</a>
                                </p>
                                <p>
                                    <a href="#" class="text-primary">Forgot your password?</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .checkout__input input.is-invalid {
        border-color: #dc3545;
    }
    .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 0.875em;
        margin-top: 0.25rem;
    }
    .alert {
        border-radius: 0.375rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    .alert-danger {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
    }
    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }
</style>
@endpush
