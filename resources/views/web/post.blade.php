@extends('layouts.app1')

@section('content')

 <!-- Page Title -->
 <section class="page-title" style="background-image: url(/static/img/overlay-2.jpg);">
  <div class="container">
      <h1 class="font-alt">Blog List</h1>
  </div> <!-- container -->
</section>
<!-- / -->

<section class="section blog-lising">
  <div class="container">
    <div class="row">
    <!-- Content area -->
      <div class="col-12 col-md-12 col-lg-9 p-50px-r md-p-15px-r">

        <div class="bog-content-area">
          <div class="m-30px-b">
            @if($post->file)
              <img src="{{ $post->file }}" class="img-responsive" title="" alt="">
            @endif
          </div>
          <!--<p><span class="first-letter">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, <strong class="theme-color">sed do eiusmod
            tempor</strong> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in <u>voluptate velit esse</u> cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui <span class="theme-color">officia deserunt mollit</span> anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <strong><a class="theme-color" href="#">sed do eiusmod</a></strong> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->
          <blockquote class="blockquote-left">
            <p> Lduis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <label class="parson">- Ryanr</label>
          </blockquote>

          <p>
            {!! $post->body !!}
          </p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </div> <!-- content are -->

        <div class="blog-tag-nav">
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
                <!-- <li><a href="#">Mrig</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">UI</a></li> -->
              </ul>
            </div>
            <div class="col-12 col-md-6 text-center text-sm-right align-self-center sm-m-10px-tb">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a class="google" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="blog-comment-area">
          <h2 class="title-style-1 font-alt">Commets 3</h2>
          <ul class="blog-comment">
              <li>
                <div class="row">
                  <div class="col-6 col-lg-2 col-md-3 sm-m-15px-b">
                    <img src="/static/img/avtar1.jpg" title="" alt="">
                  </div> <!-- col -->
                  <div class="col-lg-10 col-md-9">
                    <a href="#" class="person">Martin Luthar</a>
                    <span class="date">17 APRIL 2018, 2:05 AM</span>
                    <a href="#comment" class="reply">Replay</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                  </div>
                </div> <!-- row -->

                <!-- Child Comment -->
                <ul class="child-comment">
                  <li>
                    <div class="row">
                      <div class="col-6 col-lg-2 col-md-3 sm-m-15px-b">
                        <img src="/static/img/avtar1.jpg" title="" alt="">
                      </div> <!-- col -->
                      <div class="col-lg-10 col-md-9">
                        <a href="#" class="person">Martin Luthar</a>
                        <span class="date">17 APRIL 2018, 2:05 AM</span>
                        <a href="#comment" class="reply">Replay</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                      </div>
                    </div> <!-- row -->
                  </li>
                </ul> <!-- Blog Comment -->
                <!-- / -->
              </li>

              <li>
                <div class="row">
                  <div class="col-6 col-lg-2 col-md-3 sm-m-15px-b">
                    <img src="/static/img/avtar1.jpg" title="" alt="">
                  </div> <!-- col -->
                  <div class="col-lg-10 col-md-9">
                    <a href="#" class="person">Martin Luthar</a>
                    <span class="date">17 APRIL 2018, 2:05 AM</span>
                    <a href="#comment" class="reply">Replay</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                  </div>
                </div> <!-- row -->
              </li>
          </ul>
        </div>

        <div class="blog-comment-form">
          <h2 class="title-style-1 font-alt">Leave a Reply</h2>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Your Name *</label>
                  <input name="name" placeholder="Enter your full name" class="form-control" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Your Email *</label>
                  <input name="name" placeholder="Enter your email" class="form-control" type="text">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Your Comment *</label>
                  <textarea class="form-control" rows="8" id="comment" name="comment" placeholder="Comment here"></textarea>
                </div>
              </div>
              <div class="col-md-12 p-10px-t">
                <button class="m-btn m-btn-theme"> Post Comment </button>
              </div>
            </div>
          </form>
        </div>

      </div> <!-- col -->

      
      <!-- side Bar -->
      <div class="col-12 col-md-12 col-lg-3 md-m-30px-b">
        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">SEARCH</h5>
          <div class="widget-search">
            <form>
              <input name="name" placeholder="Search" class="form-control" type="text">
              <button class="m-btn m-btn-theme"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">ABOUT ME</h5>
          <div class="widget-about">
            <div class="avtar">
              <img src="/static/img/team1.jpg" alt="" title="">
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">CATEGORIES</h5>
          <div class="widget-categories">
            <ul class="list-style-1">
              <li><a href="#">Entertainment</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Home Blog</a></li>
              <li><a href="#">Blog Details</a></li>
              <li><a href="#">HTML and CSS</a></li>
            </ul>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">POPULAR POST</h5>
          <div class="widget-categories">
            <ul class="latest-post">
            <li>
              <div class="lp-img">
                <img src="/static/img/blog-img4.jpg" title="Ryan" alt="Ryan">
              </div>
              <div class="lp-text">
                <h6><a href="#">Ryan Awesome Theme For Your Business Website</a></h6>
                <div class="date">20 April 2018 | by <a href="#">Ryan</a></div>
              </div>
            </li>
            <li>
              <div class="lp-img">
                <img src="/static/img/blog-img4.jpg" title="Ryan" alt="Ryan">
              </div>
              <div class="lp-text">
                <h6><a href="#">Lorem Ipsum is simply dummy</a></h6>
                <div class="date">20 April 2018 | by <a href="#">Ryan</a></div>
              </div>
            </li>
            <li>
              <div class="lp-img">
                <img src="/static/img/blog-img4.jpg" title="Ryan" alt="Ryan">
              </div>
              <div class="lp-text">
                <h6><a href="#">Ryan is an exclusive multi-purpose</a></h6>
                <div class="date">20 April 2018 | by <a href="#">Ryan</a></div>
              </div>
            </li>
          </ul>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">ARCHIVE</h5>
          <div class="widget-archive">
            <ul class="list-style-1">
              <li><a href="#">Jan 2018</a></li>
              <li><a href="#">Feb 2018 </a></li>
              <li><a href="#">Mar 2018</a></li>
              <li><a href="#">Apr 2018</a></li>
              <li><a href="#">May 2018</a></li>
            </ul>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">POPULAR TAGS</h5>
          <div class="widget-popular-tag">
            <ul class="list-style-tag">
              <li><a href="#">Mrig</a></li>
              <li><a href="#">HTML</a></li>
              <li><a href="#">CSS</a></li>
              <li><a href="#">UI</a></li>
              <li><a href="#">One Page</a></li>
              <li><a href="#">Multi</a></li>
              <li><a href="#">Theme</a></li>
              <li><a href="#">Bootstrap</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">UX</a></li>
              <li><a href="#">Wordpress</a></li>
              <li><a href="#">Magento</a></li>
            </ul>
          </div>
        </div> <!-- /sidebar-widget -->

        <div class="sidebar-widget">
          <h5 class="widget-title font-alt">NEWSLETTER</h5>
          <div class="widget-newsletter">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <form>
              <input name="name" placeholder="* Email Address" class="form-control" type="text">
              <button class="m-btn m-btn-theme"><i class="fa ti-email icon-small"></i></button>
            </form>
          </div>
        </div> <!-- /sidebar-widget -->

      </div> <!-- col -->
    </div> <!-- row -->
  </div> <!-- container -->
</section>
@endsection