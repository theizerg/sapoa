<div class="panel panel-default box box-primary">
     <div class="panel-heading">
         <h3>Actividades de iniciativa cargadas
             <a href="{{route('actividades.index' )}}" 
                    class="btn btn-primary pull-right">Volver</a>
                    </h3>
                </div>
                <div class="panel-body">

                  @include('actividades.partials.shows')

<center><div class="col-sm-6">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo seleccionado</label><br>

                {{$actividades->objetivo->tx_objetivo}}
                </div>
            </div>
        </div>

 <div class="col-sm-6">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Iniciativa seleccionada</label><br>

                {{$actividades->iniciativa->tx_iniciativa}}
                                            </div>
                                        </div>
                                    </div>  
<div class="col-sm-6">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Descripción de la actividad cargada</label><br>

                {{$actividades->tx_descripcion}}
                                            </div>
                                        </div>
                                    </div>   
<div class="col-sm-6">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Producto de la actividad cargada</label><br>

                {{$actividades->tx_producto}}
                                            </div>
                                        </div>
                                    </div> 
<div class="col-sm-6">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Requerimiento de la actividad cargada</label><br>

                {{$actividades->tx_requerimiento}}
                                            </div>
                                        </div>
                                    </div>
<div class="col-sm-6">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Responsable de la actividad cargada</label><br>

                {{$actividades->tx_responsable}}
                                            </div>
                                        </div>
                                    </div>
  <div class="col-sm-6">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Inicio de la actividad cargada</label><br>

                {{$fechainicio}}
                                            </div>
                                        </div>
                                    </div>
<center><div class="col-sm-6">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Fin de la actividad cargada</label><br>

                {{$fechafinal}}
                                            </div>
                                        </div>
                                    </div>
                                </center> 
 <center><div class="col-sm-12">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Diferencia de días</label><br>

                <input type="hidden" name="interval[]" value="{{serialize($fechacompleta)}}">
               {{$fechacompleta}}
                                            </div>
                                        </div>
                                    </div>                                                                       
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </center>
                </div>
            </div>
        </div>
    </div>