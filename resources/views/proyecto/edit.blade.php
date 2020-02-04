@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Proyectos
                </div>
                <div class="panel-body ">
    					{!! Form::model($proyecto, ['route' => ['proyecto.update', $proyecto->id_proyecto],'method' => 'PUT']) !!}
                        

                        @include('proyecto.partials.form')


    					{!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection