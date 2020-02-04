@extends('layouts.app')
@section('content')

<div class="container">
<br><br>
    <div class="row">
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
                    <h3>Proyectos
                    
                    <a href="{{route('proyecto.create' )}}" 
                    class="btn btn-primary pull-right ">Nuevo</a>
                  
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table  table-striped table-hover box box-primary ">
                        <thead>
                            <th width="10px">Código</th>
                            <th>Proyecto</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th colspan="3">&nbsp;Opciones</th>
                          
                        </thead>
                        <tbody>
                           @foreach ($proyecto as $value)
                            <tr>
                                <td>{{$value->id_proyecto}}</td>
                                <td>{{$value->nb_proyecto}}</td>
                                <td>{{$value->created_at}}</td>
                                <td>{{$value->updated_at}}</td>
                                <td> 
                                    <a href="{{route('proyecto.show',$value->id_proyecto)}}"
                                    class="btn btn-sm btn-success">Ver detalle</a>
                                    
                                </td>
                                <td>
                                    <a href="{{route('proyecto.edit',$value->id_proyecto)}}"
                                    class="btn btn-sm btn-default">Editar</a>
                                    
                                </td>
                                 <td> 
                                    {!!Form::open (['route'=>['proyecto.destroy',$value->id_proyecto],
                                    'method'=>'DELETE'])!!}
                                            
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!!Form::close()!!}
                                    
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{$proyecto->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection