@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <br><br><br>
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
                    <h3>Diccionario de indicadores
                    
                    <a href="{{route('diccionario.create' )}}" 
                    class="btn btn-primary pull-right">Nuevo</a>
                  
                    </h3>
                </div>
                <div class="panel-body box box-primary">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <th width="10px">Código</th>
                            <th width="700px">Objetivo</th>
                            <th width="700px">Indicador</th>
                            <th width="200px">Tipo</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="3">&nbsp;</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($diccionario as $value)
                            <tr>
                                <td>{{$value->id_diccionario}}</td>
                                <td>{{$value->objetivo->tx_objetivo}}</td>
                                <td>{{$value->indicadores->tx_indicadores}}</td>
                                <td>{{$value->indicadores->tx_tipo}}</td>
                                <td>{{$value->fe_actualizado}}</td>
                                <td> 
                                    <a href="{{route('diccionario.show',$value->id_diccionario)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('diccionario.edit',$value->id_diccionario)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!! Form::open(['route' => ['diccionario.destroy', $value->id_diccionario], 'method' => 'DELETE']) !!}
                                            
                                        <button type="submit" class="btn btn-danger btn-05" onclick="return confirm('¿estas seguro que deseas eliminarlo?')">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                                </button>
                                    {!!Form::close()!!}
                                    
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{$diccionario->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection