@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-2">
        <div class="card card-info">
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa fa-warning"></i>
                    <strong>En este apartado se muestra el detalle de las etiquetas creadas por el usuario.</strong> 
                </div>
                <a href="{{ route('tags.index') }}" class="pull-right btn btn-xs btn-success">
                    <i class="fa fa-reply"></i> Regresar 
                </a>
                <br><hr>
                <p class="lead">
                    <b>Nombre:</b>
                    <span class="badge badge-info">{{ $tag->name }} </span>  | 
                    <b>Slug:</b>
                    <span class="badge badge-info">{{ $tag->slug }}</span>  
                </p>
            </div>
        </div>
        </div>
   </div>
</div>
@endsection
