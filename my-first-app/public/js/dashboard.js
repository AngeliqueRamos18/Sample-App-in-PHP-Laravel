document.addEventListener("DOMContentLoaded", function () { 
    const toastLoginSuccess = document.getElementById("toastLoginSuccess");

    if (toastLoginSuccess) {
        const toast = new bootstrap.Toast(toastLoginSuccess, {
            autohide: true,
            delay: 3000
            
        });
        toast.show();
    }
});