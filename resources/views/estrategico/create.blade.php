@extends('layouts.app')
@section('content')
<div class="container"><br><br>
     <small>Crear plan estratégico </small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Plan estratégico 
                </div>
                <div class="panel-body">
                {!!Form::open (['route'=>'estrategico.store','id'=>'form'])!!}
                        
                
                @include('estrategico.partials.form')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
