@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="card card-info">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-warning"></i>
                        <strong>En este apartado solo se muestra el detalle de las etiquetas creadas por el usuario.</strong> 
                    </div>
                    <a href="{{ route('tags.index') }}" class="pull-right btn btn-xs btn-success">
                        <i class="fa fa-reply"></i> Regresar 
                    </a>
                    <br><hr>
                    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.tags.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
