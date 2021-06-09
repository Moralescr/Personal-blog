@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2> <span class="badge badge-danger">Visualizar detalle de etiquetas </span> </h2>
            <hr>
            <p class="lead">
                <b>Nombre:</b>
                <span class="badge badge-info text-white">{{ $tag->name }} </span>  
                <b>Slug:</b>
                <span class="badge badge-info text-white">{{ $tag->slug }}</span>  
            </p>
        </div>
    </div>
</div>
@endsection
