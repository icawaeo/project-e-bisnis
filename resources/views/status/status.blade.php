   @extends('layouts.app')

   @section('styles')
   <link rel="stylesheet" href="{{ asset('status/status.css') }}">
   @endsection

   @section('scripts')
   <script src="{{ asset('status/status.js') }}"></script>
   @endsection

   @section('title')
   Order Item Status
   @endsection

   @section('content')
   <div class="container-fluid">
       <!-- Header -->
       <div class="header">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-auto">
                       <button class="btn btn-link text-dark p-0">
                           <i class="bi bi-arrow-left fs-4"></i>
                       </button>
                   </div>
                   <div class="col text-center">
                       <h5 class="mb-0 fw-semibold">Order Item</h5>
                   </div>
                   <div class="col-auto">
                       <button class="btn share-btn">
                           <i class="bi bi-share me-1"></i>
                           Share
                       </button>
                   </div>
               </div>
           </div>
       </div>

       <!-- Main Content -->
       <div class="container mt-4">
           <div class="row justify-content-center">
               <div class="col-12 col-lg-8">
                   <div class="card order-card">
                       <div class="card-body p-0">
                           <!-- Order Number Section -->
                           <div class="order-section border-bottom">
                               <div class="section-title">ORDER NUMBER</div>
                               <div class="d-flex align-items-center justify-content-between">
                                   <div class="order-number">171044015790933138</div>
                                   <button class="btn copy-btn">
                                       <i class="bi bi-clipboard"></i>
                                   </button>
                               </div>
                           </div>

                           <!-- Order Progress Section -->
                           <div class="order-section">
                               <div class="section-title">ORDER PROGRESS</div>

                               <div class="progress-container">
                                   <div class="progress-line"></div>
                                   <div class="progress-line-active"></div>

                                   <!-- Step 1: Dalam Proses -->
                                   <div class="progress-step">
                                       <div class="progress-icon">
                                           <i class="bi bi-clock"></i>
                                       </div>
                                       <div class="progress-title">Dalam Proses</div>
                                       <div class="progress-subtitle">Order is being prepared</div>
                                   </div>

                                   <!-- Step 2: Siap Diambil -->
                                   <div class="progress-step">
                                       <div class="progress-icon">
                                           <i class="bi bi-bell"></i>
                                       </div>
                                       <div class="progress-title">Siap Diambil</div>
                                       <div class="progress-subtitle">Ready for pickup</div>
                                   </div>

                                   <!-- Step 3: Makanan Sudah Diambil -->
                                   <div class="progress-step">
                                       <div class="progress-icon inactive">
                                           <i class="bi bi-check-lg"></i>
                                       </div>
                                       <div class="progress-title">Makanan Sudah Diambil</div>
                                       <div class="progress-subtitle">Order has been picked up</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   @endsection