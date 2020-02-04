@extends('layouts.app')
@section('content')
<div class="container"><br>
     <small>Crear Iniciativa</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Iniciativa
                </div>
                <div class="panel-body">
                {!!Form::open (['route'=>'iniciativa.store'])!!}
                        
                
                    @include('iniciativa.partials.form')
                           


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection