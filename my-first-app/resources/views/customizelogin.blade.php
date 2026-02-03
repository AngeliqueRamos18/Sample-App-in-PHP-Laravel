<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customizedlogin.css') }}">
</head>
<body>

    <!--Successful Logout Toast-->
    @if(session('success'))
    <div class="toast-container border-0 top-0 end-0 p-3 mt-5">
        <div id="toastLogoutSuccess" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="container">
        <div class="glass-card">
            <h1>Login</h1>
            <div class="success-message" id="successMessage">
                Login Success!
            </div>
            <div class="error-message" id="errorMessage">
                Invalid username or password.
</div>
            <form id="loginForm" action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>

                <div class="submitButton">
                    <button type="submit" class="btn-submit submitButton">Login</button>
</div>

            </form>
        </div>
    </div>

</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/customizedlogin.js') }}"></script>
</html>
