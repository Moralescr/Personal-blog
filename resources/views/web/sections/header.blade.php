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
                    <li><a class="nav-link active" href="#home">{!! trans('messages.home') !!}</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">{!! trans('messages.about') !!}</a></li>
                    <!--<li><a class="nav-link" href="#aboutus">{!! trans('messages.about') !!}</a></li>
                    <li><a class="nav-link" href="#services">{!! trans('messages.technologies') !!}</a></li> -->
                    <li><a class="nav-link" href="#blog">Blog</a></li>
                    <li><a class="nav-link" href="#contact">{!! trans('messages.contacth') !!}</a></li>
                    @if (config('locale.status') && count(config('locale.languages')) > 1)
                        @foreach (array_keys(config('locale.languages')) as $lang)
                           <a class="nav-link">
                            @if ($lang != App::getLocale())
                                @if($lang == 'es')
                                    <li><a class="nav-link" href="{!! route('lang.swap', $lang) !!}"><img src="{{ asset('img/es.png')}}" alt="Spanish"></a></li>       
                                @else
                                    <li><a class="nav-link" href="{!! route('lang.swap', $lang) !!}"><img src="{{ asset('img/en.png')}}" alt="English"></a></li>
                                @endif
                            @endif
                            </a>
                        @endforeach
                    @endif
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
                    <li><a class="nav-link active" href="{{route('index')}}">{!! trans('messages.home') !!}</a></li>
                    <li><a class="nav-link" href="{{ route('about') }}">{!! trans('messages.about') !!}</a></li>
                   <!-- <li><a class="nav-link" href="{{route('index')}}">{!! trans('messages.about') !!}</a></li>
                    <li><a class="nav-link" href="{{route('index')}}">{!! trans('messages.technologies') !!}</a></li> -->
                    <li><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                    <li><a class="nav-link" href="{{route('index')}}">{!! trans('messages.contacth') !!}</a></li>
                    @if (config('locale.status') && count(config('locale.languages')) > 1)
                        @foreach (array_keys(config('locale.languages')) as $lang)
                           <a class="nav-link">
                            @if ($lang != App::getLocale())
                                @if($lang == 'es')
                                    <li><a class="nav-link" href="{!! route('lang.swap', $lang) !!}"><img src="{{ asset('img/es.png')}}" alt="Spanish"></a></li>       
                                @else
                                    <li><a class="nav-link" href="{!! route('lang.swap', $lang) !!}"><img src="{{ asset('img/en.png')}}" alt="English"></a></li>
                                @endif
                            @endif
                            </a>
                        @endforeach
                    @endif
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
