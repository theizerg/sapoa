@extends('layouts.app')
@section('content')
<div class="container">
     
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>
            
    {!! Form::model($actividades, ['route' => ['actividades.update', $actividades->id_actividades],'method' => 'PUT']) !!}
                        
                
               @include('actividades.partials.edit')

                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
