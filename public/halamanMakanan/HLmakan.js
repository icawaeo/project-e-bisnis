// Initialize cart
let cart = [];

// Add to cart function
function addToCart(name, price) {
    const existingItem = cart.find(item => item.name === name);

    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            name: name,
            price: price,
            quantity: 1
        });
    }

    updateCartCounter();
    showNotification(`${name} berhasil ditambahkan ke keranjang!`);

    // Add visual feedback to button
    const buttons = document.querySelectorAll('.btn-add-to-cart');
    buttons.forEach(button => {
        if (button.onclick.toString().includes(name)) {
            button.style.backgroundColor = '#4CAF50';
            button.textContent = 'Ditambahkan!';

            setTimeout(() => {
                button.style.backgroundColor = '#ff6b35';
                button.textContent = 'Tambah ke Keranjang';
            }, 1000);
        }
    });
}

// Update cart counter
function updateCartCounter() {
    const counter = document.getElementById('cartCounter');
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    counter.textContent = totalItems;

    if (totalItems > 0) {
        counter.style.display = 'flex';
    } else {
        counter.style.display = 'none';
    }
}

// Open cart modal
function openCart() {
    const modal = document.getElementById('cartModal');
    modal.style.display = 'block';
    displayCartItems();
}

// Close cart modal
function closeCart() {
    const modal = document.getElementById('cartModal');
    modal.style.display = 'none';
}

// Display cart items
function displayCartItems() {
    const cartItemsContainer = document.getElementById('cartItems');
    const cartTotal = document.getElementById('cartTotal');
    const checkoutBtn = document.getElementById('checkoutBtn');

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = `
                    <div class="cart-empty">
                        <div style="font-size: 48px; margin-bottom: 20px;">🛒</div>
                        <h3>Keranjang Kosong</h3>
                        <p>Belum ada makanan yang ditambahkan ke keranjang</p>
                    </div>
                `;
        cartTotal.style.display = 'none';
        checkoutBtn.disabled = true;
        return;
    }

    let cartHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        total += itemTotal;

        cartHTML += `
                    <div class="cart-item">
                        <div class="cart-item-info">
                            <div class="cart-item-name">${item.name}</div>
                            <div class="cart-item-price">Rp.${item.price.toLocaleString()}</div>
                            <div class="quantity-controls">
                                <button class="quantity-btn" onclick="decreaseQuantity(${index})">-</button>
                                <span class="quantity-display">${item.quantity}</span>
                                <button class="quantity-btn" onclick="increaseQuantity(${index})">+</button>
                                <button class="remove-item" onclick="removeItem(${index})">Hapus</button>
                            </div>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-weight: bold; color: #e74c3c; font-size: 18px;">
                                Rp.${itemTotal.toLocaleString()}
                            </div>
                        </div>
                    </div>
                `;
    });

    cartItemsContainer.innerHTML = cartHTML;
    document.getElementById('totalAmount').textContent = `Rp.${total.toLocaleString()}`;
    cartTotal.style.display = 'flex';
    checkoutBtn.disabled = false;
}

// Increase quantity
function increaseQuantity(index) {
    cart[index].quantity += 1;
    updateCartCounter();
    displayCartItems();
}

// Decrease quantity
function decreaseQuantity(index) {
    if (cart[index].quantity > 1) {
        cart[index].quantity -= 1;
    } else {
        cart.splice(index, 1);
    }
    updateCartCounter();
    displayCartItems();
}

// Remove item
function removeItem(index) {
    const itemName = cart[index].name;
    cart.splice(index, 1);
    updateCartCounter();
    displayCartItems();
    showNotification(`${itemName} dihapus dari keranjang`);
}

// Checkout function
function checkout() {
    if (cart.length === 0) return;

    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    const itemList = cart.map(item => `${item.name} (${item.quantity}x)`).join(', ');

    alert(`Checkout berhasil!\n\nItems: ${itemList}\nTotal: Rp.${total.toLocaleString()}\n\nTerima kasih atas pesanan Anda!`);

    // Clear cart
    cart = [];
    updateCartCounter();
    closeCart();
}

// Show notification
function showNotification(message) {
    const notification = document.createElement('div');
    notification.textContent = message;
    notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background-color: #4CAF50;
                color: white;
                padding: 15px 20px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.2);
                z-index: 1001;
                font-weight: 500;
                max-width: 300px;
                animation: slideInRight 0.3s ease-out;
            `;

    document.body.appendChild(notification);

    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease-in';
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

// Close modal when clicking outside
window.onclick = function (event) {
    const modal = document.getElementById('cartModal');
    if (event.target === modal) {
        closeCart();
    }
}

// Initialize
document.addEventListener('DOMContentLoaded', function () {
    updateCartCounter();
});