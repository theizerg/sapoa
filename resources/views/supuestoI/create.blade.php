@extends('layouts.app')
@section('content')

<div class="container"><br><br>
     <small>Crear nuevo supuesto de Iniciativa</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Supuesto de Iniciativa
                </div>
                <div class="panel-body">

                {!!Form::open (['route'=>'supuestoI.store'])!!}
                        
                
                @include('supuestoI.partials.form')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
