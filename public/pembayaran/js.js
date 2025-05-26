function sharePayment() {
    if (navigator.share) {
        navigator.share({
            title: 'eKanteen QR Payment',
            text: 'Pembayaran Rp 45,000 - Order #ORD-2024-001',
            url: window.location.href
        });
    } else {
        // Fallback for browsers that don't support Web Share API
        navigator.clipboard.writeText(window.location.href);
        alert('Link pembayaran telah disalin!');
    }
}

function copyAmount() {
    navigator.clipboard.writeText('45000');
    const btn = event.target.closest('.copy-btn');
    const originalHTML = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-check"></i>';
    setTimeout(() => {
        btn.innerHTML = originalHTML;
    }, 1000);
}