<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--=========================*
                Favicon
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="/static/img/icono.png">

    <!--=========================*
              All CSS
    *===========================-->
    <link rel="stylesheet" href="/css/all.css">

    <!--=========================*
            Google Fonts
    *===========================-->
    <!-- Montserrat USE: font-family: 'Montserrat', sans-serif;-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
</head>
<body>
<div class="main-content">
    <nav class="rt_nav_header horizontal-layout">
        <div class="top_nav flex-grow-1">
            <div class="container d-flex flex-row h-100 align-items-center">
                <!--=========================*
                                Logo
                *===========================-->
                <div class="text-center rt_nav_wrapper d-flex align-items-center">
                    <a class="nav_logo rt_logo" href="{{ route('index') }}"><img src="/static/img/icono.png" alt="logo"/></a>
                </div>
                <!--=========================*
                            End Logo
                *===========================-->
                <div class="nav_wrapper_main d-flex align-items-center justify-content-between flex-grow-1">
                    <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                        <!--==================================*
                                    Notification Section
                        *====================================-->
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                data-toggle="dropdown">
                                <i class="feather ft-bell"></i>
                                <span class="count">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown rt-notification-list"
                                    aria-labelledby="notificationDropdown">
                                <div class="dropdown-item">
                                    <p class="mb-0 font-weight-normal float-left">You have 3 new notifications</p>
                                    <a href="#" class="view_btn">view all</a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item rt-notification-item">
                                    <div class="rt-notification-thumbnail">
                                        <div class="rt-notification-icon bg_blue">
                                            <i class="ti-map-alt bg_blue mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="rt-notification-item-content">
                                        <h6 class="rt-notification-subject font-weight-normal text-dark mb-1">You added your Location</h6>
                                        <p class="font-weight-light small-text mb-0">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!--==================================*
                                    End Notification Section
                        *====================================-->
                        <!--==================================*
                                    Message Section
                        *====================================-->
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="feather ft-mail mx-0"></i>
                                <span class="count">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown rt-notification-list"
                                    aria-labelledby="messageDropdown">
                                <div class="dropdown-item">
                                    <p class="mb-0 font-weight-normal float-left">You have 3 New Messages</p>
                                    <a href="#" class="view_btn">view all</a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item rt-notification-item">
                                    <div class="rt-notification-thumbnail">
                                        <img src="/assets/images/author/author-img1.jpg" class="profile-pic" alt="image">
                                    </div>
                                    <div class="rt-notification-item-content flex-grow">
                                        <h6 class="rt-notification-subject ellipsis font-weight-medium">Jhon Doe
                                            <span class="float-right font-weight-light small-text">3:15 PM</span>
                                        </h6>
                                        <p class="font-weight-light small-text">
                                            Hello are you there?
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <!--==================================*
                                    End Message Section
                        *====================================-->
                        <!--==================================*
                                    Profile Menu
                        *====================================-->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tags.index') }}">Tags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <span class="profile_name"> {{ Auth::user()->name }} <i class="feather ft-chevron-down"></i></span>
                                <img src="/assets/images/user.jpg" alt="profile"/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-2"
                                    aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="ti-user text-dark mr-3"></i> Profile
                                </a>
                                <a class="dropdown-item">
                                    <i class="ti-settings text-dark mr-3"></i> Account Settings
                                </a>
                                <span role="separator" class="divider"></span>
                                <a class="dropdown-item">
                                    <!--<i class="ti-power-off text-dark mr-3"></i>
                                    Logout -->
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
                        @endguest
                        <!--==================================*
                                    End Profile Menu
                        *====================================-->
                    </ul>
                    <!--=========================*
                                Mobile Menu
                    *===========================-->
                    <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="feather ft-menu text-white"></span>
                    </button>
                    <!--=========================*
                            End Mobile Menu
                    *===========================-->
                </div>
            </div>
        </div>
    </nav>
<div class="nav-bottom">
    <div class="container">
        <ul class="nav page-navigation">
            <li></li>
        </ul>
    </div>    
</div>        
        @yield('content')
</div>

<!--=================================*
            Footer Section
*===================================-->
<footer>
    <div class="footer-area">
        <p>&copy; Copyright 2020. All right reserved.</p>
    </div>
</footer>
<!--=================================*
            End Footer Section
*===================================-->

<!--=========================*
                Scripts
*===========================-->

<script src="/js/all.js"></script>

</body>
@yield('scripts')
</html>
