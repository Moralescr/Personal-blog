@extends('layouts.app1')

@section('content')

<!-- Home Banner Start -->
<section id="home" class="home-banner gray-bg" style="background-image: url(img/overlay-2.jpg);">
    <div class="sec-round">
        <div class="container full-height">
           <!-- <div class="round-item round-item-1"></div>
            <div class="round-item round-item-2"></div>
            <div class="round-item round-item-3"></div>
            <div class="round-item round-item-4"></div>  -->
        </div>
    </div>

    <div class="container">
        <div class="row full-screen align-items-center">
            <div class="col col-md-12 col-lg-8 col-xl-8 p-80px-tb">
                <div class="home-text-center theme-after m-50px-t">
                    <img width="100px" height="100px" class="img-responsive" src="/img/coder.png" alt="">
                    <h4>{!! trans('messages.hello') !!}</h4>
                       <h5 class="font-alt">Adrián Morales</h5>
                    <p>
                        {!! trans('messages.welcome') !!}
                        <a href="{{route('index')}}">
                            <b>
                               <span class="badge badge-danger">{!! trans('messages.profession') !!}</span>
                            </b>
                        </a>
                    </p>
                    <div class="btn-bar">
                        <a href="#" class="m-btn-link m-btn-link-white theme-after">{!! trans('messages.holiday') !!} </a>
                    </div>
                </div>
                <!-- home-text-center -->
            </div>
            <!-- col -->
        </div>
    </div>
    <!-- container -->
    <a href="#blog" data-scroll="smooth" class="mouse-icon hidden-sm"><span class="wheel"></span></a>
</section>
<!-- Home Banner End -->

<!-- Blog Start -->
<section id="blog" class="section blog-section gray-bg">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center m-60px-b md-m-30px-b sm-m-25px-b">
            <div class="col-12 col-md-10 col-lg-7">
                <div class="section-title text-center">
                    <h2 class="font-alt">{!! trans('messages.blog') !!} 😎</h2><hr>
                    <p>
                       {!! trans('messages.subt') !!}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
                    <div class="blog-item md-m-15px-tb">
                        <a href="{{ route('post', $post->slug) }}">
                        @if($post->file)
                            <img src="{{ $post->file }}" title="{{$post->user->name}}" alt="{{ $post->name }}">
                        @endif
                        </a> 
                        <div class="blog-content">
                            <div class="post-meta">
                                <!--<i class="fa fa-user" aria-hidden="true"></i>-->
                                <img src="/img/user.png" alt="">
                                <a href="#">
                                    {{$post->user->name}}
                                </a> |&nbsp; 
                                <!--<i class="fa fa-clock"> </i>-->
                                <img src="/img/reloj.png" alt="">
                                <span class="badge badge-danger">
                                    {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                                </span> |
                                <img src="/img/campana.png" alt="">
                                <span class="badge badge-success">
                                   {!! trans('messages.newpost') !!}
                                </span>
                            </div>
                            <!-- /post-meta -->
                            <hr>
                            <h4><a class="theme-color" href="{{ route('post', $post->slug) }}">{{ $post->name }}</a></h4>
                            <p>
                                {{substr($post->excerpt, 0, 100) }} ...
                            </p>
                            <hr>
                            <span class="badge badge-info">
                                <a href="{{ route('post', $post->slug) }}" class="more-btn">
                                    {!! trans('messages.readmore') !!}
                                    <i class="fa fa-mouse-pointer"></i>
                                </a>
                            </span>
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
                     {!! trans('messages.seeall') !!}
                     <i class="ti-arrow-right"></i>
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



