@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br><br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Datos del plan de la nación

                    <a href="{{route('nacion.index')}}" 
                    class="btn-sm btn-info pull-right">Volver</a>                                     
                    </h3>  
                </div>
                <div class="panel-body">
                     <div class="panel-body box box-primary">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Código</th>
                            <th>Proyecto</th>
                            <th>Creado</th>
                           <th>Actualizado</th>                         
                        </thead>
                        <tbody>
                        <tr>
                                <td>{{$nacion->id_nacion}}</td>
                                <td>{{$nacion->tx_nacion}}</td>
                                <td>{{$nacion->fe_creado}}</td>
                                <td>{{$nacion->fe_actualizado}}</td>
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