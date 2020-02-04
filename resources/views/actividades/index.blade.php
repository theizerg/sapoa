@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1"> 
            <br><br> 
            <div class="panel panel-default box box-primary">
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
                <div class="panel-heading">
                    <h3>Actividades de iniciativa
                    
                    <a href="{{route('actividades.create' )}}" 
                    class="btn btn-primary pull-right">Nuevo</a>
                  
                    </h3>
                </div>
                <div class="panel-body box box-primary">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <th width="10px">Código</th>
                            <th>Descripción</th>
                            <th>Producto</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="3">&nbsp;</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($actividades as $value)
                            <tr>
                                <td>{{$value->id_actividades}}</td>
                                <td>{{$value->tx_descripcion}}</td>
                                <td>{{$value->tx_producto}}</td>
                                <td>{{$value->fe_creado->format('d/m/Y')}}</td>
                                <td>{{$value->fe_actualizado->format('d/m/Y')}}</td>
                    
                                   <td>
                                    <a href="{{route('actividades.show',$value->id_actividades)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('actividades.edit',$value->id_actividades)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!!Form::open (['route'=>['actividades.destroy',$value->id_actividades],
                                    'method'=>'DELETE'])!!}
                                            
                                         <button type="submit" class="btn btn-danger btn-05" onclick="return confirm('¿estas seguro que deseas eliminarlo?')">
                                         <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                                </button>
                                    {!!Form::close()!!}
                                    
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{$actividades->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection