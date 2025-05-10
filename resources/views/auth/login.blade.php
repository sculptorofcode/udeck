@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }

    .login-container {
        min-height: calc(100vh - 160px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1rem;
    }

    .login-card {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        width: 100%;
        max-width: 1000px;
        display: flex;
        min-height: 550px;
    }

    .login-sidebar {
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

    .login-form {
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
        margin-bottom: 22px;
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

    .btn-login {
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

    .btn-login:hover {
        background: #3951c6;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(74, 103, 237, 0.2);
    }

    .form-check {
        display: flex;
        align-items: center;
    }

    .form-check-input {
        width: 18px;
        height: 18px;
        margin-right: 8px;
        accent-color: #4a67ed;
    }

    .form-check-label {
        font-size: 14px;
        color: #666;
    }

    .forgot-link {
        color: #4a67ed;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .forgot-link:hover {
        color: #3951c6;
        text-decoration: underline;
    }

    .login-features {
        margin-top: 40px;
    }

    .feature-item {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
    }

    .feature-icon {
        width: 28px;
        height: 28px;
        background-color: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 12px;
    }

    .social-login {
        display: flex;
        margin-top: 25px;
        gap: 10px;
    }

    .social-btn {
        flex: 1;
        height: 44px;
        border-radius: 8px;
        border: 1.5px solid #e1e5ee;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        background: white;
    }

    .social-btn:hover {
        background: #f5f6fa;
    }

    .divider {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 25px 0;
        color: #888;
        font-size: 14px;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #e1e5ee;
    }

    .divider::before {
        margin-right: 15px;
    }    .divider::after {
        margin-left: 15px;
    }
    
    .invalid-feedback {
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
        .login-card {
            flex-direction: column;
        }

        .login-sidebar {
            width: 100%;
            padding: 30px;
            min-height: 250px;
        }

        .login-form {
            width: 100%;
            padding: 30px;
        }
    }
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-sidebar">
            <div class="shape-blob blob-1"></div>
            <div class="shape-blob blob-2"></div>
            <div class="sidebar-content">
                <h2 class="mb-4" style="font-weight: 600; font-size: 28px;">Welcome to uDeck</h2>
                <p class="mb-5" style="opacity: 0.9; font-size: 16px; line-height: 1.6;">Sign in to access your personalized dashboard and explore all our features.</p>

                <div class="login-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17L4 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div style="font-size: 15px;">Intuitive User Interface</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17L4 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div style="font-size: 15px;">Advanced Security</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6L9 17L4 12" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div style="font-size: 15px;">Real-time Collaboration</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-form">
            <h2 class="form-title">Sign In</h2>
            <p class="form-subtitle">Enter your credentials to access your account</p>

            <div class="social-login">
                <button type="button" class="social-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #4285F4;">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05" />
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335" />
                    </svg>
                </button>
                <button type="button" class="social-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #1877F2;">
                        <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z" />
                    </svg>
                </button>
                <button type="button" class="social-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #000;">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                </button>
            </div>

            <div class="divider">or continue with email</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary btn-login">
                    {{ __('Login') }}
                </button>

                @if (Route::has('register'))
                <div class="text-center mt-4">
                    <span class="text-muted">Don't have an account?</span>
                    <a href="{{ route('register') }}" class="forgot-link">Create Account</a>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection