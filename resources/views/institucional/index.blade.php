@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
       <div class="col-md-10 col-md-offset-1">
            <br><br> 
            <div class="panel panel-default">
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
                    <h3>Plan estratégico institucional
                    
                    <a href="{{route('institucional.create' )}}" 
                    class="btn btn-primary pull-right">Nuevo</a>
                  
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <th width="10px">Código</th>
                            <th>Plan estratégico institucional</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="3">&nbsp;</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($institucional as $value)
                            <tr>
                                <td>{{$value->id_institucional}}</td>
                                <td>{{$value->tx_institucional}}</td>
                                <td>{{$value->fe_creado}}</td>
                                <td>{{$value->fe_actualizado}}</td>
                                <td> 
                                    <a href="{{route('institucional.show',$value->id_institucional)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('institucional.edit',$value->id_institucional)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!!Form::open (['route'=>['institucional.destroy',$value->id_institucional],
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
                    {{$institucional->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection