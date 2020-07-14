@extends('layouts.app')

@section('content')

<div class="card col-md-12">
  <div class="card-body">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa fa-warning"></i>
            <strong>En este apartado solo se muestran las etiquetas creadas por el usuario.</strong> 
        </div>
        <a href="{{ route('tags.create') }}" class="pull-right btn btn-sm btn-success">
             <i class="ti-plus"></i> Crear etiqueta
        </a>
        <br><br>
        <table class="table table-striped table-hover col-md-12">
            <thead>
                <tr>
                    <th width="10px">ID</th>
                    <th>Nombre</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td width="10px">
                        <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-xs btn-info">
                            <i class="ti-eye"></i>
                        </a>
                    </td>
                    <td width="10px">
                        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-xs btn-warning">
                            <i class="ti-pencil"></i>
                        </a>
                    </td>
                    <td width="10px">
                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                            <button class="btn btn-xs btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>                           
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>   
        </table>     	
      {{ $tags->render() }}
  </div>
</div>
@endsection
