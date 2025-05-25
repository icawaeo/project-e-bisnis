document.addEventListener("DOMContentLoaded", () => {
  // Initialize date picker
  initializeDatePicker()

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

  // Password Strength Checker
  passwordInput.addEventListener("input", function () {
    checkPasswordStrength(this.value)
  })

  // NIM Validation
  const nimInput = document.getElementById("nim")
  nimInput.addEventListener("input", function () {
    // Only allow numbers
    this.value = this.value.replace(/[^0-9]/g, "")

    // Validate NIM format
    validateNIM(this.value)
  })

  // Form Validation and Submission
  const form = document.getElementById("signupForm")
  const submitBtn = document.querySelector(".custom-btn")

  form.addEventListener("submit", (e) => {
    e.preventDefault()

    // Additional NIM validation
    const nimValue = nimInput.value.trim()
    if (!/^[0-9]{8,12}$/.test(nimValue)) {
      showNotification("Please enter a valid NIM (8-12 digits)", "error")
      nimInput.focus()
      return
    }

    if (form.checkValidity()) {
      // Add loading state
      submitBtn.classList.add("btn-loading")
      submitBtn.disabled = true

      // Simulate API call
      setTimeout(() => {
        submitBtn.classList.remove("btn-loading")
        submitBtn.disabled = false

        // Show success message
        showNotification("Student account created successfully! Welcome aboard!", "success")

        // Add success animation to card
        document.querySelector(".signup-card").classList.add("success-animation")

        // Reset form
        form.reset()
        form.classList.remove("was-validated")
        updatePasswordStrength(0, "Weak")
      }, 2500)
    }

    form.classList.add("was-validated")
  })

  // Input Animation
  const inputs = document.querySelectorAll(".custom-input, .custom-select")
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

  // Date Picker Toggle
  const toggleDatePicker = document.getElementById("toggleDatePicker")
  const simpleDatePicker = document.getElementById("dateOfBirth").parentElement.parentElement
  const advancedDatePicker = document.getElementById("advancedDatePicker")

  toggleDatePicker?.addEventListener("click", (e) => {
    e.preventDefault()
    simpleDatePicker.classList.toggle("d-none")
    advancedDatePicker.classList.toggle("d-none")

    if (advancedDatePicker.classList.contains("d-none")) {
      toggleDatePicker.textContent = "Use advanced date picker"
    } else {
      toggleDatePicker.textContent = "Use simple date picker"
    }
  })

  // Social Login Handlers
  document.querySelector(".btn-outline-danger").addEventListener("click", () => {
    showNotification("Google signup will be available soon!", "info")
  })

  document.querySelector(".btn-outline-primary").addEventListener("click", () => {
    showNotification("Facebook signup will be available soon!", "info")
  })

  // Password Strength Function
  function checkPasswordStrength(password) {
    let strength = 0
    let strengthText = "Weak"

    if (password.length >= 8) strength += 1
    if (password.match(/[a-z]/)) strength += 1
    if (password.match(/[A-Z]/)) strength += 1
    if (password.match(/[0-9]/)) strength += 1
    if (password.match(/[^a-zA-Z0-9]/)) strength += 1

    switch (strength) {
      case 0:
      case 1:
        strengthText = "Very Weak"
        break
      case 2:
        strengthText = "Weak"
        break
      case 3:
        strengthText = "Fair"
        break
      case 4:
        strengthText = "Good"
        break
      case 5:
        strengthText = "Strong"
        break
    }

    updatePasswordStrength(strength, strengthText)
  }

  function updatePasswordStrength(strength, text) {
    const strengthBar = document.querySelector(".strength-bar")
    const strengthLevel = document.getElementById("strengthLevel")

    const percentage = (strength / 5) * 100
    strengthBar.style.width = percentage + "%"

    // Color coding with orange theme
    if (strength <= 1) {
      strengthBar.style.backgroundColor = "#e74c3c"
    } else if (strength <= 2) {
      strengthBar.style.backgroundColor = "#f39c12"
    } else if (strength <= 3) {
      strengthBar.style.backgroundColor = "#ff9933"
    } else if (strength <= 4) {
      strengthBar.style.backgroundColor = "#ffb366"
    } else {
      strengthBar.style.backgroundColor = "#27ae60"
    }

    strengthLevel.textContent = text
  }

  // NIM Validation Function
  function validateNIM(nim) {
    const nimFeedback = nimInput.parentElement.parentElement.querySelector(".invalid-feedback")

    if (nim.length === 0) {
      nimFeedback.textContent = "Please provide a valid NIM (8-12 digits)."
    } else if (nim.length < 8) {
      nimFeedback.textContent = `NIM too short. Need ${8 - nim.length} more digits.`
    } else if (nim.length > 12) {
      nimFeedback.textContent = "NIM too long. Maximum 12 digits allowed."
    } else {
      nimFeedback.textContent = "Please provide a valid NIM (8-12 digits)."
    }
  }

  // Notification System
  function showNotification(message, type = "info") {
    const notification = document.createElement("div")
    notification.className = `alert alert-${type === "success" ? "success" : type === "error" ? "danger" : "info"} position-fixed`
    notification.style.cssText = `
      top: 20px;
      right: 20px;
      z-index: 9999;
      min-width: 300px;
      max-width: 400px;
      animation: slideIn 0.3s ease;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    `

    const iconClass = type === "success" ? "check-circle" : type === "error" ? "exclamation-circle" : "info-circle"

    notification.innerHTML = `
      <i class="fas fa-${iconClass} me-2"></i>
      ${message}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `

    document.body.appendChild(notification)

    // Auto remove after 4 seconds
    setTimeout(() => {
      if (notification.parentNode) {
        notification.remove()
      }
    }, 4000)
  }

  // Initialize Date Picker
  function initializeDatePicker() {
    const daySelect = document.getElementById("birthDay")
    const yearSelect = document.getElementById("birthYear")

    // Populate days
    for (let i = 1; i <= 31; i++) {
      const option = document.createElement("option")
      option.value = i
      option.textContent = i
      daySelect.appendChild(option)
    }

    // Populate years (from current year - 100 to current year - 13)
    const currentYear = new Date().getFullYear()
    for (let i = currentYear - 13; i >= currentYear - 100; i--) {
      const option = document.createElement("option")
      option.value = i
      option.textContent = i
      yearSelect.appendChild(option)
    }
  }

  // Keyboard shortcuts
  document.addEventListener("keydown", (e) => {
    // Ctrl/Cmd + Enter to submit form
    if ((e.ctrlKey || e.metaKey) && e.key === "Enter") {
      e.preventDefault()
      form.dispatchEvent(new Event("submit"))
    }
  })

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
