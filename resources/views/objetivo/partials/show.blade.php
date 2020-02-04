<div class="panel panel-default box box-primary">
     <div class="panel-heading">
         <h3>Objetivo cargado
             <a href="{{route('objetivo.index' )}}" 
                    class="btn btn-primary pull-right">Volver</a>
                    </h3>
                </div>
                <div class="panel-body">
   <center><div class="col-sm-12">
                <div class="form-group">
                    <label for="">Proyecto/Acción</label>
                    <select name="id_proyecto" class="form-control" id="id_proyecto"  required="" disabled="true">                                      
                        <option value="{{$objetivo->proyecto->id_proyecto}}">{{$objetivo->proyecto->nb_proyecto}}</option>
                    </select>
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Gerencia</label>
        <center><select name="id_gerencia" class="form-control" id="id_gerencia"  required="" disabled="true">
                    <option value="{{$objetivo->gerencia->id_gerencia}}" disable="true" selected="true">{{$objetivo->gerencia->nb_gerencia}}</option>
                            </select></center>
                            </div>
                    </div> 
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Coordinacion</label>
                <select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
                    <option value="{{$objetivo->coordinacion->id_coordinacion}}" disable="true" selected="true">{{$objetivo->coordinacion->nb_coordinacion}}</option>
                                    </select>
                                    </div>
                                </div> 
<center><div class="col-sm-12">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo seleccionado</label><br>

                {{$objetivo->tx_objetivo}}
                </div>
            </div>
        </div>
    </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</center>