document.addEventListener("DOMContentLoaded", () => {
  // Initialize animations
  initializeAnimations()

  // Add intersection observer for scroll animations
  setupScrollAnimations()
})

// Navigation Functions
function goBack() {
  const backBtn = document.querySelector(".btn-back")
  backBtn.style.opacity = "0.7"

  if (window.history.length > 1) {
    window.history.back()
  } else {
    // Fallback for when there's no history
    window.location.href = "/"
  }
}

// Utility Functions
function copyOrderNumber() {
  const orderNumber = document.getElementById("orderNumber").textContent
  const copyBtn = document.querySelector(".btn-copy")

  // Add visual feedback
  copyBtn.style.transform = "scale(0.95)"
  setTimeout(() => {
    copyBtn.style.transform = "scale(1.05)"
  }, 100)

  navigator.clipboard
    .writeText(orderNumber)
    .then(() => {
      showToast("Order number copied to clipboard!")
      // Add success animation
      copyBtn.innerHTML = '<i class="fas fa-check"></i>'
      setTimeout(() => {
        copyBtn.innerHTML = '<i class="fas fa-copy"></i>'
      }, 2000)
    })
    .catch(() => {
      // Fallback for older browsers
      const textArea = document.createElement("textarea")
      textArea.value = orderNumber
      textArea.style.position = "fixed"
      textArea.style.left = "-999999px"
      textArea.style.top = "-999999px"
      document.body.appendChild(textArea)
      textArea.focus()
      textArea.select()

      try {
        document.execCommand("copy")
        showToast("Order number copied to clipboard!")
        copyBtn.innerHTML = '<i class="fas fa-check"></i>'
        setTimeout(() => {
          copyBtn.innerHTML = '<i class="fas fa-copy"></i>'
        }, 2000)
      } catch (err) {
        showToast("Failed to copy order number", "error")
      }

      document.body.removeChild(textArea)
    })
}

function shareOrder() {
  const orderNumber = document.getElementById("orderNumber").textContent
  const shareBtn = document.querySelector(".btn-share")

  // Add loading state
  const originalContent = shareBtn.innerHTML
  shareBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sharing...'
  shareBtn.disabled = true

  const shareData = {
    title: "Order Tracking",
    text: `Track my order: ${orderNumber}`,
    url: window.location.href,
  }

  if (navigator.share && navigator.canShare && navigator.canShare(shareData)) {
    navigator
      .share(shareData)
      .then(() => {
        showToast("Order shared successfully!", "success")
      })
      .catch((error) => {
        if (error.name !== "AbortError") {
          // Fallback to copy
          copyOrderNumber()
        }
      })
      .finally(() => {
        shareBtn.innerHTML = originalContent
        shareBtn.disabled = false
      })
  } else {
    // Fallback - copy to clipboard
    setTimeout(() => {
      copyOrderNumber()
      shareBtn.innerHTML = originalContent
      shareBtn.disabled = false
    }, 500)
  }
}

// Animation Functions
function initializeAnimations() {
  // Animate progress steps with stagger
  const progressSteps = document.querySelectorAll(".progress-step")
  const connectors = document.querySelectorAll(".progress-connector")

  progressSteps.forEach((step, index) => {
    step.style.opacity = "0"
    step.style.transform = "translateY(20px)"
    step.style.transition = "all 0.5s cubic-bezier(0.4, 0, 0.2, 1)"

    setTimeout(
      () => {
        step.style.opacity = "1"
        step.style.transform = "translateY(0)"
      },
      index * 150 + 400,
    )
  })

  // Animate connectors after steps
  connectors.forEach((connector, index) => {
    if (connector.classList.contains("completed")) {
      setTimeout(
        () => {
          connector.style.animation = "progress-fill 0.6s ease-out forwards"
        },
        (index + 1) * 150 + 700,
      )
    }
  })

  // Animate order number section
  const orderSection = document.querySelector(".order-number-section")
  if (orderSection) {
    orderSection.style.opacity = "0"
    orderSection.style.transform = "translateY(15px)"
    orderSection.style.transition = "all 0.4s cubic-bezier(0.4, 0, 0.2, 1)"

    setTimeout(() => {
      orderSection.style.opacity = "1"
      orderSection.style.transform = "translateY(0)"
    }, 200)
  }

  // Animate progress section
  const progressSection = document.querySelector(".progress-section")
  if (progressSection) {
    progressSection.style.opacity = "0"
    progressSection.style.transform = "translateY(15px)"
    progressSection.style.transition = "all 0.4s cubic-bezier(0.4, 0, 0.2, 1)"

    setTimeout(() => {
      progressSection.style.opacity = "1"
      progressSection.style.transform = "translateY(0)"
    }, 300)
  }
}

function setupScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-in")
      }
    })
  }, observerOptions)

  // Observe elements for scroll animations
  document.querySelectorAll(".order-card").forEach((el) => {
    observer.observe(el)
  })
}

// Toast Notifications
function showToast(message, type = "success") {
  const toastElement = document.getElementById("successToast")
  const toastBody = toastElement.querySelector(".toast-body")
  const toastIcon = toastElement.querySelector(".toast-icon i")

  toastBody.textContent = message

  // Update icon and colors based on type
  const iconClass = getIconClass(type)
  toastIcon.className = `fas ${iconClass}`

  // Update toast header color
  const toastHeader = toastElement.querySelector(".toast-header")
  toastHeader.style.background = type === "error" ? "#fee2e2" : "var(--orange-pastel)"

  const toast = new window.bootstrap.Toast(toastElement, {
    autohide: true,
    delay: 3000,
  })

  toast.show()

  // Add entrance animation
  toastElement.style.transform = "translateX(100%)"
  toastElement.style.transition = "transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)"

  setTimeout(() => {
    toastElement.style.transform = "translateX(0)"
  }, 100)
}

function getIconClass(type) {
  const icons = {
    success: "fa-check-circle",
    warning: "fa-exclamation-triangle",
    error: "fa-times-circle",
    info: "fa-info-circle",
  }
  return icons[type] || icons.success
}

// Loading States
function showLoading(message = "Loading...") {
  const loadingOverlay = document.createElement("div")
  loadingOverlay.id = "loadingOverlay"
  loadingOverlay.className = "position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
  loadingOverlay.style.cssText = `
    background: rgba(255, 255, 255, 0.95);
    z-index: 9999;
    backdrop-filter: blur(8px);
  `

  loadingOverlay.innerHTML = `
    <div class="text-center">
      <div class="spinner-border mb-3" style="color: var(--primary-orange); width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="fw-semibold" style="color: var(--gray-600);">${message}</div>
    </div>
  `

  document.body.appendChild(loadingOverlay)

  // Animate in
  loadingOverlay.style.opacity = "0"
  setTimeout(() => {
    loadingOverlay.style.transition = "opacity 0.3s ease"
    loadingOverlay.style.opacity = "1"
  }, 10)
}

function hideLoading() {
  const loadingOverlay = document.getElementById("loadingOverlay")
  if (loadingOverlay) {
    loadingOverlay.style.opacity = "0"
    setTimeout(() => {
      loadingOverlay.remove()
    }, 300)
  }
}

// Keyboard Navigation
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    // Close any open toasts
    const toasts = document.querySelectorAll(".toast.show")
    toasts.forEach((toast) => {
      const bsToast = window.bootstrap.Toast.getInstance(toast)
      if (bsToast) bsToast.hide()
    })
  }

  if (e.key === "c" && (e.ctrlKey || e.metaKey)) {
    e.preventDefault()
    copyOrderNumber()
  }
})

// Performance optimization
function debounce(func, wait) {
  let timeout
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout)
      func(...args)
    }
    clearTimeout(timeout)
    timeout = setTimeout(later, wait)
  }
}

// Responsive handling
const handleResize = debounce(() => {
  // Recalculate any dynamic positioning if needed
  const connectors = document.querySelectorAll(".progress-connector")
  if (window.innerWidth <= 768) {
    connectors.forEach((connector) => {
      connector.style.display = "none"
    })
  } else {
    connectors.forEach((connector) => {
      connector.style.display = "block"
    })
  }
}, 250)

window.addEventListener("resize", handleResize)

// Initialize on load
handleResize()
