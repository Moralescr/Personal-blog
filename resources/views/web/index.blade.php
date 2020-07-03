@extends('layouts.app1')

@section('content')

<!-- Home Banner Start -->
<section id="home" class="home-banner gray-bg" style="background-image: url(static/img/overlay-26.jpg);">
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
                        I'm from Costa Rica. I'm ATM engineer in 
                        <a href="https://clai.com/">
                            <b>
                            CLAI PAYMENTS®
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
                    <h2>I'm Adrián Morales Guadamúz</h2>
                    <h3>I'm ATM Engineer in <a href="https://clai.com/"> <b>CLAI PAYMENTS ® </b> </a> Costa Rica</h3>
                    <p class="text-justify">
                        Soy un joven apasionado por la tecnología, capaz de adaptarme a cualquier circunstancia y dar 
                        siempre lo mejor de mí en cualquier proyecto, al mismo tiempo que me esfuerzo por trabajar en equipo         
                        y fomentar valores como los del compañerismo. 
                    </p>
                    <p> 
                      Check out my <a class="m-btn-link theme-after" href="#portfolio">Portfolio</a>
                    </p>
                    <a class="m-btn m-btn-theme" href="#contact">Contact us <i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <!-- col -->

            <div class="col-md-6 text-center sm-m-45px-t">
                <img src="static/img/moralescr.png" title="" alt="">
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
                            <div class="count">375</div>
                            <h6>Happy Clients</h6>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="375">
                            <div class="count">375</div>
                            <h6>Telephonic Talk</h6>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="550">
                            <div class="count">550</div>
                            <h6>Photo Capture</h6>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="450">
                            <div class="count">450</div>
                            <h6>Project</h6>
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


<!-- Our Skill -->
<section class="section skill-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="skill-left p-80px-r md-p-40px-r sm-p-0px-r sm-m-40px-b">
                    <h3 class="font-alt">Make beauty Things With Passion.</h3>
                    <p class="m-30px-b">I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface.</p>
                    <a href="#" class="m-btn m-btn-theme">Read More <i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skills sm-m-20px-b">
                    <div class="progress-lt">
                        <h6>HTML</h6>
                        <span>92%</span>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->
                    <div class="progress-lt">
                        <h6>CSS</h6>
                        <span>84%</span>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->
                    <div class="progress-lt">
                        <h6>JavaScript</h6>
                        <span>88%</span>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->

                    <div class="progress-lt">
                        <h6>PHp</h6>
                        <span>95%</span>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
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
                    <h2 class="font-alt">Our Portfolio</h2>
                    <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface.</p>
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
                                <img src="static/img/portfolio-1.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                    <a class="lightbox-gallery theme-color" href="static/img/portfolio-1.jpg" title="Lightbox gallery image title...">
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
                            <h5>Ryan Portpolio Template</h5>
                            <span>Resent Work</span>
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
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color"><i class="fa fa-play"></i></a>
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
                            <h5>Ryan Portpolio Template</h5>
                            <span>Resent Work</span>
                        </div>
                    </div>
                    <!-- Portfolio -->
                </li>
                <!-- col -->

                <li class="portfolio-item photoshop apps">
                    <div class="portfolio-col portfolio-hover-01">
                        <div class="portfolio-img">
                            <a href="#">
                                <img src="static/img/portfolio-3.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color"><i class="fa fa-play"></i></a>
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
                            <h5>Ryan Portpolio Template</h5>
                            <span>Resent Work</span>
                        </div>
                    </div>
                    <!-- Portfolio -->
                </li>
                <!-- col -->

                <li class="portfolio-item photoshop website">
                    <div class="portfolio-col portfolio-hover-01">
                        <div class="portfolio-img">
                            <a href="#">
                                <img src="static/img/portfolio-4.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                    <a class="lightbox-gallery theme-color" href="static/img/portfolio-4.jpg" title="Lightbox gallery image title...">
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
                            <h5>Ryan Portpolio Template</h5>
                            <span>Resent Work</span>
                        </div>
                    </div>
                    <!-- Portfolio -->
                </li>
                <!-- col -->

                <li class="portfolio-item photoshop apps">
                    <div class="portfolio-col portfolio-hover-01">
                        <div class="portfolio-img">
                            <a href="#">
                                <img src="static/img/portfolio-5.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                    <a class="lightbox-gallery theme-color" href="static/img/portfolio-5.jpg" title="Lightbox gallery image title...">
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
                            <h5>Ryan Portpolio Template</h5>
                            <span>Resent Work</span>
                        </div>
                    </div>
                    <!-- Portfolio -->
                </li>
                <!-- col -->

                <li class="portfolio-item app website">
                    <div class="portfolio-col portfolio-hover-01">
                        <div class="portfolio-img">
                            <a href="#">
                                <img src="static/img/portfolio-6.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                    <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-video theme-color"><i class="fa fa-play"></i></a>
                                    <a class="lightbox-gallery theme-color" href="static/img/portfolio-6.jpg" title="Lightbox gallery image title...">
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
                            <h5>Ryan Portpolio Template</h5>
                            <span>Resent Work</span>
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
                    <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface.</p>
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
                    <h2 class="font-alt">Latest News</h2>
                    <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="blog-item md-m-15px-tb">
                        <a href="#">
                        @if($post->file)
                            <img src="{{ $post->file }}" title="Ryan" alt="Ryan">
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

                            <h4><a class="theme-color" href="#">{{ $post->name }}</a></h4>
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

@endsection


