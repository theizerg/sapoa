@extends('layouts.app')
@section('content')
<div class="container"><br>
     <small>Editar Iniciativa</small>
    <div class="row">
        <div class="container">
              <br>
                 <div class="box-header-primary">
                     <div class="col-md-10 col-md-offset-1">
                     <br><br>
                        <div class="panel panel-default box box-primary  box box-primary">
                        <div class="panel-heading ">
                        <h3>Iniciativa</h3>

                     </div>
                <div class="panel-body">
                 {!! Form::model($iniciativas, ['route' => ['iniciativas.update', $iniciativas->id_iniciativa],'method' => 'PUT']) !!}
                        
                
                    @include('iniciativa.partials.edit')
                           


                {!! Form::close()!!}
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
      
