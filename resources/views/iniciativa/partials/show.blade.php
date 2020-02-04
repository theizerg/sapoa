
   <center><div class="col-sm-12">
                <div class="form-group">
                    <label for="">Proyecto/Acción</label>
                    <select name="id_proyecto" class="form-control" id="id_proyecto"  required="" disabled="true">                                      
                        <option value="{{$iniciativas->objetivo->proyecto->id_proyecto}}">{{$iniciativas->objetivo->proyecto->nb_proyecto}}</option>
                    </select>
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Gerencia</label>
        <center><select name="id_gerencia" class="form-control" id="id_gerencia"  required="" disabled="true">
                    <option value="{{$iniciativas->objetivo->gerencia->id_gerencia}}" disable="true" selected="true">{{$iniciativas->objetivo->gerencia->nb_gerencia}}</option>
                            </select></center>
                            </div>
                    </div> 
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Coordinacion</label>
                <select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
                    <option value="{{$iniciativas->objetivo->coordinacion->id_coordinacion}}" disable="true" selected="true">{{$iniciativas->objetivo->coordinacion->nb_coordinacion}}</option>
                                    </select>
                                    </div>
                                </div> 
<center><div class="col-sm-12">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo seleccionado</label><br>

                {{$iniciativas->objetivo->tx_objetivo}}
                </div>
            </div>
        </div>
    </center>
<center><div class="col-sm-12">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Iniciativa</label><br>

                {{$iniciativas->tx_iniciativa}}
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