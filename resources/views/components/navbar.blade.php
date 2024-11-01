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
                    <a class="nav-link" href="{{ route('writer.show') }}">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('popular') }}">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>