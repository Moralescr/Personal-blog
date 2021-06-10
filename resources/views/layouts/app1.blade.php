<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--
  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Copyright (c) 2021 - AMORALES
  ========================================================================
  -->
    <!-- Page Title -->
    <title>{!! trans('messages.welcomeTitle') !!} | Moralescr.</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- / -->
    <link rel="shortcut icon" href="/img/ico.png" />
    <!---Font Icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{ asset('plugin/themify-icons/themify-icons.css')}}" rel="stylesheet">
    <!-- / -->

    <!-- Plugin CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('plugin/owl-carousel/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- / -->

    <!-- Theme Style -->
    <link href="{{asset('css/styles.css')}}"  rel="stylesheet">
    <link href="{{asset('css/default.css')}}" rel="stylesheet" id="color_theme">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- / -->
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
   

    <a href="https://api.whatsapp.com/send?phone=50684043853&text=Me%20gustar%C3%ADa%20trabajar%20con%20usted.%20%C2%BFPuedo%20contarle%20de%20mi%20proyecto?" class="float" target="_blank">
      <i class="fab fa-whatsapp my-float"></i>
    </a>

    @include('web.sections.header')

    <main>
         @yield('content')
    </main>
    <!-- jQuery -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('plugin/magnific/jquery.magnific-popup.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{asset('plugin/particles/particles.min.js')}}"></script>
    <script src="{{asset('plugin/particles/particles-app.js')}}"></script>
    <script src="{{asset('plugin/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('plugin/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    
    <!-- AOS animation -->
    <script>
        AOS.init();
    </script>
  
</body>
<!-- Body End -->
</html>
