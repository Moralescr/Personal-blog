@extends('layouts.app1')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image: url(/img/overlay-1.jpg);">
<div class="container">
    <h1 align="left" class="font-alt">{!! trans('messages.blog') !!} 😎</h1>
</div>
<div style="display:none;" id="home"></div>
<!-- container -->
</section>
<!-- / -->
<section class="section blog-lising">
  <div class="container">
    <div class="row">
    <!-- Content area -->
      <div class="col-12 col-md-12 col-lg-9 p-50px-r md-p-15px-r">

        <div class="bog-content-area">
          <div class="m-30px-b" data-aos="fade-up">
            @if($post->file)
              <img src="{{ $post->file }}" class="img-responsive" title="" alt="">
            @endif
          </div>
          <div class ="alert alert-info">
            <h3><b>{{$post->name}}</b></h3>  
          </div>
          <blockquote class="blockquote-left" data-aos="fade-up">
              <label class="parson">
              <div>
                  <img src="/img/user.png" alt="">
                  <span class="badge badge-primary">{{$post->user->name}} </span>&nbsp;
                  <img src="/img/reloj.png" alt="">
                  <span class="badge badge-danger">{{\Carbon\Carbon::parse($post->created_at)->isoformat('DD-MMMM-YYYY')}}</span>&nbsp;
                  <img src="/img/carpeta.png" alt="">
                  <span class="badge badge-success">{{$post->category->name }} </span>
              </div>
          </blockquote>
          <p data-aos="fade-up">
            {!! $post->body !!}
          </p>
        </div> <!-- content are -->

        <div class="blog-tag-nav" data-aos="fade-up">
          <div class="row">
            <div class="col-12 col-md-6 align-self-center text-center text-sm-left sm-m-10px-tb">
              <ul class="list-style-tag">
                @foreach($post->tags as $tag)
                <li>
                    <a href="{{ route('tag', $tag->slug) }}">
                        {{ $tag->name }}
                    </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-12 col-md-6 text-center text-sm-right align-self-center sm-m-10px-tb">
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="https://www.facebook.com/Adrianmoralesguadamuz/" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a class="twitter" href="https://www.instagram.com/_morales_cr" target="_blank">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a class="google" href="https://github.com/Moralescr" target="_blank">
                    <i class="fab fa-github"></i>
                  </a>
                </li>
                <li>
                  <a class="linkedin" href="https://www.linkedin.com/in/moralescr" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="blog-comment-area">
          <h2 class="title-style-1 font-alt">{!! trans('messages.comments') !!}</h2>
          <ul class="blog-comment">
              @include('web.sections.discus')
          </ul>
        </div>
      </div> <!-- col -->

      <!-- side Bar -->
      <div class="col-12 col-md-12 col-lg-3 md-m-30px-b">
        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">{!! trans('messages.search') !!}</h5>
          <div class="widget-search">
            <form action="{{route('blog')}}" method="GET">
              <input name="name" placeholder="{!! trans('messages.search') !!}" class="form-control" required type="text">
              <button type="submit" class="m-btn m-btn-theme"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">{!! trans('messages.about') !!}</h5>
          <div class="widget-about">
            <div class="avtar">
              <img src="/img/team1.jpg" alt="" title="">
            </div>
            <p><b style="color:#F24C3D">I'm software engineer and love programming 😍🧡</b></p>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">{!! trans('messages.category') !!}</h5>
          <div class="widget-categories">
            <ul class="list-style-1">
              @foreach($categories as $category)
                 <li><a href="{{ route('category', $category->slug) }}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">{!! trans('messages.popular') !!}</h5>
          <div class="widget-categories">
            <ul class="latest-post">
              @foreach($posts as $post1)
              <li>
                <div class="lp-img">
                  @if($post1->file)
                     <img src="{{$post1->file}}" title="Ryan" alt="Ryan">
                  @endif
                </div>
                <div class="lp-text">
                  <h6><a href="{{ route('post', $post1->slug) }}">{{$post1->name}}</a></h6>
                  <div class="date"> {{\Carbon\Carbon::parse($post1->created_at)->format('d-m-yy')}} |
                     by <a href="#">{{$post1->user->name}}</a>
                  </div>
                </div>
              </li>
              @endforeach
          </ul>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">{!! trans('messages.tag') !!}</h5>
          <div class="widget-popular-tag">
            <ul class="list-style-tag">
              @foreach($tags as $tag1)
                <li><a href="{{ route('tag', $tag1->slug) }}">{{$tag1->name}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div> <!-- col -->
    </div> <!-- row -->
  </div> <!-- container -->
</section>
<br>
@include('web.sections.footer')
@endsection
