@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-10 col-md-offset-1">
            <br><br><br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Datos del plan estratégico institucional

                    <a href="{{route('nacion.index')}}" 
                    class="btn-sm btn-info pull-right">Volver</a>                                     
                    </h3>  
                </div>
                <div class="panel-body">
                     <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Código</th>
                            <th>Plan de la nación</th>
                            <th>Creado</th>
                           <th>Actualizado</th>                         
                        </thead>
                        <tbody>
                        <tr>
                                <td>{{$institucional->id_institucional}}</td>
                                <td>{{$institucional->tx_institucional}}</td>
                                <td>{{$institucional->fe_creado}}</td>
                                <td>{{$institucional->fe_actualizado}}</td>
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