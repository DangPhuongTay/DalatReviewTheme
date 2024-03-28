const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirmPassword');
const passwordLengthWarning = document.getElementById('passwordLengthWarning');
const passwordMatchWarning = document.getElementById('passwordMatchWarning');
const passwordRequirement = document.getElementById('passwordRequirement');
const toggleConfirmPasswordVisibilityIcon = document.getElementById('toggleConfirmPasswordVisibility');

passwordInput.addEventListener('input', function() {
    const password = passwordInput.value;
    if (password.length === 0) {
        passwordLengthWarning.textContent = '';
        passwordRequirement.textContent = '';
    } else if (password.length < 8 || password.length > 20) {
        passwordLengthWarning.textContent = 'Mật khẩu phải từ 8-20 ký tự';
        passwordRequirement.textContent = '';
    } else if (password.length > 8 || password.length < 20) {
        passwordLengthWarning.textContent = '';
        const hasNumber = /\d/.test(password);
        const hasLowerCase = /[a-z]/.test(password);
        const hasUpperCase = /[A-Z]/.test(password);
        const hasSpecialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);
        if (!hasNumber || !hasLowerCase || !hasUpperCase || !hasSpecialChar) {
            passwordRequirement.textContent = 'Mật khẩu phải chứa ít nhất 1 số, 1 chữ cái và 1 ký tự đặc biệt';
        } else {
            passwordRequirement.textContent = '';
        }
    }
    toggleSaveButton();
});

confirmPasswordInput.addEventListener('input', function() {
    if (passwordInput.value !== confirmPasswordInput.value) {
        passwordMatchWarning.textContent = 'Mật khẩu không khớp';
    } else {
        passwordMatchWarning.textContent = '';
    }
    toggleSaveButton();
});

function toggleSaveButton() {
    if (passwordInput.value.length >= 8 && passwordInput.value === confirmPasswordInput.value) {
        saveButton.disabled = false;
    } else {
        saveButton.disabled = true;
    }
}



const togglePasswordVisibilityIcon = document.getElementById('togglePasswordVisibility');


togglePasswordVisibilityIcon.addEventListener('click', function() {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    const icon = togglePasswordVisibilityIcon.querySelector('ion-icon');
    icon.name = type === 'password' ? 'eye-off-outline': 'eye-outline';
}); 

toggleConfirmPasswordVisibilityIcon.addEventListener('click', function() {
    const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPasswordInput.setAttribute('type', type);
    const icon = toggleConfirmPasswordVisibilityIcon.querySelector('ion-icon');
    icon.name = type === 'password' ? 'eye-outline' : 'eye-off-outline';
});


// xử lý nhập liệu mã otp 
document.addEventListener('DOMContentLoaded', function() {
    const otpLabels = document.querySelectorAll('.user__verify--sms__otp--valid__label');

    otpLabels.forEach(function(label, index) {
        label.tabIndex = 0; // Cho phép label nhận focus
        
        label.addEventListener('click', function(event) {
            // Khi click vào label, đặt focus vào label đó
            label.focus();
        });

        label.addEventListener('keydown', function(event) {
            if (event.key >= 0 && event.key <= 9) {
                label.textContent = event.key;
                // Chuyển tới label tiếp theo nếu có
                if (index < otpLabels.length - 1) {
                    otpLabels[index + 1].focus();
                }
            } else if (event.key === 'Backspace') {
                // Xóa label trước nếu có và chuyển focus về label trước đó
                if (index > 0) {
                    otpLabels[index].textContent = '';
                    otpLabels[index - 1].focus();
                }
            }
            // Ngăn chặn sự kiện mặc định của phím nhấn
            event.preventDefault();
        });
    });
});
// xử lý open pop up
document.addEventListener('DOMContentLoaded', function() {
    const openPopup = document.querySelector('.user__settings--deleteaccount');
    const popup = document.querySelector('.user__popup');
    const codeContainer = document.querySelector('.user__verify--sms__code--container');
    openPopup.addEventListener('click', function() {
        popup.style.display = 'block';
        codeContainer.style.display = 'block';
        userBody.style.overflow = 'hidden';
    });
});

//  Xử lý đổi popup 
document.addEventListener('DOMContentLoaded', function() {
    const readyButton = document.querySelector('.user__verify--sms__input--ready');
    const codeContainer = document.querySelector('.user__verify--sms__code--container');
    const validateInput = document.querySelector('.user__verify--sms__input--validate');

    readyButton.addEventListener('click', function() {
        codeContainer.style.display = 'none';
        validateInput.style.display = 'block';
    });
});

// xử lý tắt pop up 
document.addEventListener('DOMContentLoaded', function() {
    const closeIcon = document.querySelector('.close-icon');
    const verifyContainer = document.querySelector('.user__popup');
    const smsInputValidate = document.querySelector('.user__verify--sms__input--validate');
    
    closeIcon.addEventListener('click', function() {
        verifyContainer.style.display = 'none';
        smsInputValidate.style.display = 'none'; // Thêm dòng này để ẩn phần tử .user__verify--sms__input--validate
    });
});


