@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-body">
                    <h2> <span class="badge badge-danger">Lista de mensajes recibidos </span> </h2>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">Nombre</th>
                                <th>Correo</th>
                                <th>Asunto</th>
                                <th>Mensaje</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $msj)
                            <tr>
                                <td>{{ $msj->name }}</td>
                                <td>{{ $msj->email }}</td>
                                <td>{{ $msj->subject }}</td>
                                <td>{{ Str::limit($msj->message, 20, $end='.......') }}</td>
                                <td width="10px">
                                    <a href="" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>             
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
