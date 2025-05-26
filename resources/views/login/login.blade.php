@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('login/login.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('login/login.js') }}"></script>
@endsection

@section('title')
Login | e-Kantin UNSRAT
@endsection

@section('content')
<!-- Header -->
<nav class="navbar navbar-expand-lg custom-header">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/auth/login') }}">
            <i class="fas fa-home text-dark fs-4"></i>
        </a>
    </div>
</nav>

<!-- Main Content -->
<div class="container-fluid vh-100 d-flex align-items-center justify-content-center login-container">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3">
            <div class="login-card">
                <div class="text-center mb-4">
                    <h1 class="login-title">Login</h1>
                    <p class="login-subtitle">e-Kantin UNSRAT</p>
                </div>

                <form method="POST" action="{{ url('/auth/login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">EMAIL</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control custom-input" id="email" placeholder="Email address" name="email" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">PASSWORD</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" class="form-control custom-input" id="password" placeholder="Password" name="password" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn custom-btn w-100 mb-3">
                        <i class="fas fa-sign-in-alt me-2"></i>
                        Login
                    </button>

                    <div class="text-center">
                        <p class="mb-0">Don't have an account? <a href="{{ url('/auth/register') }}" class="signup-link">Sign up</a></p>
                    </div>
                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

            </div>
        </div>
    </div>
</div>

<!-- Background Animation -->
<div class="background-animation">
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>
    <div class="floating-shape shape-4"></div>
</div>
@endsection