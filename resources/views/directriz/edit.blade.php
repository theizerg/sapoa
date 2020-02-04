@extends('layouts.app')
@section('content')
<div class="container"><br><br>
     <small>Editar directriz</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Directriz
                        <a href="{{route('directriz.index' )}}" 
                    class="btn-sm btn-primary pull-right">Volver</a>
                    </h3>
                </div>
                <div class="panel-body">
    {!! Form::model($direct, ['route' => ['directriz.update', $direct->id_directriz],'method' => 'PUT']) !!}
                        
                @include('directriz.partials.edit')
                 

                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
