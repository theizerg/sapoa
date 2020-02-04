@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row">
        <br><br><br><br>
        <div class="col-sm-10 col-md-offset-1">
            @if (Session::has('mensaje'))
    		<div class="form-group">
        		<div class="alert alert-success" style="" id="alerta" ><span class="glyphicon glyphicon-ok pull-right"></span>{{Session::get('mensaje') }}
              	<button type="button"
                    class="close"
                    data-dismiss="alert"
                    aria-hidden="true"
           			 >&times;</button>
           	  </div>
         </div>
        @endif  

<div class="panel panel-default box box-primary">
     <div class="panel-heading">
         <h3>Directriz cargada
             <a href="{{route('directriz.index' )}}" 
                    class="btn btn-primary pull-right">Volver</a>
                    </h3>
                </div>
                <div class="panel-body">
                    
                    @include('directriz.partials.show')

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection