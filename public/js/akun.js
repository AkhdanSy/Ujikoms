// public/js/akun.js
document.addEventListener('DOMContentLoaded', () => {
    const adminPasswordInput = document.getElementById('adminPassword');
    const adminTogglePasswordBtn = document.getElementById('adminTogglePasswordBtn');
    const adminEyeIcon = document.getElementById('adminEyeIcon');

    if (adminTogglePasswordBtn && adminPasswordInput && adminEyeIcon) {
        adminTogglePasswordBtn.addEventListener('click', () => {
            if (adminPasswordInput.type === 'password') {
                adminPasswordInput.type = 'text';
                adminEyeIcon.classList.remove('fa-eye-slash');
                adminEyeIcon.classList.add('fa-eye');
            } else {
                adminPasswordInput.type = 'password';
                adminEyeIcon.classList.remove('fa-eye');
                adminEyeIcon.classList.add('fa-eye-slash');
            }
        });
    }
});