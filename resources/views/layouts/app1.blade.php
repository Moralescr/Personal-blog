<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Copyright (c) 2020 - AMORALES 
  ========================================================================
  -->
    <!-- Page Title -->
    <title>Moralescr.</title>
    <!-- / -->
    <link rel="shortcut icon" href="/static/img/icono.png" />
    <!---Font Icon-->
    <link href="/static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="/static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
    <!-- / -->

    <!-- Plugin CSS -->
    <link href="/static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/static/plugin/magnific/magnific-popup.css" rel="stylesheet">
    <!-- / -->

    <!-- Theme Style -->
    <link href="{{asset('css/styles.css')}}"  rel="stylesheet">
    <link href="{{asset('css/default.css')}}" rel="stylesheet" id="color_theme">
    <!-- / -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" />
    <!-- / -->
    <!--google analytics-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172343320-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-172343320-1');
    </script>

</head>

<!-- Body Start -->
<!--oncontextmenu="return false" onkeydown="return false"-->
<body data-spy="scroll" data-target="#navbarRyan" data-offset="98" >
     <!-- Loading -->
     <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- / -->
    @include('web.sections.header')
    <main>
         @yield('content')
    </main>
    <!-- jQuery -->
    <script src="/static/js/jquery-3.2.1.min.js"></script>
    <script src="/static/js/jquery-migrate-3.0.0.min.js"></script>

    <!-- Plugins -->
    <script src="/static/plugin/bootstrap/js/popper.min.js"></script>
    <script src="/static/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/plugin/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="/static/plugin/isotope/isotope.pkgd.min.js"></script>
    <script src="/static/plugin/magnific/jquery.magnific-popup.min.js"></script>
    <script src="/static/plugin/particles/particles.min.js"></script>
    <script src="/static/plugin/particles/particles-app.js"></script>
    <!-- custom -->
    <script src="/static/js/custom.js"></script>
   
</body>
<!-- Body End -->

</html>