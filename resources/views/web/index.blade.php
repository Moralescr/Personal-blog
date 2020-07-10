@extends('layouts.app1')

@section('content')

<!-- Home Banner Start -->
<section id="home" class="home-banner gray-bg" style="background-image: url(static/img/overlay-2.jpg);">
    <div class="sec-round">
        <div class="container full-height">
            <div class="round-item round-item-1"></div>
            <div class="round-item round-item-2"></div>
            <div class="round-item round-item-3"></div>
            <div class="round-item round-item-4"></div>
            <div class="round-item round-item-5"></div>
        </div>
    </div>

    <div class="container">
        <div class="row full-screen align-items-center">
            <div class="col col-md-12 col-lg-8 col-xl-8 p-80px-tb">
                <div class="home-text-center theme-after m-50px-t">
                    <h4>Hello, my name is</h4>
                    <h5 class="font-alt">Adrián Morales</h5>
                    <p>
                        Welcome to my Web Page 
                        <a href="{{route('index')}}">
                            <b>
                               <span class="badge badge-danger">Moralescr.</span>
                            </b>
                        </a>
                    </p>
                    <div class="btn-bar">
                        <a href="#" class="m-btn-link m-btn-link-white theme-after">Download CV</a>
                    </div>
                </div>
                <!-- home-text-center -->
            </div>
            <!-- col -->
        </div>

    </div>
    <!-- container -->
    <a href="#aboutus" data-scroll="smooth" class="mouse-icon hidden-sm"><span class="wheel"></span></a>
</section>
<!-- Home Banner End -->


<!-- About us -->
<section id="aboutus" class="section p-0px-b">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-left">
                    <h2>Ing. Adrián E. Morales Guadamúz</h2>
                    <h3>ATM Engineer in <a href="https://clai.com/"> <b>CLAI PAYMENTS © </b> </a> Costa Rica</h3>
                    <p class="text-justify">
                    I am a young man passionate about technology, able to adapt to any circumstance 
                    and always give my best in any project, at the same time that I strive to work as a team. 
                    </p>
                    <p> 
                      Check out my <a class="m-btn-link theme-after" href="#portfolio">Portfolio</a>
                    </p>
                    <a class="m-btn m-btn-theme" href="#contact">Contact us <i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <!-- col -->

            <div class="col-md-6 text-center sm-m-45px-t">
                <img class="animated fadeInUp" src="static/img/moralescr.png" title="" alt="">
            </div>
            <!-- col -->

        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- / -->

<!-- Counter Start -->
<section class="counter-section">
    <div class="container">
        <div class="counter-row">
            <div class="row">
                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="375">
                            <!--<div class="count">8</div>-->
                            <div class="feature-box-01">
                                <i class="icon1 theme-bg ti-medall"></i>
                                <h6><span class="badge badge-link">Happy Clients</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="375">
                            <div class="feature-box-01">

                                 <i class="icon1 theme-bg ti-medall"></i>
                            
                                 <h6><span class="badge badge-link">Happy Clients</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="550">
                            <!--<div class="count">20</div>-->
                            <div class="feature-box-01">
                                <i class="icon1 theme-bg ti-medall"></i>
                                <h6><span class="badge badge-link">Happy Clients</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="450">
                            <!--<div class="count">4</div>-->
                            <div class="feature-box-01">
                                <i class="icon1 theme-bg ti-medall"></i>
                                <h6><span class="badge badge-link">Happy Clients</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- container -->
</section>
<!-- Counter End -->


<!-- Service Start -->
<section id="services" class="section gray-bg services-section">
    <div class="container">
        <div class="row justify-content-center m-45px-b md-m-30px-b sm-m-25px-b">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="section-title text-center">
                    <h2 class="font-alt">Technologies</h2>
                    <p>
                     This section will show the main technologies in which I have knowledge. <br>
                     For more information download my <a class="m-btn-link theme-after" href="#home">CV</a>
                    </p>
                </div>
            </div>
        </div> <br>
        <!-- row -->
        <div class="row">
            @include('web.sections.abilities') 
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section> 
<!-- Service End -->

<!-- Our Skill -->
<section class="section skill-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="skill-left p-80px-r md-p-40px-r sm-p-0px-r sm-m-40px-b">
                    <h3 class="font-alt">My soft skills</h3>
                    <p class="m-30px-b text-justify"> 
                    Soft skills are all the attributes or abilities that allow a person to carry out their work effectively. 
                    These skills point to the emotional and interpersonal side and how staff work in a company.
                    </p>
                    <a href="#" class="m-btn m-btn-theme">Read More <i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skills sm-m-20px-b">
                    <div class="progress-lt">
                        <h6>Good comunication</h6>
                        <span>100%</span>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->
                    <div class="progress-lt">
                        <h6>Team work</h6>
                        <span>100%</span>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->
                    <div class="progress-lt">
                        <h6>Proactive</h6>
                        <span>100%</span>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->

                    <div class="progress-lt">
                        <h6>Adaptation to change</h6>
                        <span>100%</span>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->

                </div>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- / -->

