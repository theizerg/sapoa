@extends('layouts.app')
@section('content')
<div class="container"><br>
     <small>Editar objetivo</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Editar objetivo
                </div>
                <div class="panel-body">
                 {!! Form::model($objetivo, ['route' => ['objetivo.update', $objetivo->id_objetivo],'method' => 'PUT']) !!}
                        
                
                    @include('objetivo.partials.edit')
                           


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      




                

    

