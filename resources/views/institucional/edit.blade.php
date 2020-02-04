@extends('layouts.app')
@section('content')
<div class="container"><br><br>
     <small>Editar plan estratégico institucional</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Plan estratégico institucional
                </div>
                <div class="panel-body">
               {!! Form::model($institucional, ['route' => ['institucional.update', $institucional->id_institucional],'method' => 'PUT']) !!}
                        
                
                @include('institucional.partials.form')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
