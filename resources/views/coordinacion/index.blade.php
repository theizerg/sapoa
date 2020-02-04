@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <br><br><br>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Coordinaciones
                    
                    <a href="{{route('coordinacion.create' )}}" 
                    class="btn btn-primary pull-right">Nuevo</a>
                  
                    </h3>
                </div>
                <div class="panel-body box box-primary">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <th width="10px">Código</th>
                            <th width="200px">Coordinación</th>
                            <th width="700px">Gerencia</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="3">&nbsp;</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($coordinacion as $value)
                            <tr>
                                <td>{{$value->id_coordinacion}}</td>
                                <td>{{$value->nb_coordinacion}}</td>
                                <td>{{$value->gerencia->nb_gerencia}}</td>
                                <td>{{$value->fe_creado}}</td>
                                <td>{{$value->fe_actualizado}}</td>
                                <td> 
                                    <a href="{{route('coordinacion.show',$value->id_coordinacion)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('coordinacion.edit',$value->id_coordinacion)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!! Form::open(['route' => ['coordinacion.destroy', $value->id_coordinacion], 'method' => 'DELETE']) !!}
                                            
                                        <button type="submit" class="btn btn-danger btn-05" onclick="return confirm('¿estas seguro que deseas eliminarlo?')">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                                </button>
                                    {!!Form::close()!!}
                                    
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{$coordinacion->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection