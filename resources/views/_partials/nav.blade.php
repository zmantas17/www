<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
    <div class="container-fluid">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block">
                <!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand" href="/"> Skateboards </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar7">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
            <ul class="navbar-nav ms-auto flex-nowrap">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach(App\Models\Category::all() as $category)
                        <a class="dropdown-item" href="/category/{{ $category->id }}">{{$category->name}}</a>
                    @endforeach
                    </ul>
                </li>
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                
                <li class="nav-item">
                    <a href="/register" class="nav-link">Register</a>
                </li> 
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/dashboard">Admin</a>
                        <a class="dropdown-item" href="/skateboards">Skateboards</a>
                        <a class="dropdown-item" href="/categories">Categories</a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">Logout</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>