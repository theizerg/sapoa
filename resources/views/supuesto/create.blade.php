@extends('layouts.app')
@section('content')

<div class="container"><br><br>
     <small>Crear nuevo supuesto</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Supuesto
                </div>
                <div class="panel-body">

                {!!Form::open (['route'=>'supuesto.store'])!!}
                        
                
                @include('supuesto.partials.form')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
