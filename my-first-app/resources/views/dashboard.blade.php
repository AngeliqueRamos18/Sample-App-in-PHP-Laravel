<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
<div class="toast-container border-0 top-0 end-0 p-3 mt-5">
    <div class="toast show align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
            Login Successful!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
<!--Navbar-->
@include('partials.navbar')

<!--Main Content-->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
            </div>  
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="p-3 bg-white rounded shadow-sm">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-bg-primary">
                    <div class="card-header"></div>
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-person-fill display-2 me-4"></i>
                        <div>
                            <p class="card-text">No. of Users</p>
                            <h5 class="card-title">123</h5>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card text-bg-success">
                    <div class="card-header"></div>
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-person-fill display-2 me-4"></i>
                        <div>
                            <p class="card-text">No. of Users</p>
                            <h5 class="card-title">123</h5>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-bg-danger">
                    <div class="card-header"></div>
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-person-fill display-2 me-4"></i>
                        <div>
                            <p class="card-text">No. of Users</p>
                            <h5 class="card-title">123</h5>
                        </div>
                    </div>
                    </div>
                </div>

    </div>
        </div>
    </div>
    
    
</section>
</div>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>