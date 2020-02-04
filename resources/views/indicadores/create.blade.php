@extends('layouts.app')
@section('content')
<div class="container"><br>
     <small>Crear Indicadores</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>

            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Indicadores
                </div>
                <div class="panel-body">
                {!!Form::open (['route'=>'indicadores.store'])!!}
                        
                
                    @include('indicadores.partials.form')
                           


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection