@extends('layouts.app')
@section('content')
<div class="container"><br><br>
     <small>Crear gerencia</small>
    <div class="row">
       <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading ">
                    <h3>Gerencias
                </div>
                <div class="panel-body box box-primary">
                {!!Form::open (['route'=>'gerencia.store'])!!}
                        
                
                    @include('gerencia.partials.form')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
