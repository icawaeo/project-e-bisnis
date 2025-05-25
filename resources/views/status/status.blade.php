   @extends('layouts.app')

   @section('styles')
   <link rel="stylesheet" href="{{ asset('status/status.css') }}">
   @endsection
   
   @section('content')
   <!-- Header -->
   <div class="header-container">
       <div class="container-fluid">
           <div class="header-content">
               <button class="btn-back" onclick="goBack()">
                   <i class="fas fa-arrow-left"></i>
               </button>
               <h1 class="header-title">Order Item</h1>
               <button class="btn-share" onclick="shareOrder()">
                   <i class="fas fa-share-alt me-2"></i>
                   Share
               </button>
           </div>
       </div>
   </div>

   <!-- Main Content -->
   <div class="main-container">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-12 col-lg-8 col-xl-6">

                   <!-- Combined Order Card -->
                   <div class="order-card">
                       <!-- Order Number Section -->
                       <div class="order-number-section">
                           <span class="section-label">ORDER NUMBER</span>
                           <div class="order-number-display">
                               <span class="order-number" id="orderNumber">171044015790933138</span>
                               <button class="btn-copy" onclick="copyOrderNumber()" title="Copy order number">
                                   <i class="fas fa-copy"></i>
                               </button>
                           </div>
                       </div>

                       <!-- Divider -->
                       <div class="section-divider"></div>

                       <!-- Progress Section -->
                       <div class="progress-section">
                           <span class="section-label">ORDER PROGRESS</span>
                           <div class="progress-tracker">

                               <!-- Step 1 -->
                               <div class="progress-step completed">
                                   <div class="step-circle">
                                       <i class="fas fa-clock"></i>
                                   </div>
                                   <div class="step-content">
                                       <h6 class="step-title">Dalam Proses</h6>
                                       <p class="step-description">Order is being prepared</p>
                                   </div>
                               </div>

                               <!-- Connector Line 1 -->
                               <div class="progress-connector completed"></div>

                               <!-- Step 2 -->
                               <div class="progress-step completed">
                                   <div class="step-circle">
                                       <i class="fas fa-bell"></i>
                                   </div>
                                   <div class="step-content">
                                       <h6 class="step-title">Siap Diambil</h6>
                                       <p class="step-description">Ready for pickup</p>
                                   </div>
                               </div>

                               <!-- Connector Line 2 -->
                               <div class="progress-connector completed"></div>

                               <!-- Step 3 -->
                               <div class="progress-step completed">
                                   <div class="step-circle">
                                       <i class="fas fa-check"></i>
                                   </div>
                                   <div class="step-content">
                                       <h6 class="step-title">Makanan Sudah Diambil</h6>
                                       <p class="step-description">Order has been picked up</p>
                                   </div>
                               </div>

                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </div>

   <!-- Success Toast -->
   <div class="toast-container position-fixed bottom-0 end-0 p-3">
       <div id="successToast" class="toast custom-toast" role="alert" aria-live="assertive" aria-atomic="true">
           <div class="toast-header">
               <div class="toast-icon">
                   <i class="fas fa-check-circle"></i>
               </div>
               <strong class="me-auto">Success</strong>
               <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
           </div>
           <div class="toast-body">
               Order number copied to clipboard!
           </div>
       </div>
   </div>

   <script src="{{ asset('status/status.js') }}"></script>
   @endsection