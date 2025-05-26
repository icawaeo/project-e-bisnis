@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('pembayaran/css.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('pembayaran/js.js') }}"></script>
@endsection



@section('content')
<div class="mobile-container">
    <!-- Header -->
    <div class="header">
        <div class="header-left">
            <button class="back-btn" onclick="goBack()">
                <i class="fas fa-arrow-left"></i>
            </button>
            <h1 class="header-title">QR Code Payment</h1>
        </div>
        <button class="share-btn" onclick="sharePayment()">
            <i class="fas fa-share"></i> Share
        </button>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Payment Amount -->
        <div class="section">
            <div class="section-label">Total Pembayaran</div>
            <div class="payment-amount">
                <span class="amount-text">Rp 45,000</span>
                <button class="copy-btn" onclick="copyAmount()" title="Copy amount">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
            <div style="font-size: 0.875rem; color: var(--text-secondary);">
                Order #ORD-2024-001 • Warung Makan Sederhana
            </div>
        </div>

        <!-- QR Code Display -->
        <div class="section">
            <div class="section-label">Scan QR Code untuk Pembayaran</div>
            <div class="qr-container">
                <div class="qr-code">
                    <div class="qr-pattern"></div>
                    <div class="qr-corners">
                        <div class="qr-corner top-left"></div>
                        <div class="qr-corner top-right"></div>
                        <div class="qr-corner bottom-left"></div>
                    </div>
                </div>
                <div class="qr-instruction">
                    Scan QR code dengan aplikasi e-wallet Anda<br>
                    (GoPay, OVO, DANA, ShopeePay, LinkAja)
                </div>
                <div class="qr-id">
                    QR ID: 1710440157909331
                </div>
            </div>
        </div>
    </div>
</div>
@endsection