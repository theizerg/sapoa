@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <br><br><br><br>
            <div class="panel panel-default box box-primary">
                <div class="panel-heading">
                    <h3>Iniciativa detallada

                    <a href="{{route('iniciativa.index')}}" 
                    class="btn-sm btn-info pull-right">Volver</a>                                     
                    </h3>  
                </div>
                <div class="panel-body">
                     <div class="panel-body">

                        @include('iniciativa.partials.show')
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection