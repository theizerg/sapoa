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
                <h3>Supuestos cargados
                    <a href="{{route('actividad.create' )}}" 
                    class="btn btn-primary pull-right">Actividades de Iniciativa</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table  table-striped table-hover  box box-primary">
                        <thead>
                            <th width="10px">Código</th>
                            <th>Supuesto de iniciativa</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="4">&nbsp;</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($SupuestoI as $value)
                            <tr>
                                <td>{{$value->id_supuesto_iniciativa}}</td>
                                <td width="10000px">{{$value->tx_supuesto_iniciativa}}</td>
                                <td>{{$value->fe_creado}}</td>
                                <td>{{$value->fe_actualizado}}</td>
                                <td> 
                                    <a href="{{route('supuestoI.show',$value->id_supuesto_iniciativa)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('supuestoI.edit',$value->id_supuesto_iniciativa)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!!Form::open (['route'=>['supuestoI.destroy',$value->id_supuesto_iniciativa],
                                    'method'=>'DELETE'])!!}
                                        <button type="submit" class="btn btn-danger btn-05" onclick="return confirm('¿estas seguro que deseas eliminarlo?')">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                                </button>
                                    {!!Form::close()!!}
                                    
                                    </td>
                                      <td>
                                    <a href="{{route('supuestoI.create')}}"
                                    class="btn btn-sm btn-info">Nuevo indicador</a>
                                    
                                </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                     
                    {{$SupuestoI->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection