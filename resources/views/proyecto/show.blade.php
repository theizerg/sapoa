@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
            <br><br><br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Proyectos

                    <a href="{{route('proyecto.index')}}" 
                    class="btn-sm btn-info pull-right">Volver</a>                                     
                    </h3>  
                </div>
                <div class="panel-body">
                     <div class="panel-body">
                    <table class="table table-striped table-hover box box-primary">
                        <thead>
                            <th>Código</th>
                            <th>Proyecto</th>
                            <th>Creado</th>
                           <th>Actualizado</th>                         
                        </thead>
                        <tbody>
                        <tr>
                                <td>{{$proyecto->id_proyecto}}</td>
                                <td>{{$proyecto->nb_proyecto}}</td>
                                <td>{{$proyecto->created_at}}</td>
                                <td>{{$proyecto->updated_at}}</td>
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