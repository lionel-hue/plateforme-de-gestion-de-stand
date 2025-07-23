@extends('layouts.app')

@section('title', 'Entrepreneur Registration - Eat&Drink Platform')

@section('content')
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Join Eat&Drink Platform</h2>
                    <div class="breadcrumb__option">
                        <a href="{{ url('/') }}">Home</a>
                        <span>Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout spad">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="checkout__form">
                    <h4 class="mb-4">Entrepreneur Registration</h4>
                    <p class="text-muted mb-4">Register your enterprise to start selling on our platform</p>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('entrepreneur.register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Enterprise Name<span>*</span></p>
                                    <input type="text" 
                                           name="enterprise_name" 
                                           value="{{ old('enterprise_name') }}" 
                                           required 
                                           class="form-control @error('enterprise_name') is-invalid @enderror"
                                           placeholder="Enter your enterprise name">
                                    @error('enterprise_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Email Address<span>*</span></p>
                                    <input type="email" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required 
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Enter your email address">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
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
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Confirm Password<span>*</span></p>
                                    <input type="password" 
                                           name="password_confirmation" 
                                           required 
                                           class="form-control"
                                           placeholder="Confirm your password">
                                </div>
                            </div>
                        </div>

                        <!-- Hidden fields as requested -->
                        <input type="hidden" name="role" value="entrepreneur_waiting_approval">
                        <input type="hidden" name="status" value="waiting">
                        <input type="hidden" name="rejection_reason" value="">

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="checkout__input__checkbox">
                                    <label for="terms">
                                        I agree to the 
                                        <a href="#" class="text-primary">Terms and Conditions</a>
                                        <input type="checkbox" id="terms" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <button type="submit" class="site-btn btn-block">
                                    <i class="fa fa-user-plus"></i> Register Enterprise
                                </button>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-12 text-center">
                                <p>Already have an account? 
                                    <a href="{{ route('entrepreneur.login') }}" class="text-primary">Login here</a>
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
</style>
@endpush
