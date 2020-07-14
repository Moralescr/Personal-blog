@extends('layouts.app')

@section('content')

<div class="card col-md-12">
    <div class="card-body">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-warning"></i>
            <strong>En este apartado solo se muestran los posts creados por el usuario.</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <a href="{{ route('posts.create') }}" class="pull-right btn btn-sm btn-success">
         <i class="ti-plus"></i> Crear post
        </a> <br><br>
        <table class="table table-striped table-hover col-md-12">
            <thead>
                <tr>
                    <th width="10px">Clave</th>
                    <th>Nombre</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td width="10px">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-xs btn-info">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                    <td width="10px">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-xs btn-warning">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                    <td width="10px">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                            <button class="btn btn-xs btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>                           
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>   
        </table>     	

        {{ $posts->render() }}
    </div>
</div>
@endsection
