@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <br><br><br>
       <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default box box-primary">
                <div class="panel-heading ">
                    <h3>Gerencias
                    
                    <a href="{{route('gerencia.create' )}}" 
                    class="btn btn-primary pull-right">Nuevo</a>
                  
                    </h3>
                </div>
                <div class="panel-body box box-primary">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <th width="10px">Código</th>
                            <th width="200px">Gerencia</th>
                            <th width="700px">Proyecto</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="3">&nbsp;</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($gerencia as $value)
                            <tr>
                                <td>{{$value->id_gerencia}}</td>
                                <td>{{$value->nb_gerencia}}</td>
                                <td>{{$value->proyecto->nb_proyecto}}</td>
                                <td>{{$value->fe_creado}}</td>
                                <td>{{$value->fe_actualizado}}</td>
                                <td> 
                                    <a href="{{route('gerencia.show',$value->id_gerencia)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('gerencia.edit',$value->id_gerencia)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!! Form::open(['route' => ['gerencia.destroy', $value->id_gerencia], 'method' => 'DELETE']) !!}
                                            
                                    <button type="submit" class="btn btn-danger btn-05" onclick="return confirm('¿estas seguro que deseas eliminarlo?')">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                                     </button>
                                    {!!Form::close()!!}
                                    
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{$gerencia->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection