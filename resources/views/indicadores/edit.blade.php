@extends('layouts.app')
@section('content')
<div class="container"><br>
     <small>Editar Indicador</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Indicador
                </div>
                <div class="panel-body">
                 {!! Form::model($indicadores, ['route' => ['indicadores.update', $indicadores->id_indicadores],'method' => 'PUT']) !!}
                        
                
                    @include('indicadores.partials.edit')
                           


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      




				

	

