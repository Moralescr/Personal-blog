@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h2> <span class="badge badge-danger">Visualizar detalle de categoría </span> </h2>
                    <hr>
                    <p class="lead">
                    <b>Nombre:</b>
                    <span class="badge badge-info text-white">{{ $category->name }} </span>  
                    <b>Slug:</b>
                    <span class="badge badge-info text-white">{{ $category->slug }}</span>  
                    </p>
                    <hr class="my-4">
                    <p class="lead">
                         <span class="badge badge-danger">Descripción:</span> {!!$category->body!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
