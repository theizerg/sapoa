@extends('layouts.app')
@section('content')
<div class="container"><br>
     <small>Editar meta</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Meta
                </div>
                <div class="panel-body">
                 {!! Form::model($metas, ['route' => ['metas.update', $metas->id_meta],'method' => 'PUT']) !!}
                        
                
                    @include('meta.partials.edit')
                           


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      




				

	

