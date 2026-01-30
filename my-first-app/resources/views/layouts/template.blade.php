<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Page specific styles -->
 @yield('styles')
</head>
<body>
  <!--Navbar-->
  <nav class="navbar bg-light navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SampleApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="d-flex w-100 justify-content-between align-items-center">
        {{-- Left side nav links --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">First</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Second</a>
          </li>
        </ul>

        {{-- Right side logout button --}}
        @auth
        <form action="{{ route('logout') }}" method="POST" class="d-flex">
          @csrf
          <button type="submit" class="btn btn-outline-light">
            <i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
        @endauth
      </div>
    </div>
  </div>
</nav>


  <!-- Content -->
   @yield('content')

  <!-- Page specific script -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
   @yield('scripts')
</body>
</html>