@extends('layouts.app')
@section('content')
 <br> <br>
    <div class="row">
    	 <br> <br> <br>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Diccionario de indicadores</h3>
                </div>
                <div class="panel-body">
                {!!Form::open (['route'=>'diccionario.store'])!!}
                        
                
                    @include('diccionario.partials.form')
                           


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection
