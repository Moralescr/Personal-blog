@extends('layouts.app1')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image: url(/static/img/overlay-2.jpg);">
    <div class="container">
        <h1 class="font-alt">Blog List</h1>
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

@endsection
