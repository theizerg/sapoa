@extends('layouts.app')
@section('content')
<div class="container"><br><br>
     <small>Editar Supuesto de iniciativa</small>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Supuesto de iniciativa</h3>
                </div>
                <div class="panel-body box box-primary">
               {!! Form::model($SupuestoI, ['route' => ['supuestoI.update', $SupuestoI->id_supuesto_iniciativa],'method' => 'PUT']) !!}
                        
                
                @include('supuestoI.partials.edit')
                        


                {!! Form::close()!!}
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
      
