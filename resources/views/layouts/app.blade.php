<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog laravel PWEB1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Navbar
    <header>
        <nav class="navbar bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('posts.index') }}">John's Blog</a>
            </div>
        </nav>
    </header>
-->

<!-- nav bootstrap -->

 <nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary">
  <div class="container-xxl">
    <a class="navbar-brand" href="{{route('posts.index')}}">John's Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
    
        <li class="nav-item">
          <a class="nav-link" href="{{route('posts.create')}}">Criar Post!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('posts.sobre')}}">Sobre!</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end nav bootstrap--> 



    <!-- Body -->
    <div class="container">
        @yield('content')
    </div>


    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container text-center">
            <span class="text-light">Mini Blog PWEB1 @2025</span>
        </div>
    </footer>
</body>
</html>
<script src='	https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js'></script>