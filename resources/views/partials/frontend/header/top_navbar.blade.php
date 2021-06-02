<nav class="navbar navbar-expand-lg">
    <div class="search-area">
        <div class="search-area-inner d-flex align-items-center justify-content-center">
        <div class="close-btn"><i class="icon-close"></i></div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
            <form action="#">
                <div class="form-group">
                <input type="search" name="search" id="search" placeholder="What are you looking for?">
                <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <!-- Navbar Brand -->
        <div class="navbar-header d-flex align-items-center justify-content-between">
        <!-- Navbar Brand --><a href="index.html" class="navbar-brand">CRM Demo</a>
        <!-- Toggle Button-->
        <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
        </div>
        <!-- Navbar Menu -->
        <div id="navbarcollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ \Route::has('home') ? route('home') : '' }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item"><a href="{{ \Route::has('blog') ? route('blog') : '' }}" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>
        </ul>
        <div class="navbar-text"><a href="#" class="search-btn"><i class="fa fa-search"></i></a></div>
        <div class="navbar-text">
            <div class="dropdown">
                <a class="account-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @guest
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                    @endguest
                    @auth
                        <img class="rounded-circle" src="https://via.placeholder.com/20" alt="Profile">
                    @endauth
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @guest
                    <a class="dropdown-item" href="{{ \Route::has('login') ? route('login') : '' }}">Login</a>
                    <a class="dropdown-item" href="{{ \Route::has('login') ? route('register') : '' }}">Register</a>
                @endguest
                @auth
                    <a class="dropdown-item" href="{{ \Route::has('login') ? route('logout') : '' }}">Logout</a>
                @endauth
                </div>
            </div>
        </div>
        <!-- <ul class="langs navbar-text"><a href="#" class="active">EN</a><span>           </span><a href="#">ES</a></ul> -->
        </div>
    </div>
</nav>
