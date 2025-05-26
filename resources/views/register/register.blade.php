@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('register/register.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('register/register.js') }}"></script>
@endsection

@section('title')
Register | e-Kantin UNSRAT
@endsection

@section('content')
<!-- Header -->
<nav class="navbar navbar-expand-lg custom-header">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fas fa-home text-dark fs-4"></i>
        </a>
    </div>
</nav>

<!-- Main Content -->
<div class="container-fluid vh-100 d-flex align-items-center justify-content-center signup-container">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="signup-card">
                <div class="text-center mb-4">
                    <h1 class="signup-title">Create new Account</h1>
                    <p class="signup-subtitle">
                        Already Registered?
                        <a href="{{ url('/auth/login') }}" class="login-link">Login</a>
                    </p>
                </div>

                <form id="signupForm" method="POST" action="{{ url('/auth/register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">NAME</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" class="form-control custom-input" id="name" placeholder="Full Name" name="name" required>
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid name.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM (NOMOR INDUK MAHASISWA)</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-id-card"></i>
                            </span>
                            <input type="text" class="form-control custom-input" id="nim" placeholder="Student ID Number" required pattern="[0-9]{8,12}" maxlength="12" name="nim" required>
                        </div>
                        <small class="text-muted">Enter your 8-12 digit student ID number</small>
                        <div class="invalid-feedback">
                            Please provide a valid NIM (8-12 digits).
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">EMAIL</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control custom-input" id="email" placeholder="Email address" name="email" required>
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid email address.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">PASSWORD</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" class="form-control custom-input" id="password" placeholder="Password" name="password" required minlength="8">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="password-strength">
                            <div class="strength-meter">
                                <div class="strength-bar"></div>
                            </div>
                            <small class="strength-text">Password strength: <span id="strengthLevel">Weak</span></small>
                        </div>
                        <div class="invalid-feedback">
                            Password must be at least 8 characters long.
                        </div>
                    </div>


                    <button type="submit" class="btn custom-btn w-100 mb-3">
                        <i class="fas fa-user-plus me-2"></i>
                        Sign Up
                    </button>

                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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
    <div class="floating-shape shape-5"></div>
</div>
@endsection