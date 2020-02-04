@extends('layouts.app')
@section('content')
<div class="container"><br><br>
     <small>Editar diccionario de indicadores</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Diccionario de indicadores
                        <a href="{{route('diccionario.index' )}}" 
                    class="btn-sm btn-primary pull-right">Volver</a>
                    </h3>
                </div>
                <div class="panel-body">
    {!! Form::model($diccionario, ['route' => ['diccionario.update', $diccionario->id_diccionario],'method' => 'PUT']) !!}
                        
                @include('diccionario.partials.edit')
                 

                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
