<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/img/epw-logo/logo-bg-blue.png" type="image/x-icon">

    <title>EPW 2022</title>
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-md py-0">
      <div class="container">
        <div class="navbar-brand flex-md-grow-1">
          <a href="#">
            <img src="/img/epw-logo/logo-white.png" alt="EPW Logo" width="60">
          </a>
        </div>
        <div class="navbar-rainbow">
          <div class="rainbow"></div>
          <div class="rainbow"></div>
          <div class="rainbow"></div>
          <div class="rainbow"></div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <img src="/svg/toggler.svg" alt="">
        <span class="fas fa-bars fa-lg fa-fw"></span>
        </button>
        <div class="collapse navbar-collapse flex-md-grow-0" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @auth
                @if (auth()->user()->leader->is_verified==true)
                <li class="nav-item text-center">
                  <a class="nav-link my-3" href="/">Dashboard</a>
                </li>
                  <li class="nav-item text-center">
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="nav-link border-0 bg-transparent my-3">Logout</button>
                    </form>
                  </li>
                @else
                <li class="nav-item text-center">
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link border-0 bg-transparent my-3">Logout</button>
                  </form>
                </li>
                @endif
            @else
                <li class="nav-item text-center">
                  <a class="nav-link my-3" href="/">Dashboard</a>
                </li>
                <li class="nav-item text-center">
                  <a class="nav-link my-3" href="/register">Sign up</a>
                </li>
                <li class="nav-item text-center">
                  <a class="nav-link my-3" href="/login">Login</a>
                </li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>
    {{-- End of Navbar --}}

    @yield('content') 
    {{-- Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>