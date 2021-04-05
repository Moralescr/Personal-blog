
@extends('layouts.app1')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image: url(/img/overlay-1.jpg);">
    <div class="container">
        <h1 align = "left" class="font-alt">{!! trans('messages.about') !!} ...</h1>
    </div>
    <div style="display:none;" id="home"></div>
</section>

<!-- About us -->
<section id="aboutus" class="section p-0px-b">
    <div class="container" data-aos="fade-up">  
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-left">            
                    <h2>Adrian Morales Guadamúz</h2>
                    
                    <h3><a href="">{!! trans('messages.role') !!}</a></h3>
                    <p class="text-justify">
                       {!! trans('messages.me') !!}
                    </p>
                    <p>
                      {!! trans('messages.portfolio') !!} <a class="m-btn-link theme-after" href="#portfolio">{!! trans('messages.portfol') !!}</a>
                    </p>
                    <a class="m-btn m-btn-theme" href="#contact">{!! trans('messages.contact') !!} <i class="ti-arrow-right"></i></a>
                </div>
            </div>
            <!-- col -->
            <div class="col-md-6 text-center sm-m-45px-t">
                <img src="img/morales.png" title="Adrian Morales" alt="Adrian Morales">
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
                                <i class="icon1 theme-bg ti-music"></i>
                                <h6><span>{!! trans('messages.music') !!} </span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="450">
                            <div class="feature-box-01">
                                <i class="icon1 theme-bg ti-cup"></i>
                                <h6><span>{!! trans('messages.sports') !!} </span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="375">
                            <div class="feature-box-01">
                                 <i class="icon1 theme-bg ti-game"></i>
                                 <h6><span>{!! trans('messages.games') !!} </span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col -->

                <div class="col-6 col-md-3 col-sm-6 wow fadeInLeft">
                    <div class="counter-col">
                        <div class="counter-data" data-count="550">
                            <div class="feature-box-01">
                                <i class="icon1 theme-bg ti-camera"></i>
                                <h6><span>{!! trans('messages.photo') !!} </span></h6>
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

<!-- Technologies Start -->
<section id="services" class="section gray-bg services-section">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center m-45px-b md-m-30px-b sm-m-25px-b">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="section-title text-center">
                    <h2 class="font-alt">{!! trans('messages.technologies') !!}</h2><hr>
                    <p>
                    {!! trans('messages.subtitle') !!} <br>                  
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
<!-- Technologies End -->

<!-- Our Skill -->
<section class="section skill-section">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-6">
                <div class="skill-left p-80px-r md-p-40px-r sm-p-0px-r sm-m-40px-b">
                    <h3 class="font-alt">{!! trans('messages.mysoftskills') !!}</h3><hr>
                    <img src="img/imagen2-min.jpg" alt="Soft-skills">
                </div>
            </div>
            <div class="col-md-6">
                <div class="skills sm-m-20px-b">
                    <div class="progress-lt">
                        <h6>{!! trans('messages.comunication') !!}</h6>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->
                    <div class="progress-lt">
                        <h6>{!! trans('messages.teamwork') !!}</h6>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->
                    <div class="progress-lt">
                        <h6>{!! trans('messages.proactive') !!}</h6>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->

                    <div class="progress-lt">
                        <h6>{!! trans('messages.adaptation') !!}</h6>
                        <div class="progress">
                            <div class="progress-bar theme-g-bg" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <!-- /progress-bar -->
                        </div>
                        <!-- /progress -->
                    </div>
                    <!-- /progress-lt -->

                    <div class="progress-lt">
                        <h6>{!! trans('messages.positive') !!}</h6>
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

<!-- Footer -->
@include('web.sections.footer')

@endsection