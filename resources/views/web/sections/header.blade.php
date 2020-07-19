@if(Route::current()->getName() == 'index')
<!-- Header -->
<header>
    <nav class="navbar header-nav fixed-top navbar-expand-lg">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('index') }}">Moralescr <span class="theme-bg1"></span></a>
            <!-- / -->

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRyan" aria-controls="navbarRyan" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- / -->
            <!-- Top Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarRyan">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="#home">Home</a></li>
                    <li><a class="nav-link" href="#aboutus">About Us</a></li>
                    <li><a class="nav-link" href="#services">Technologies</a></li>
                    <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link" href="#blog">Blog</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
            <!-- / -->
        </div>
        <!-- Container -->
    </nav>
    <!-- Navbar -->
</header>
<!-- Header End -->
@else 
<!-- Header -->
<header>
    <nav class="navbar header-nav fixed-top navbar-expand-lg">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('index') }}">Moralescr <span class="theme-bg1"></span></a>
            <!-- / -->
            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRyan" aria-controls="navbarRyan" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- / -->
            <!-- Top Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarRyan">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{ route('index') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('index') }}">About Us</a></li>
                    <li><a class="nav-link" href="{{ route('index') }}">Technologies</a></li>
                    <li><a class="nav-link" href="{{ route('index') }}">Portfolio</a></li>
                    <li><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                    <li><a class="nav-link" href="{{ route('index') }}">Contact</a></li>
                </ul>
            </div>
            <!-- / -->
        </div>
        <!-- Container -->
    </nav>
    <!-- Navbar -->
</header>
<!-- Header End -->
@endif