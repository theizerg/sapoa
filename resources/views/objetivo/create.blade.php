@extends('layouts.app')
@section('content')

<div class="container"><br><br>
     <small>Crear objetivo</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>

            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Objetivo 
                    <a href="{{route('objetivo.index' )}}" 
                    class="btn btn-info pull-right">Volver al inicio</a>    
                </div>
                <div class="panel-body box box-primary">
                {!!Form::open (['route'=>'objetivo.store','id'=>'form'])!!}
                        
                
                @include('objetivo.partials.form')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection
      
      
