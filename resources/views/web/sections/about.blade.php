@extends('layouts.app1')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/img/overlay-1.jpg);">
        <div class="container">
            <h1 align="left" class="font-alt">{!! trans('messages.about') !!} </h1>
        </div>
        <div style="display:none;" id="home"></div>
    </section>

    <!-- About us -->
    <section id="aboutus" class="section p-0px-b">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-left">
                        <h2>Ing. Adrián Morales Guadamúz</h2>

                        <h3><span class="badge badge-info" href="">{!! trans('messages.role') !!}</span></h3>
                        <p class="text-justify">
                            {!! trans('messages.me') !!}
                        </p>
                        <p>
                            {!! trans('messages.portfolio') !!} <a class="m-btn-link theme-after"
                                href="#portfolio">{!! trans('messages.portfol') !!}</a>
                        </p>
                        <a class="m-btn m-btn-theme" target="_blank"
                            href="https://api.whatsapp.com/send?phone=50684043853&text=Me%20gustar%C3%ADa%20trabajar%20con%20usted.%20%C2%BFPuedo%20contarle%20de%20mi%20proyecto?">
                            {!! trans('messages.contact') !!} <i class="ti-arrow-right"></i>
                        </a>
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
     
    </section>
    <!-- Technologies End -->

    <!-- / -->
    <br><br>
    <!-- Footer -->
    @include('web.sections.footer')
@endsection
