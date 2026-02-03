document.addEventListener('DOMContentLoaded', function () {
    const toastLogoutSuccess = document.getElementById("toastLogoutSuccess");
    if (toastLogoutSuccess) {
        const toast = new bootstrap.Toast(toastLogoutSuccess, {
            autohide: true,
            delay: 3000
    });
        toast.show();
    }
});


const loginForm = document.getElementById('loginForm');
if (loginForm) {
    loginForm.addEventListener('submit', function (event) {
        // Only block submit when fields are missing
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if (username && password) {
            document.getElementById('errorMessage').style.display = 'none';
            return;
        }

        event.preventDefault();
        // Show error message
        document.getElementById('errorMessage').style.display = 'block';
    });
}