<!-- Portfolio Start -->
<section id="portfolio" class="section gray-bg">
    <div class="container">
        <div class="row justify-content-center m-60px-b md-m-40px-b sm-m-30px-b">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="section-title text-center">
                    <h2 class="font-alt">My Portfolio 🧡</h2>
                    <p>This section will show the different projects I have worked on.😊</p>
                </div>
            </div>
        </div>

        <div class="portfolio-filter m-30px-b">
            <ul class="filter text-center">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".photoshop">Photoshop</li>
                <li data-filter=".website">Website</li>
                <li data-filter=".apps">Apps</li>
            </ul>
        </div>
        <!-- Portfolio Filter -->

        <div class="portfolio-content">
            <ul class="portfolio-cols portfolio-cols-3">
                <li class="portfolio-item website">
                    <div class="portfolio-col portfolio-hover-01">
                        <div class="portfolio-img">
                            <a href="#">
                                <img src="static/img/siproh1.png" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color">
                                    <i class="fa fa-play-circle"></i></a>
                                    <a class="lightbox-gallery theme-color" href="/static/img/siproh.png" title="Lightbox gallery image title...">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                    <a href="#" class="theme-color">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- Video Btn -->
                            </div>
                            <!-- Hover -->
                        </div>

                        <div class="portfolio-info">
                            <h5>Control de procesos agrícolas</h5>
                            <span>2019</span>
                        </div>
                    </div>
                    <!-- Portfolio -->
                </li>
                <!-- col -->

                <li class="portfolio-item apps">
                    <div class="portfolio-col portfolio-hover-01">
                        <div class="portfolio-img">
                            <a href="#">
                                <img src="static/img/portfolio-2.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color">
                                    <i class="fa fa-play-circle"></i></a>
                                    <a class="lightbox-gallery theme-color" href="static/img/portfolio-2.jpg" title="Lightbox gallery image title...">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                    <a href="#" class="theme-color">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- Video Btn -->
                            </div>
                            <!-- Hover -->
                        </div>

                        <div class="portfolio-info">
                            <h5>Portfolio Template 2</h5>
                            <span>2018</span>
                        </div>
                    </div>
                    <!-- Portfolio -->
                </li>
                <!-- col -->

                <li class="portfolio-item photoshop">
                    <div class="portfolio-col portfolio-hover-01">
                        <div class="portfolio-img">
                            <a href="#">
                                <img src="static/img/portfolio-3.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color">
                                    <i class="fa fa-play-circle"></i></a>
                                    <a class="lightbox-gallery theme-color" href="static/img/portfolio-3.jpg" title="Lightbox gallery image title...">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                    <a href="#" class="theme-color">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <!-- Video Btn -->
                            </div>
                            <!-- Hover -->
                        </div>

                        <div class="portfolio-info">
                            <h5>Portfolio Template 3</h5>
                            <span>2017</span>
                        </div>
                    </div>
                    <!-- Portfolio -->
                </li>
                <!-- col -->

            </ul>
            <!-- row -->
        </div>
        <!-- portfolio content -->
    </div>
    <!-- Container -->

</section>
<!--  Portfolio End  -->

<!-- Testimonial -->
<section class="section testimonial-section">
    <div class="container">
        <div class="row justify-content-center m-50px-b md-m-40px-b sm-m-25px-b">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="section-title text-center">
                    <h2 class="font-alt">What People Say?</h2>
                    <p>In this section are the opinions of people who know me and have worked with me. 💻💬</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="client-slider-single" class="owl-carousel">
                    <div class="testimonial-col">
                        <div class="img">
                            <img src="static/img/avtar1.jpg" alt="Ryan" title="Ryan" />
                        </div>
                        <h6>Jennifer Lutheran</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- col -->

                    <div class="testimonial-col">
                        <div class="img">
                            <img src="static/img/avtar2.jpg" alt="Ryan" title="Ryan" />
                        </div>
                        <h6>Jennifer Lutheran</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- col -->

                    <div class="testimonial-col">
                        <div class="img">
                            <img src="static/img/avtar3.jpg" alt="Ryan" title="Ryan" />
                        </div>
                        <h6>Jennifer Lutheran</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- col -->

                    <div class="testimonial-col">
                        <div class="img">
                            <img src="static/img/avtar1.jpg" alt="Ryan" title="Ryan" />
                        </div>
                        <h6>Jennifer Lutheran</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <!-- col -->

                </div>
                <!-- owl -->
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!--  Testimonial End  -->

<!-- Blog Start -->
<section id="blog" class="section blog-section gray-bg">
    <div class="container">

        <div class="row justify-content-center m-60px-b md-m-30px-b sm-m-25px-b">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="section-title text-center">
                    <h2 class="font-alt">My blog 🧡</h2>
                    <p>
                      In this section you will find publications on the latest technological trends.
                      We will also create interviews with various systems development specialists. 📚 🏁
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="blog-item md-m-15px-tb">
                        <a href="{{ route('post', $post->slug) }}">
                        @if($post->file)
                            <img src="{{ $post->file }}" title="{{$post->user->name}}" alt="{{ $post->name }}">
                        @endif
                        </a>
                        <div class="blog-content">
                            <div class="post-meta">
                                By <a href="#">
                                    {{$post->user->name}}
                                </a> 
                                <span class="badge badge-primary">
                                    {{$post->user->created_at}}
                                </span>
                            </div>
                            <!-- /post-meta -->

                            <h4><a class="theme-color" href="{{ route('post', $post->slug) }}">{{ $post->name }}</a></h4>
                            <p>
                                {{ $post->excerpt }}
                            </p>
                            <a href="{{ route('post', $post->slug) }}" class="more-btn"> 
                                Read More<i class="ti-arrow-right"></i>
                            </a>
                        </div>
                        <!-- /blog-content -->
                    </div>
                    <!-- Blog Item -->
                </div>
            @endforeach  
        </div>
        <br> <br> <br>
        <div class="row">
            <div class="send col text-center">
                <a href="{{ route('blog') }}" class="m-btn m-btn-theme">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    Read more
                </a>
            </div>
        </div>
    </div>
    <!-- container -->
   
</section>
<!-- Blog End -->

@include('web.sections.contact')

@include('web.sections.footer')

@endsection



