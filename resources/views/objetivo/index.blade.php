@extends('layouts.app')
@section('content')



<div class="container">

    <div class="row">
        <br><br><br><br>
        <div class="col-md-10 col-md-offset-1">
            @if (Session::has('mensaje'))
    <div class="form-group">
        <div class="alert alert-success" style="" id="alerta" ><span class="glyphicon glyphicon-ok pull-right"></span>{{Session::get('mensaje') }}
              <button type="button"
                    class="close"
                    data-dismiss="alert"
                    aria-hidden="true"
            >&times;</button>
             </div>
         </div>
        @endif  
        
        <div class="panel panel-default box box-primary">
             <div class="panel-heading">
                <h3>Objetivos cargados
                    <a href="{{route('metas.create' )}}" 
                    class="btn btn-primary pull-right">Meta</a>
                    </h3>
                </div>
                <div class="panel-body box box-primary">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <th width="10px">Código</th>
                            <th>Objetivo</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="4">&nbsp;</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($objetivo as $value)
                            <tr>
                                <td>{{$value->id_objetivo}}</td>
                                <td width="10000px">{{$value->tx_objetivo}}</td>
                                <td>{{$value->fe_creado}}</td>
                                <td>{{$value->fe_actualizado}}</td>
                                <td> 
                                    <a href="{{route('objetivo.show',$value->id_objetivo)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('objetivo.edit',$value->id_objetivo)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!!Form::open (['route'=>['objetivo.destroy',$value->id_objetivo],
                                    'method'=>'DELETE'])!!}
                                        <button type="submit" class="btn btn-danger btn-05" onclick="return confirm('¿estas seguro que deseas eliminarlo?')">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                                </button>
                                    {!!Form::close()!!}
                                    
                                    </td>
                                      <td>
                                    <a href="{{route('objetivo.create')}}"
                                    class="btn btn-sm btn-info">Nuevo objetivo</a>
                                    
                                </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                     
                    {{$objetivo->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection