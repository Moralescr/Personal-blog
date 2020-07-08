@extends('layouts.app1')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image: url(/static/img/overlay-1.jpg);">
<div class="container">
    <h1 align="left" class="font-alt">My Blog List ❤</h1>
</div>
<!-- container -->
</section>
<!-- / -->
<section class="section blog-lising">
<div class="container">
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
<!-- row -->
<div class="bottom-pagination">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
    
</div>
</div>

</section>

<!-- Footer-->
<footer class="footer footer-blog">
    <div class="container">
            <!-- <span>Ryan <span></span></span>-->
            <p style="color:white" class="msg"><b>'Nothings happens unless we first dream'</b></p>
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
            <li><a href="#"><i class="fa fa-envelope" target="_blank"></i></a></li>
        </ul>
        <p style="color:white" class="copyright">
            Made with ❤️ | All Rights Reserved | © 2020 Moralescr
        </p>
    </div>
</footer>
@endsection
