@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br><br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading ">
                    <h3>Detalles de la gerencia

                    <a href="{{route('gerencia.index')}}" 
                    class="btn-sm btn-info pull-right">Volver</a>                                     
                    </h3>  
                </div>
                <div class="panel-body">
                     <div class="panel-body box box-primary">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Código</th>
                            <th>Gerencia</th>
                            <th>Proyecto</th>
                            <th>Creado</th>
                           <th>Actualizado</th>                         
                        </thead>
                        <tbody>
                        <tr>
                                <td>{{$gerencia->id_gerencia}}</td>
                                <td>{{$gerencia->nb_gerencia}}</td>
                                <td>{{$gerencia->proyecto->nb_proyecto}}</td>
                                <td>{{$gerencia->created_at}}</td>
                                <td>{{$gerencia->updated_at}}</td>
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