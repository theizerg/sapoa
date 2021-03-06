@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row">
        <br><br><br><br>
        <div class="col-sm-10 col-md-offset-1">
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

 <div class="panel panel-default">
     <div class="panel-heading">
         <h3>Directriz cargada
             <a href="{{route('iniciativa.create' )}}" 
                    class="btn btn-primary pull-right">Iniciativa</a>
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table  table-striped table-hover">
                        <thead>
                            <th width="10px">Código</th>
                            
                            <th>Plan de la nación</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="4">&nbsp;</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($directriz as $value)
                            <tr>
                                <td>{{$value->id_directriz}}</td>
                                <td>{{$value->nacion->tx_nacion}}</td>                         
                                <td>{{$value->fe_creado}}</td>
                                <td>{{$value->fe_actualizado}}</td>
                                <td> 
                                    <a href="{{route('directriz.show',$value->id_directriz)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('directriz.edit',$value->id_directriz)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!!Form::open (['route'=>['directriz.destroy',$value->id_directriz],
                                    'method'=>'DELETE'])!!}
                                        <button type="submit" class="btn btn-danger btn-05" onclick="return confirm('¿estas seguro que deseas eliminarlo?')">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                                </button>
                                    {!!Form::close()!!}
                                    
                                    </td>
                                      <td>
                                    <a href="{{route('directriz.create')}}"
                                    class="btn btn-sm btn-info">Nueva directriz</a>
                                    
                                </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                     {{$directriz->render()}}
                   
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection