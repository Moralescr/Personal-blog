@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @if($post->file)
              <img src="{{$post->file}}" class="card-img-top" alt="...">
            @endif
            <hr>
            <p class="lead">
               <b>Nombre:</b>
               <span class="badge badge-info">{{ $post->name }} </span>  | 
               <b>Slug:</b>
               <span class="badge badge-info">{{ $post->slug }}</span>  
            </p>
            <hr class="my-4">
            <p class="lead">
               <span class="badge badge-danger">Descripción:</span> {!! $post->body !!}
            </p>
        </div>
    </div>
</div>
@endsection
