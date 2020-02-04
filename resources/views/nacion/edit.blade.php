@extends('layouts.app')
@section('content')
<div class="container"><br><br>
     <small>Editar plan de la nacion</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Plan de la nación
                </div>
                <div class="panel-body box box-primary">
               {!! Form::model($nacion, ['route' => ['nacion.update', $nacion->id_nacion],'method' => 'PUT']) !!}
                        
                
                @include('nacion.partials.form')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
