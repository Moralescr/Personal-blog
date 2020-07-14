@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <div class="card card-info">
            <div class="card-body">
                @if($post->file)
                 <img src="{{$post->file}}" class="card-img-top" alt="...">
                @endif
                <br><br>
                <p class="lead">
                    <b>Nombre:</b>
                    <span class="badge badge-info">{{ $post->name }} </span> 
                    <hr> <b>Slug:</b>
                    <span class="badge badge-info">{{ $post->slug }}</span>  
                </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-md-offset-2">
        <div class="card card-info">
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa fa-warning"></i>
                    <strong>En este apartado solo se muestra el detalle de los posts creados por el usuario.</strong> 
                </div>
                <p class="lead">
                <span class="badge badge-danger">Descripción:</span> {!! $post->body !!}
                </p>
            </div>
          </div>
        </div>
   </div>
</div>
@endsection
