<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduFun</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
</head>
<body>
    <nav class="navbar navbar-expand-lg bs-none shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand col-2" href="#"><img src="{{ asset('img/logo_wtag.png') }}" alt="logo" width="70"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="" aria-expanded="false" aria-label="">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse col-10 justify-content-end">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="/" aria-current="active">Home</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn text-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Category
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('category.show', 1) }}">Software Engineering</a></li>
                          <li><a class="dropdown-item" href="{{ route('category.show', 2) }}">Interactive Multimedia</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        @yield('content')
    </div>

    <footer class="bg-dark">
        <div class="container d-flex pt-2 pb-4">
            <div class="col-5 d-flex justify-content-center">
                <img src="{{ asset('img/logo_wtag_white.png') }}" alt="logo" width="150">
            </div>
            <div class="d-flex col-7 text-white align-items-center">
                &copy; EduFun 2024 | Web Programming | Reynaldi Adidarma | 2602069886
            </div>
        </div>
    </footer>

</body>
</html>