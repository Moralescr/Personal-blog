@extends('layouts.app1')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image: url(/img/overlay-1.jpg);">
    <div class="container">
        <h1 align = "left" class="font-alt">{!! trans('messages.certificate') !!} </h1>
    </div>
    <div style="display:none;" id="home"></div>
</section>




<br><br>
<!-- Footer -->
@include('web.sections.footer')

@endsection