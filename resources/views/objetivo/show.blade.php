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

@include('objetivo.partials.show')

    
@endsection