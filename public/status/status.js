   // Copy order number functionality
        document.querySelector('.copy-btn').addEventListener('click', function() {
            const orderNumber = document.querySelector('.order-number').textContent;
            navigator.clipboard.writeText(orderNumber).then(function() {
                // Show success feedback
                const btn = document.querySelector('.copy-btn');
                const originalIcon = btn.innerHTML;
                btn.innerHTML = '<i class="bi bi-check-lg"></i>';
                setTimeout(() => {
                    btn.innerHTML = originalIcon;
                }, 1000);
            });
        });