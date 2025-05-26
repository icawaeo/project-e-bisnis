// Tab switching functionality
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-link[data-tab]');
    const tabContents = document.querySelectorAll('.tab-content');
    const pageTitle = document.getElementById('pageTitle');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const storeStatus = document.getElementById('storeStatus');
    const storeToggle = document.getElementById('storeToggle');

    // Tab titles
    const tabTitles = {
        'dashboard': 'Dashboard',
        'orders': 'Order Management',
        'menu': 'Menu Management',
        'analytics': 'Analytics',
        'settings': 'Settings'
    };

    // Handle tab switching
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all nav links
            navLinks.forEach(nav => nav.classList.remove('active'));

            // Add active class to clicked nav link
            this.classList.add('active');

            // Hide all tab contents
            tabContents.forEach(content => content.classList.remove('active'));

            // Show target tab content
            const targetContent = document.getElementById(targetTab);
            if (targetContent) {
                targetContent.classList.add('active');
            }

            // Update page title
            pageTitle.textContent = tabTitles[targetTab] || 'Dashboard';

            // Close sidebar on mobile after selection
            if (window.innerWidth <= 768) {
                sidebar.classList.remove('show');
            }
        });
    });

    // Handle tab links from other sections
    document.querySelectorAll('[data-tab-link]').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetTab = this.getAttribute('data-tab-link');

            // Find and click the corresponding nav link
            const navLink = document.querySelector(`[data-tab="${targetTab}"]`);
            if (navLink) {
                navLink.click();
            }
        });
    });

    // Handle mobile sidebar toggle
    sidebarToggle.addEventListener('click', function () {
        sidebar.classList.toggle('show');
    });

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function (e) {
        if (window.innerWidth <= 768) {
            if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                sidebar.classList.remove('show');
            }
        }
    });

    // Handle window resize
    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) {
            sidebar.classList.remove('show');
        }
    });

    // Store status toggle
    storeToggle.addEventListener('change', function () {
        if (this.checked) {
            storeStatus.className = 'store-status open';
            storeStatus.innerHTML = '<i class="fas fa-circle" style="font-size: 0.5rem;"></i><span>Store Open</span>';
        } else {
            storeStatus.className = 'store-status closed';
            storeStatus.innerHTML = '<i class="fas fa-circle" style="font-size: 0.5rem;"></i><span>Store Closed</span>';
        }
    });

    // Order status change handlers
    document.querySelectorAll('.order-card button').forEach(button => {
        button.addEventListener('click', function () {
            const action = this.textContent.trim();
            const orderCard = this.closest('.order-card');
            const badge = orderCard.querySelector('.badge');

            if (action.includes('Accept')) {
                badge.className = 'badge badge-preparing';
                badge.textContent = 'Preparing';
                this.textContent = 'Mark Ready';
                this.className = 'btn btn-sm btn-primary';
            } else if (action.includes('Mark Ready')) {
                badge.className = 'badge badge-ready';
                badge.textContent = 'Ready for Pickup';
                this.textContent = 'Mark Completed';
                this.className = 'btn btn-sm btn-success';
            } else if (action.includes('Mark Completed')) {
                badge.className = 'badge badge-completed';
                badge.textContent = 'Completed';
                this.style.display = 'none';
            }
        });
    });

    // Menu item availability toggle
    document.querySelectorAll('.menu-item-card .btn-outline-warning').forEach(button => {
        button.addEventListener('click', function () {
            const card = this.closest('.menu-item-card');
            const badge = card.querySelector('.badge');

            if (badge.classList.contains('badge-available')) {
                badge.className = 'badge badge-unavailable';
                badge.textContent = 'Unavailable';
                this.innerHTML = '<i class="fas fa-eye"></i>';
                this.className = 'btn btn-sm btn-success';
            } else {
                badge.className = 'badge badge-available';
                badge.textContent = 'Available';
                this.innerHTML = '<i class="fas fa-eye-slash"></i>';
                this.className = 'btn btn-sm btn-outline-warning';
            }
        });
    });

    // Auto-refresh orders every 30 seconds
    setInterval(function () {
        // In a real application, this would fetch new orders from the server
        console.log('Checking for new orders...');
    }, 30000);

    // Notification sound for new orders (placeholder)
    function playNotificationSound() {
        // In a real application, this would play a notification sound
        console.log('New order notification!');
    }

    // Simulate new order notification every 2 minutes for demo
    setInterval(function () {
        playNotificationSound();
    }, 120000);
});