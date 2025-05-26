@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('adminDashboard/css.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('adminDashboard/js.js') }}"></script>
@endsection

@section('title')
eKanteen Admin Dashboard
@endsection

@section('content')
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">eK</div>
            <h5 class="mb-0 fw-bold">eKanteen Admin</h5>
        </div>
        <nav class="sidebar-nav">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-tab="overview">
                        <i class="fas fa-chart-bar"></i>
                        Overview
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-tab="users">
                        <i class="fas fa-users"></i>
                        User Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-tab="sellers">
                        <i class="fas fa-store"></i>
                        Seller Management
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-tab="transactions">
                        <i class="fas fa-credit-card"></i>
                        Transactions
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#" data-tab="settings">
                        <i class="fas fa-cog"></i>
                        Settings
                    </a>
                </li> -->
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
                <h2 class="mb-0 fw-bold" id="pageTitle">Dashboard Overview</h2>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search..." style="padding-left: 2.5rem; width: 250px;">
                    <i class="fas fa-search position-absolute" style="left: 0.75rem; top: 50%; transform: translateY(-50%); color: #6b7280;"></i>
                </div>
                <div class="position-relative">
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-bell"></i>
                    </button>
                    <span class="notification-badge">3</span>
                </div>
                <div class="d-flex align-items-center justify-content-center bg-success text-white rounded-circle" style="width: 40px; height: 40px;">
                    AD
                </div>
            </div>
        </header>

        <!-- Content Area -->
        <div class="content-area">
            <!-- Overview Tab -->
            <div class="tab-content active" id="overview">
                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card stat-card green h-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Total Users</h6>
                                <h2 class="card-title mb-1">1,234</h2>
                                <small class="text-success">+12% from last month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card stat-card orange h-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Active Sellers</h6>
                                <h2 class="card-title mb-1">89</h2>
                                <small class="text-warning">+5% from last month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card stat-card blue h-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Total Transactions</h6>
                                <h2 class="card-title mb-1">5,678</h2>
                                <small class="text-primary">+18% from last month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card stat-card purple h-100">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">Revenue</h6>
                                <h2 class="card-title mb-1">Rp 125M</h2>
                                <small style="color: #8b5cf6;">+22% from last month</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Recent Transactions</h5>
                                <small class="text-muted">Latest transaction activities</small>
                            </div>
                            <div class="card-body">
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="fw-semibold">Ahmad Rizki</div>
                                            <small class="text-muted">Warung Makan Sederhana</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-semibold">Rp 25,000</div>
                                            <span class="badge badge-completed">Completed</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="fw-semibold">Sari Dewi</div>
                                            <small class="text-muted">Kantin Sehat</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-semibold">Rp 35,000</div>
                                            <span class="badge badge-pending">Pending</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="fw-semibold">Maya Putri</div>
                                            <small class="text-muted">Juice Corner</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-semibold">Rp 15,000</div>
                                            <span class="badge badge-completed">Completed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Top Sellers</h5>
                                <small class="text-muted">Best performing sellers this month</small>
                            </div>
                            <div class="card-body">
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="fw-semibold">Warung Makan Sederhana</div>
                                            <small class="text-muted">Indonesian Food</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-semibold">Rp 15,000,000</div>
                                            <small class="text-warning">⭐ 4.5</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="fw-semibold">Kantin Sehat</div>
                                            <small class="text-muted">Healthy Food</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-semibold">Rp 22,000,000</div>
                                            <small class="text-warning">⭐ 4.8</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-activity-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="fw-semibold">Bakso Malang</div>
                                            <small class="text-muted">Street Food</small>
                                        </div>
                                        <div class="text-end">
                                            <div class="fw-semibold">Rp 8,500,000</div>
                                            <small class="text-warning">⭐ 4.2</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Tab -->
            <div class="tab-content" id="users">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-semibold">User Management</h3>
                        <p class="text-muted mb-0">Manage all registered users</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>nim</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td class="fw-semibold">{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->nim }}</td>
                                        <td>{{ ucfirst($user->role) }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sellers Tab -->
            <div class="tab-content" id="sellers">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-semibold">Seller Management</h3>
                        <p class="text-muted mb-0">Manage all registered sellers and vendors</p>
                    </div>
                    <!-- <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-filter me-2"></i>Filter
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-download me-2"></i>Export
                        </button>
                        <button class="btn btn-primary-orange">
                            <i class="fas fa-plus me-2"></i>Add Seller
                        </button>
                    </div> -->
                </div>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Seller Name</th>
                                        <th>Owner</th>
                                        <th>Category</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                        <th>Revenue</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">Warung Makan Sederhana</td>
                                        <td>Pak Joko</td>
                                        <td>Indonesian Food</td>
                                        <td>⭐ 4.5</td>
                                        <td><span class="badge badge-active">Active</span></td>
                                        <td class="fw-semibold">Rp 15,000,000</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Kantin Sehat</td>
                                        <td>Bu Sari</td>
                                        <td>Healthy Food</td>
                                        <td>⭐ 4.8</td>
                                        <td><span class="badge badge-active">Active</span></td>
                                        <td class="fw-semibold">Rp 22,000,000</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Bakso Malang</td>
                                        <td>Pak Budi</td>
                                        <td>Street Food</td>
                                        <td>⭐ 4.2</td>
                                        <td><span class="badge badge-pending">Pending</span></td>
                                        <td class="fw-semibold">Rp 8,500,000</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">Juice Corner</td>
                                        <td>Bu Maya</td>
                                        <td>Beverages</td>
                                        <td>⭐ 4.6</td>
                                        <td><span class="badge badge-active">Active</span></td>
                                        <td class="fw-semibold">Rp 12,000,000</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transactions Tab -->
            <div class="tab-content" id="transactions">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h3 class="fw-semibold">Transaction Management</h3>
                        <p class="text-muted mb-0">Monitor and manage all transactions</p>
                    </div>
                    <!-- <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-filter me-2"></i>Filter
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-download me-2"></i>Export
                        </button>
                    </div> -->
                </div>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>User</th>
                                        <th>Seller</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">TXN001</td>
                                        <td>Ahmad Rizki</td>
                                        <td>Warung Makan Sederhana</td>
                                        <td class="fw-semibold">Rp 25,000</td>
                                        <td>E-Wallet</td>
                                        <td><span class="badge badge-completed">Completed</span></td>
                                        <td>2024-05-26</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Mark as Completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark as Failed</a></li>
                                                        <li><a class="dropdown-item" href="#">Refund</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">TXN002</td>
                                        <td>Sari Dewi</td>
                                        <td>Kantin Sehat</td>
                                        <td class="fw-semibold">Rp 35,000</td>
                                        <td>Bank Transfer</td>
                                        <td><span class="badge badge-pending">Pending</span></td>
                                        <td>2024-05-26</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Mark as Completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark as Failed</a></li>
                                                        <li><a class="dropdown-item" href="#">Refund</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">TXN003</td>
                                        <td>Maya Putri</td>
                                        <td>Juice Corner</td>
                                        <td class="fw-semibold">Rp 15,000</td>
                                        <td>Cash</td>
                                        <td><span class="badge badge-completed">Completed</span></td>
                                        <td>2024-05-25</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Mark as Completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark as Failed</a></li>
                                                        <li><a class="dropdown-item" href="#">Refund</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">TXN004</td>
                                        <td>Budi Santoso</td>
                                        <td>Bakso Malang</td>
                                        <td class="fw-semibold">Rp 20,000</td>
                                        <td>E-Wallet</td>
                                        <td><span class="badge badge-failed">Failed</span></td>
                                        <td>2024-05-25</td>
                                        <td>
                                            <div class="table-actions">
                                                <button class="btn btn-sm btn-outline-secondary">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Mark as Completed</a></li>
                                                        <li><a class="dropdown-item" href="#">Mark as Failed</a></li>
                                                        <li><a class="dropdown-item" href="#">Refund</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Settings Tab -->
            <!-- <div class="tab-content" id="settings">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">General Settings</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="siteName" class="form-label">Site Name</label>
                                        <input type="text" class="form-control" id="siteName" value="eKanteen UNSRAT">
                                    </div>
                                    <div class="mb-3">
                                        <label for="siteDescription" class="form-label">Site Description</label>
                                        <textarea class="form-control" id="siteDescription" rows="3">Food delivery platform for UNSRAT university community</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="contactEmail" class="form-label">Contact Email</label>
                                        <input type="email" class="form-control" id="contactEmail" value="admin@ekanteen.unsrat.ac.id">
                                    </div>
                                    <div class="mb-3">
                                        <label for="timezone" class="form-label">Timezone</label>
                                        <select class="form-select" id="timezone">
                                            <option selected>Asia/Makassar (WITA)</option>
                                            <option>Asia/Jakarta (WIB)</option>
                                            <option>Asia/Jayapura (WIT)</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary-green">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Quick Actions</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-secondary">
                                        <i class="fas fa-database me-2"></i>Backup Database
                                    </button>
                                    <button class="btn btn-outline-secondary">
                                        <i class="fas fa-broom me-2"></i>Clear Cache
                                    </button>
                                    <button class="btn btn-outline-secondary">
                                        <i class="fas fa-file-export me-2"></i>Export Data
                                    </button>
                                    <button class="btn btn-outline-danger">
                                        <i class="fas fa-exclamation-triangle me-2"></i>System Maintenance
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
@endsection