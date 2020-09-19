@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-warning"></i>
                        <strong>mensajes recibidos.</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <a href="" class="pull-right btn btn-sm btn-success">
                        Crear
                    </a>
                    <h4 class="card-title">Listado de mensajes</h4>

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">Nombre</th>
                                <th>Email</th>
                                <th width="10px">Subject</th>
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
                                <td>{{ $msj->message }}</td>
                                <td width="10px">
                                    <a href="" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    <a href="" class="btn btn-sm btn-warning">
                                       <i class="fa fa-edit"></i> 
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
