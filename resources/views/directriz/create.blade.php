@extends('layouts.app')
@section('content')

<div class="container"><br><br>
     <small>Crear nueva directriz</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Directriz
                </div>
                <div class="panel-body">

                {!!Form::open (['route'=>'directriz.store','id'=>'form'])!!}
                        
                
                @include('directriz.partials.form')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
