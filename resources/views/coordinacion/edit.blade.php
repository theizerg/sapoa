@extends('layouts.app')
@section('content')
<div class="container"><br><br>
     <small>Editar coordinacion</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Coordinaciones
                        <a href="{{route('coordinacion.index' )}}" 
                    class="btn-sm btn-primary pull-right">Volver</a>
                    </h3>
                </div>
                <div class="panel-body box box-primary">
    {!! Form::model($coordinacion, ['route' => ['coordinacion.update', $coordinacion->id_coordinacion],'method' => 'PUT']) !!}
                        
                
                  <div class="form-group">
                    <input type="text" class="form-control" value="{{$coordinacion->nb_coordinacion}}" id="nb_coordinacion" name="nb_coordinacion">
                </div>
   
                        <div class="form-group">
                 {{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
                       </div>


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
