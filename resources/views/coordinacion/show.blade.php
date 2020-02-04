@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br><br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Detalles de la coordinacion

                    <a href="{{route('coordinacion.index')}}" 
                    class="btn-sm btn-info pull-right">Volver</a>                                     
                    </h3>  
                </div>
                <div class="panel-body">
                     <div class="panel-body box box-primarys">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Código</th>
                            <th>Coordinación</th>
                            <th>Gerencia</th>
                            <th>Creado</th>
                           <th>Actualizado</th>                         
                        </thead>
                        <tbody>
                        <tr>
                                <td>{{$coordinacion->id_coordinacion}}</td>
                                <td>{{$coordinacion->nb_coordinacion}}</td>
                                <td>{{$coordinacion->gerencia->nb_gerencia}}</td>
                                <td>{{$coordinacion->fe_creado}}</td>
                                <td>{{$coordinacion->fe_actualizado}}</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection