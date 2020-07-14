@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-info">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-warning"></i>
                        <strong>En este apartado se permite la edición de categorías.</strong> 
                    </div>
                   <a href="{{ route('categories.index') }}" class="pull-right btn btn-xs btn-success">
                       <i class="fa fa-reply"></i> Regresar 
                    </a>
                    <br><hr>
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.categories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
