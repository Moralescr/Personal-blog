@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-body">
                   
                    <a href="{{ route('posts.create') }}" class="pull-right btn btn-sm btn-success">
                        Crear
                    </a>
                    <h2> <span class="badge badge-danger">Lista de publicaciones </span> </h2>
                    <table class="table table-striped table-hover">
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
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">
                                       <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">
                                       <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
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
        </div>
    </div>
</div>
@endsection
