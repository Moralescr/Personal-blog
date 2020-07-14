@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-info">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-warning"></i>
                        <strong>En este apartado se permite la edición de un post.</strong> 
                    </div>
                   <a href="{{ route('posts.index') }}" class="pull-right btn btn-xs btn-success">
                   <i class="fa fa-reply"></i> Regresar 
                    </a>
                    <br><hr>
                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
                        
                        @include('admin.posts.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
