<nav class="navbar navbar-expand-lg bs-none shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand col-2" href="{{ route('home') }}"><img src="{{ asset('img/logo_wtag.png') }}" alt="logo" width="70"></a>

        <div class="d-flex col-10 justify-content-end">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" aria-current="active">Home</a>
                </li>
                <div class="dropdown nav-item">
                    <button class="btn  dropdown-toggle {{ request()->routeIs('category.show') ? 'text-dark' : 'text-secondary' }}" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('category.show', 1) }}">Software Engineering</a></li>
                      <li><a class="dropdown-item" href="{{ route('category.show', 2) }}">Interactive Multimedia</a></li>
                    </ul>
                </div>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('writer.show') ? 'active' : '' }}" href="{{ route('writer.show') }}">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('popular') ? 'active' : '' }}" href="{{ route('popular') }}">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>