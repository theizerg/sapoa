@extends('layouts.app')
@section('content')
<div class="container"><br>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoooops!</strong>Campos necesarios. <br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     <small>Editar plan estratégico</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Plan estratégico estrategico
                </div>
                <div class="panel-body">
               {!! Form::model($estrategico, ['route' => ['estrategico.update', $estrategico->id_estrategico],'method' => 'PUT']) !!}
                        
                
                @include('estrategico.partials.edit')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
