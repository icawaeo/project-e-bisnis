document.addEventListener("DOMContentLoaded", () => {
  // Toggle Password Visibility
  const togglePassword = document.getElementById("togglePassword")
  const passwordInput = document.getElementById("password")

  togglePassword.addEventListener("click", function () {
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
    passwordInput.setAttribute("type", type)

    const icon = this.querySelector("i")
    icon.classList.toggle("fa-eye")
    icon.classList.toggle("fa-eye-slash")
  })

  // Form Validation and Submission
  const form = document.querySelector("form")
  const submitBtn = document.querySelector(".custom-btn")

  form.addEventListener("submit", (e) => {
    e.preventDefault()

    // Add loading state
    submitBtn.classList.add("btn-loading")
    submitBtn.disabled = true

    // Simulate API call
    setTimeout(() => {
      submitBtn.classList.remove("btn-loading")
      submitBtn.disabled = false

      // Show success message (you can replace this with actual login logic)
      showNotification("Login successful!", "success")
    }, 2000)
  })

  // Input Animation
  const inputs = document.querySelectorAll(".custom-input")
  inputs.forEach((input) => {
    input.addEventListener("focus", function () {
      this.parentElement.classList.add("focused")
    })

    input.addEventListener("blur", function () {
      if (!this.value) {
        this.parentElement.classList.remove("focused")
      }
    })
  })

  // Notification System
  function showNotification(message, type = "info") {
    const notification = document.createElement("div")
    notification.className = `alert alert-${type === "success" ? "success" : "danger"} position-fixed`
    notification.style.cssText = `
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            animation: slideIn 0.3s ease;
        `
    notification.innerHTML = `
            <i class="fas fa-${type === "success" ? "check-circle" : "exclamation-circle"} me-2"></i>
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `

    document.body.appendChild(notification)

    // Auto remove after 3 seconds
    setTimeout(() => {
      notification.remove()
    }, 3000)
  }

  // Add CSS for slide animation
  const style = document.createElement("style")
  style.textContent = `
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    `
  document.head.appendChild(style)
})
