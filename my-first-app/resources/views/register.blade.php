<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customized Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <div class="glass-card">
            <h1>Register</h1>
            <div class="success-message" id="successMessage">
                Registration Successful!
            </div>
            <div class="error-message" id="errorMessage">
                Something went wrong. Please try again.
            </div>

            <form id="registerForm" action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Choose a username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password">
                </div>

                <div class="submitButton">
                    <button type="submit" class="btn-submit submitButton">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
