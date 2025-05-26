    @extends('layouts.app')

    @section('styles')
    <link rel="stylesheet" href="{{ asset('sellerDashboard/css.css') }}">
    @endsection

    @section('scripts')
    <script src="{{ asset('sellerDashboard/js.js') }}"></script>
    @endsection

    @section('title')
    eKanteen Seller Dashboard
    @endsection

    @section('content')
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">eK</div>
            <div>
                <h6 class="mb-0 fw-bold">Warung Makan Sederhana</h6>
                <small class="text-muted">Seller Dashboard</small>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-tab="dashboard">
                        <i class="fas fa-chart-line"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-tab="orders">
                        <i class="fas fa-shopping-bag"></i>
                        Orders
                        <span class="badge bg-danger ms-auto">5</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-tab="menu">
                        <i class="fas fa-utensils"></i>
                        Menu Management
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="top-header">
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary mobile-toggle me-3" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <h2 class="mb-0 fw-bold me-3" id="pageTitle">Dashboard</h2>
                <div class="store-status open" id="storeStatus">
                    <i class="fas fa-circle" style="font-size: 0.5rem;"></i>
                    <span>Store Open</span>
                </div>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search orders..." style="padding-left: 2.5rem; width: 250px;">
                    <i class="fas fa-search position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: #6b7280;"></i>
                </div>
                <div class="position-relative">
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-bell"></i>
                    </button>
                    <span class="notification-badge">5</span>
                </div>
                <div class="d-flex align-items-center justify-content-center bg-success text-white rounded-circle" style="width: 40px; height: 40px;">
                    PJ
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <div class="content-area">
            <!-- Dashboard Tab -->
            <div class="tab-content active" id="dashboard">
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card stat-card green h-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Today's Orders</h6>
                                <h2 class="card-title mb-1">23</h2>
                                <small class="text-success">+15% from yesterday</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card stat-card orange h-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Today's Revenue</h6>
                                <h2 class="card-title mb-1">Rp 850K</h2>
                                <small class="text-warning">+8% from yesterday</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card stat-card blue h-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Pending Orders</h6>
                                <h2 class="card-title mb-1">5</h2>
                                <small class="text-primary">Needs attention</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card stat-card purple h-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Average Rating</h6>
                                <h2 class="card-title mb-1">4.5</h2>
                                <small style="color: #8b5cf6;">⭐ Based on 127 reviews</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders & Popular Items -->
                <div class="row">
                    <div class="col-lg-8 mb-4">
                        <div class="card h-100">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title mb-0">Recent Orders</h5>
                                    <small class="text-muted">Latest incoming orders</small>
                                </div>
                                <a href="#" class="btn btn-sm btn-outline-primary" data-tab-link="orders">View All</a>
                            </div>
                            <div class="card-body">
                                <div class="order-card new-order">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="mb-1">#ORD-2024-001</h6>
                                            <p class="mb-1 text-muted">Ahmad Rizki</p>
                                            <small class="text-muted">2 minutes ago</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-bold">Rp 45,000</div>
                                            <span class="badge badge-pending">New Order</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">Items: Nasi Gudeg (2x), Es Teh Manis (1x)</small>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-success">Accept</button>
                                        <button class="btn btn-sm btn-outline-danger">Decline</button>
                                    </div>
                                </div>

                                <div class="order-card">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="mb-1">#ORD-2024-002</h6>
                                            <p class="mb-1 text-muted">Sari Dewi</p>
                                            <small class="text-muted">5 minutes ago</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-bold">Rp 25,000</div>
                                            <span class="badge badge-preparing">Preparing</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">Items: Gado-gado (1x), Jus Alpukat (1x)</small>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-primary">Mark Ready</button>
                                        <button class="btn btn-sm btn-outline-secondary">View Details</button>
                                    </div>
                                </div>

                                <div class="order-card">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="mb-1">#ORD-2024-003</h6>
                                            <p class="mb-1 text-muted">Budi Santoso</p>
                                            <small class="text-muted">8 minutes ago</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-bold">Rp 35,000</div>
                                            <span class="badge badge-ready">Ready</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">Items: Ayam Bakar (1x), Nasi Putih (1x)</small>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-success">Mark Completed</button>
                                        <button class="btn btn-sm btn-outline-secondary">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Popular Items Today</h5>
                                <small class="text-muted">Best selling items</small>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3 p-2 bg-light rounded">
                                    <div>
                                        <div class="fw-semibold">Nasi Gudeg</div>
                                        <small class="text-muted">8 orders</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">Rp 20,000</div>
                                        <small class="text-success">+25%</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3 p-2 bg-light rounded">
                                    <div>
                                        <div class="fw-semibold">Gado-gado</div>
                                        <small class="text-muted">6 orders</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">Rp 15,000</div>
                                        <small class="text-success">+12%</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-3 p-2 bg-light rounded">
                                    <div>
                                        <div class="fw-semibold">Es Teh Manis</div>
                                        <small class="text-muted">12 orders</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">Rp 5,000</div>
                                        <small class="text-success">+8%</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center p-2 bg-light rounded">
                                    <div>
                                        <div class="fw-semibold">Ayam Bakar</div>
                                        <small class="text-muted">4 orders</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="fw-bold">Rp 25,000</div>
                                        <small class="text-success">+5%</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders Tab -->
            <div class="tab-content" id="orders">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-semibold">Order Management</h3>
                        <p class="text-muted mb-0">Manage incoming orders and update status</p>
                    </div>
                    <div class="d-flex gap-2">
                        <select class="form-select" style="width: auto;">
                            <option>All Orders</option>
                            <option>Pending</option>
                            <option>Preparing</option>
                            <option>Ready</option>
                            <option>Completed</option>
                        </select>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-refresh me-2"></i>Refresh
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="order-card new-order">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div>
                                            <h5 class="mb-1">#ORD-2024-001</h5>
                                            <p class="mb-1">Customer: <strong>Ahmad Rizki</strong></p>
                                            <small class="text-muted">
                                                <i class="fas fa-clock me-1"></i>Ordered 2 minutes ago
                                            </small>
                                        </div>
                                        <span class="badge badge-pending fs-6">New Order</span>
                                    </div>
                                    <div class="mb-3">
                                        <h6>Order Items:</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex justify-content-between">
                                                <span>Nasi Gudeg x2</span>
                                                <span>Rp 40,000</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <span>Es Teh Manis x1</span>
                                                <span>Rp 5,000</span>
                                            </li>
                                        </ul>
                                        <hr>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Total:</span>
                                            <span>Rp 45,000</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted">
                                            <i class="fas fa-sticky-note me-1"></i>
                                            Special request: Extra sambal, less spicy
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success">
                                            <i class="fas fa-check me-2"></i>Accept Order
                                        </button>
                                        <button class="btn btn-outline-danger">
                                            <i class="fas fa-times me-2"></i>Decline Order
                                        </button>
                                        <button class="btn btn-outline-secondary">
                                            <i class="fas fa-phone me-2"></i>Call Customer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-card">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div>
                                            <h5 class="mb-1">#ORD-2024-002</h5>
                                            <p class="mb-1">Customer: <strong>Sari Dewi</strong></p>
                                            <small class="text-muted">
                                                <i class="fas fa-clock me-1"></i>Ordered 5 minutes ago
                                            </small>
                                        </div>
                                        <span class="badge badge-preparing fs-6">Preparing</span>
                                    </div>
                                    <div class="mb-3">
                                        <h6>Order Items:</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex justify-content-between">
                                                <span>Gado-gado x1</span>
                                                <span>Rp 15,000</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <span>Jus Alpukat x1</span>
                                                <span>Rp 10,000</span>
                                            </li>
                                        </ul>
                                        <hr>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Total:</span>
                                            <span>Rp 25,000</span>
                                        </div>
                                    </div>
                                    <div class="progress mb-2" style="height: 6px;">
                                        <div class="progress-bar bg-warning" style="width: 60%"></div>
                                    </div>
                                    <small class="text-muted">Estimated completion: 8 minutes</small>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary">
                                            <i class="fas fa-check-circle me-2"></i>Mark as Ready
                                        </button>
                                        <button class="btn btn-outline-warning">
                                            <i class="fas fa-clock me-2"></i>Add 5 Minutes
                                        </button>
                                        <button class="btn btn-outline-secondary">
                                            <i class="fas fa-phone me-2"></i>Call Customer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="order-card">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div>
                                            <h5 class="mb-1">#ORD-2024-003</h5>
                                            <p class="mb-1">Customer: <strong>Budi Santoso</strong></p>
                                            <small class="text-muted">
                                                <i class="fas fa-clock me-1"></i>Ordered 8 minutes ago
                                            </small>
                                        </div>
                                        <span class="badge badge-ready fs-6">Ready for Pickup</span>
                                    </div>
                                    <div class="mb-3">
                                        <h6>Order Items:</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex justify-content-between">
                                                <span>Ayam Bakar x1</span>
                                                <span>Rp 25,000</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <span>Nasi Putih x1</span>
                                                <span>Rp 5,000</span>
                                            </li>
                                            <li class="d-flex justify-content-between">
                                                <span>Es Jeruk x1</span>
                                                <span>Rp 5,000</span>
                                            </li>
                                        </ul>
                                        <hr>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Total:</span>
                                            <span>Rp 35,000</span>
                                        </div>
                                    </div>
                                    <div class="alert alert-success py-2 mb-2">
                                        <i class="fas fa-check-circle me-2"></i>
                                        Order is ready for pickup!
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success">
                                            <i class="fas fa-handshake me-2"></i>Mark as Completed
                                        </button>
                                        <button class="btn btn-outline-secondary">
                                            <i class="fas fa-phone me-2"></i>Call Customer
                                        </button>
                                        <button class="btn btn-outline-info">
                                            <i class="fas fa-print me-2"></i>Print Receipt
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Management Tab -->
            <div class="tab-content" id="menu">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-semibold">Menu Management</h3>
                        <p class="text-muted mb-0">Manage your menu items and availability</p>
                    </div>
                    <div class="d-flex gap-2">
                        <select class="form-select" style="width: auto;">
                            <option>All Categories</option>
                            <option>Main Dishes</option>
                            <option>Beverages</option>
                            <option>Snacks</option>
                            <option>Desserts</option>
                        </select>
                        <button class="btn btn-primary-green" data-bs-toggle="modal" data-bs-target="#addMenuModal">
                            <i class="fas fa-plus me-2"></i>Add New Item
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-item-card">
                            <div class="menu-item-image">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-1">Nasi Gudeg</h5>
                                    <span class="badge badge-available">Available</span>
                                </div>
                                <p class="card-text text-muted small mb-2">Traditional Javanese dish with young jackfruit, served with rice</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="h5 mb-0 text-success">Rp 20,000</span>
                                    <small class="text-muted">Sold: 8 today</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary flex-fill">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-item-card">
                            <div class="menu-item-image">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-1">Gado-gado</h5>
                                    <span class="badge badge-available">Available</span>
                                </div>
                                <p class="card-text text-muted small mb-2">Indonesian salad with peanut sauce dressing</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="h5 mb-0 text-success">Rp 15,000</span>
                                    <small class="text-muted">Sold: 6 today</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary flex-fill">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-item-card">
                            <div class="menu-item-image">
                                <i class="fas fa-drumstick-bite"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-1">Ayam Bakar</h5>
                                    <span class="badge badge-unavailable">Out of Stock</span>
                                </div>
                                <p class="card-text text-muted small mb-2">Grilled chicken with special Indonesian spices</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="h5 mb-0 text-success">Rp 25,000</span>
                                    <small class="text-muted">Sold: 4 today</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary flex-fill">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-success">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-item-card">
                            <div class="menu-item-image">
                                <i class="fas fa-coffee"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-1">Es Teh Manis</h5>
                                    <span class="badge badge-available">Available</span>
                                </div>
                                <p class="card-text text-muted small mb-2">Sweet iced tea, perfect for hot weather</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="h5 mb-0 text-success">Rp 5,000</span>
                                    <small class="text-muted">Sold: 12 today</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary flex-fill">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-item-card">
                            <div class="menu-item-image">
                                <i class="fas fa-glass-whiskey"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-1">Jus Alpukat</h5>
                                    <span class="badge badge-available">Available</span>
                                </div>
                                <p class="card-text text-muted small mb-2">Fresh avocado juice with milk and palm sugar</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="h5 mb-0 text-success">Rp 10,000</span>
                                    <small class="text-muted">Sold: 3 today</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary flex-fill">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="menu-item-card">
                            <div class="menu-item-image">
                                <i class="fas fa-lemon"></i>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="card-title mb-1">Es Jeruk</h5>
                                    <span class="badge badge-available">Available</span>
                                </div>
                                <p class="card-text text-muted small mb-2">Fresh orange juice with ice</p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="h5 mb-0 text-success">Rp 8,000</span>
                                    <small class="text-muted">Sold: 5 today</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-sm btn-outline-primary flex-fill">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-sm btn-outline-warning">
                                        <i class="fas fa-eye-slash"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Menu Item Modal -->
            <div class="modal fade" id="addMenuModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Menu Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="itemName" class="form-label">Item Name</label>
                                        <input type="text" class="form-control" id="itemName" placeholder="Enter item name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="itemCategory" class="form-label">Category</label>
                                        <select class="form-select" id="itemCategory">
                                            <option>Main Dishes</option>
                                            <option>Beverages</option>
                                            <option>Snacks</option>
                                            <option>Desserts</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="itemDescription" class="form-label">Description</label>
                                    <textarea class="form-control" id="itemDescription" rows="3" placeholder="Describe your menu item"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="itemPrice" class="form-label">Price (Rp)</label>
                                        <input type="number" class="form-control" id="itemPrice" placeholder="0">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="itemImage" class="form-label">Item Image</label>
                                        <input type="file" class="form-control" id="itemImage" accept="image/*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="itemAvailable" checked>
                                            <label class="form-check-label" for="itemAvailable">
                                                Available for order
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="itemFeatured">
                                            <label class="form-check-label" for="itemFeatured">
                                                Featured item
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary-green">Add Item</button>
                        </div>
                    </div>
                </div>
            </div>
            @endsection