{{-- dashboard.blade.php --}}
@php
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
@endphp

@extends('layouts.template')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
<!--Successful Login Toast-->
@if(session('success'))
<div class="toast-container border-0 top-0 end-0 p-3 mt-5">
    <div id="toastLoginSuccess" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
            {{ session('success') }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif
<!--End of Successful Login Toast-->

<!--Main Content-->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>Dashboard</h2>
            </div>
            <div class="col-sm-6">
            </div>  
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="p-3 rounded shadow-sm" style="background-color: #272b3d">
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

<section class="content">
    <div class="p-3 CardTableContainer">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h6 class="mb-0">Sample Data Table</h6>
            </div>
            <div class="card-body table-wrapper">
                <div class="table-responsive">
                    <table class="table table-striped align-middle sample-table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Angel</td>
                                <td>angel@example.com</td>
                                <td>Admin</td>
                                <td>2026-01-30</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>JohnDoe</td>
                                <td>john@example.com</td>
                                <td>User</td>
                                <td>2026-01-29</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>JaneSmith</td>
                                <td>jane@example.com</td>
                                <td>Moderator</td>
                                <td>2026-01-28</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

@endsection

@section('scripts')
<script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
