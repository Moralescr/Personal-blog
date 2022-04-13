@extends('layouts.app1')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url(/img/overlay-1.jpg);">
        <div class="container">
            <h1 align="left" class="font-alt"> Happy Birthday Mariel 🧡 </h1>
        </div>
        <div style="display:none;" id="home"></div>
    </section>
    <br>
    <br>
    <br>
    <div class="container">
        <h3 class="text-align: justify;" align="center">
            Para celebrar tu cumpleaños había pensado en un crucero por el Caribe. <br>
            ¿Te importaría cuidar mi mascota hasta que regrese?
            <br>
            <br><b>
                Ya hablando enserio, sé que las palabras no pueden sustituir un abrazo,
                pero sirven para hacerte <br> llegar mis mejores deseos para tu cumpleaños.</b>
            <br>
            <br>
            <b>¡Feliz cumpleaños, disfrútelo muchísimo y cuentas conmigo forever!</b>
        </h3>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Footer -->
    @include('web.sections.footer')
@endsection
