@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('halamanMakanan/Hlmakanan.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('halamanMakanan/HLmakan.js') }}"></script>
@endsection

@section('title')
Daftar Menu Makanan | e-Kantin UNSRAT
@endsection

@section("content")
<div class="demo-container">
    <div class="header">
        <h1>🍽️ Daftar Menu</h1>
        <button class="cart-button" onclick="openCart()">
            🛒 Keranjang Makanan
            <span class="cart-counter" id="cartCounter" style="display: none;">0</span>
        </button>
    </div>

    <div class="content">
        <div class="demo-info">
            <h3>Ayam Lalapan Bunga Bakung</h3>
            <p>Menjual Aneka Makanan Ayam</p>
        </div>

        <div class="sample-items">
            <div class="menu-item">
                <div class="item-image">🍛</div>
                <div class="item-info">
                    <div class="item-name">Ayam Gorang</div>
                    <div class="item-desc">Nasi, Ayam Goreng, Sambal, Bumbu Ayam</div>
                    <div class="item-price">Rp.15.000</div>
                    <button class="btn-add-to-cart" onclick="addToCart('Ayam Goreng', 15000)">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="item-image">🥞</div>
                <div class="item-info">
                    <div class="item-name">Ayam Lalapan</div>
                    <div class="item-desc">Nasi, Ayam Goreng lalapan, Lalapan, Sambal, Bumbu Ayam.</div>
                    <div class="item-price">Rp.15.000</div>
                    <button class="btn-add-to-cart" onclick="addToCart('Ayam Lalapan', 15000)">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="item-image">🍳</div>
                <div class="item-info">
                    <div class="item-name">Paket JUMBO Sambel Ijo</div>
                    <div class="item-desc">Nasi, Ayam potongan Paha Utuh atau potongan Ayam Dada Utuh, Lalapan, Sambal Ijo, Bumbu Ayam.</div>
                    <div class="item-price">Rp.18.000</div>
                    <button class="btn-add-to-cart" onclick="addToCart('Paket JUMBO Sambel Ijo', 18000)">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="demo-container">
    <div class="content">
        <div class="demo-info">
            <h3>Sambal Mama</h3>
            <p>Menjual Aneka Ayam Goreang Dengan Sambal Yang Bermacam-Macam!</p>
        </div>

        <div class="sample-items">
            <div class="menu-item">
                <div class="item-image">🍛</div>
                <div class="item-info">
                    <div class="item-name">Ayam Gorang Sambal Ijo</div>
                    <div class="item-desc">Nasi, Ayam Goreng, Sambal Ijo</div>
                    <div class="item-price">Rp.15.000</div>
                    <button class="btn-add-to-cart" onclick="addToCart('Ayam Gorang Sambal Ijo', 15000)">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="item-image">🥞</div>
                <div class="item-info">
                    <div class="item-name">Ayam Gorang Bumbu Bali</div>
                    <div class="item-desc">Nasi, Ayam Goreng , Sambal Bumbu Bali</div>
                    <div class="item-price">Rp.15.000</div>
                    <button class="btn-add-to-cart" onclick="addToCart('Ayam Gorang Bumbu Bali', 15000)">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <div class="menu-item">
                <div class="item-image">🍳</div>
                <div class="item-info">
                    <div class="item-name">Ayam Gorang Rica Bawang</div>
                    <div class="item-desc">Nasi, Ayam potongan Paha Utuh atau potongan Ayam Dada Utuh, Lalapan, Sambal Ijo, Bumbu Ayam.</div>
                    <div class="item-price">Rp.15.000</div>
                    <button class="btn-add-to-cart" onclick="addToCart('PAyam Gorang Rica Bawang', 15000)">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cart Modal -->
<div id="cartModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>🛒 Keranjang Makanan</h2>
            <span class="close" onclick="closeCart()">&times;</span>
        </div>

        <div class="modal-body">
            <div id="cartItems">
                <div class="cart-empty">
                    <div style="font-size: 48px; margin-bottom: 20px;">🛒</div>
                    <h3>Keranjang Kosong</h3>
                    <p>Belum ada makanan yang ditambahkan ke keranjang</p>
                </div>
            </div>
        </div>

        <div class="cart-total" id="cartTotal" style="display: none;">
            <div class="total-label">Total Belanja:</div>
            <div class="total-amount" id="totalAmount">Rp.0</div>
        </div>

        <div class="checkout-section">
            <button class="checkout-btn" id="checkoutBtn" onclick="checkout()" disabled>
                🚀 Pembayaran Qris
            </button>
        </div>
    </div>
</div>
@endsection