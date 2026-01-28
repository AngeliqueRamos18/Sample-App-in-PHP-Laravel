document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    // Form validation

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    if (username && password){
        document.getElementById('successMessage').style.display = 'block';
        document.getElementById('errorMessage').style.display = 'none';
        
        setTimeout(() => {
            document.getElementById('successMessage').style.display = 'none';
        }, 5000);
    }else{
        // Show error message
        document.getElementById('errorMessage').style.display = 'block';
    }
});