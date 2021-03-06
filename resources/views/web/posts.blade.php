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
@if($posts->first() != null)
   <div class="row">
    @foreach($posts as $post)
        <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up">
            <div class="blog-item md-m-15px-tb">
                <a href="{{ route('post', $post->slug) }}">
                @if($post->file)
                    <img src="{{ $post->file }}" title="{{ $post->name }}" alt="{{ $post->name }}">
                @endif
                </a>
                <div class="blog-content">
                    <div class="post-meta">
                       <!-- <i class="fa fa-user" aria-hidden="true"></i>-->
                       <img src="/img/user.png" alt="">
                        <a href="#">
                            {{$post->user->name}}
                        </a> |
                        <img src="/img/reloj.png" alt="">
                                <span class="badge badge-danger">
                                    {{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                                </span> |
                        <img src="/img/carpeta.png" alt="">
                        <span class="badge badge-success">
                            {{substr($post->category->name, 0, 24) }} ...
                        </span>
                    </div>
                    <hr>
                    <!-- /post-meta -->
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
    {{$posts->links()}}
   </div>
<!-- row -->
@else
<blockquote class="blockquote-left">
    <div style="background-color:#C62828; color:#c0c0c0" class="alert alert-danger alert-sm alert-dismissible fade show" role="alert">
        <h2>
        <i class="ti-face-sad"></i>
            <strong> Oops ...</strong> {!! trans('messages.notfound') !!}
        </h2>
    </div>
    <hr>
    <div class="widget-search">
        <form action="{{route('blog')}}" method="GET">
            <input name="name" placeholder="{!! trans('messages.search') !!}" class="form-control" required type="text">
            <button type="submit" class="m-btn m-btn-theme"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <hr>
    <label class="parson col-md-6">
        <a class="btn btn-primary pull-right" href="{{ route('blog') }}"><i class="ti-arrow-left"></i> {!! trans('messages.goback') !!}</a>
    </label>
</blockquote>
@endif
</div>
</section>
<!-- Footer-->
<footer style="background-image: url(/img/footer.png)" class="footer footer-blog">
    <div class="container">
            <!-- <span>Ryan <span></span></span>-->
            <p style="color:white" class="msg"><b>"{!! trans('messages.sentence') !!}"</b></p>
        </div>
        <ul class="social-icons">
            <li>
            <a href="https://www.facebook.com/Adrianmoralesguadamuz/" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            </li>
            <li>
            <a href="https://www.instagram.com/_morales_cr" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            </li>
            <li>
            <a href="https://www.linkedin.com/in/adrianm11" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            </li>
            <li><a href="mailto:moralesguadamuz@gmail.com?subject=question"><i class="fa fa-envelope" target="_blank"></i></a></li>
        </ul>
        <p style="color:white" class="copyright">
           {!! trans('messages.made') !!} ❤️ | {!! trans('messages.copyright') !!} | © 2020 Moralescr
        </p>
    </div>
</footer>
@endsection
