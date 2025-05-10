@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: var(--background-color);
    }

    .register-container {
        min-height: calc(100vh - 160px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
    }

    .register-card {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        width: 100%;
        max-width: 1000px;
        display: flex;
        min-height: 550px;
    }

    .register-sidebar {
        background: linear-gradient(135deg, #4a67ed, #6e8efb);
        padding: 40px;
        color: white;
        width: 45%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .sidebar-content {
        position: relative;
        z-index: 2;
    }

    .shape-blob {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
    }

    .blob-1 {
        width: 250px;
        height: 250px;
        top: -50px;
        right: -100px;
    }

    .blob-2 {
        width: 200px;
        height: 200px;
        bottom: -80px;
        left: -60px;
    }

    .register-form {
        padding: 40px 50px;
        width: 55%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-title {
        font-weight: 600;
        font-size: 26px;
        color: #333;
        margin-bottom: 10px;
    }

    .form-subtitle {
        color: #666;
        font-size: 16px;
        margin-bottom: 30px;
        font-weight: 400;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #333;
        font-size: 14px;
    }

    .form-control {
        height: 48px;
        border-radius: 8px;
        padding: 0 15px;
        border: 1.5px solid #e1e5ee;
        transition: all 0.3s ease;
        width: 100%;
        font-size: 15px;
    }

    .form-control:focus {
        outline: none;
        box-shadow: none;
        border-color: #4a67ed;
    }

    .btn-register {
        height: 48px;
        border-radius: 8px;
        background: #4a67ed;
        border: none;
        font-weight: 500;
        width: 100%;
        margin-top: 10px;
        transition: all 0.3s ease;
        color: white;
        font-size: 16px;
    }

    .btn-register:hover {
        background: #3951c6;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(74, 103, 237, 0.2);
    }

    .register-benefits {
        margin-top: 30px;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
    }

    .benefit-icon {
        width: 28px;
        height: 28px;
        background-color: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 12px;
    }

    .login-link {
        color: #4a67ed;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .login-link:hover {
        color: #3951c6;
        text-decoration: underline;
    }    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 13px;
        color: #dc3545;
    }
    
    .is-invalid {
        border-color: #dc3545 !important;
    }
    
    .is-invalid:focus {
        border-color: #dc3545 !important;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
    }

    @media (max-width: 768px) {
        .register-card {
            flex-direction: column;
        }

        .register-sidebar {
            width: 100%;
            padding: 30px;
            min-height: 250px;
        }

        .register-form {
            width: 100%;
            padding: 30px;
        }
    }
</style>

<div class="register-container">
    <div class="register-card">
        <div class="register-sidebar">
            <div class="shape-blob blob-1"></div>
            <div class="shape-blob blob-2"></div>
            <div class="sidebar-content">
                <h2 class="mb-4" style="font-weight: 600; font-size: 28px;">Join uDeck Today</h2>
                <p class="mb-5" style="opacity: 0.9; font-size: 16px; line-height: 1.6;">Create an account to enjoy all the features and benefits of our platform.</p>
                
                <div class="register-benefits">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17L4 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div style="font-size: 15px;">Quick Account Setup</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17L4 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div style="font-size: 15px;">Access to Premium Features</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17L4 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div style="font-size: 15px;">Personalized Experience</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="register-form">
            <h2 class="form-title">Create Account</h2>
            <p class="form-subtitle">Fill in your details to get started</p>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="form-group">
                    <label for="name" class="form-label">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password-confirm" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                
                <button type="submit" class="btn-register">
                    {{ __('Register') }}
                </button>
                
                <div class="text-center mt-4">
                    <span class="text-muted">Already have an account?</span> 
                    <a href="{{ route('login') }}" class="login-link">Log In</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
