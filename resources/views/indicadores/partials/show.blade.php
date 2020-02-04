
   <center><div class="col-sm-12">
                <div class="form-group">
                    <label for="">Proyecto/Acción</label>
                    <select name="id_proyecto" class="form-control" id="id_proyecto"  required="" disabled="true">                                      
                        <option value="{{$indicadores->objetivo->proyecto->id_proyecto}}">{{$indicadores->objetivo->proyecto->nb_proyecto}}</option>
                    </select>
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Gerencia</label>
        <center><select name="id_gerencia" class="form-control" id="id_gerencia"  required="" disabled="true">
                    <option value="{{$indicadores->objetivo->gerencia->id_gerencia}}" disable="true" selected="true">{{$indicadores->objetivo->gerencia->nb_gerencia}}</option>
                            </select></center>
                            </div>
                    </div> 
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Coordinacion</label>
                <select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
                    <option value="{{$indicadores->objetivo->coordinacion->id_coordinacion}}" disable="true" selected="true">{{$indicadores->objetivo->coordinacion->nb_coordinacion}}</option>
                                    </select>
                                    </div>
                                </div> 
<center><div class="col-sm-12">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo seleccionado</label><br>

                {{$indicadores->objetivo->tx_objetivo}}
                </div>
            </div>
        </div>
    </center>
<center><div class="col-sm-9">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Indicador</label><br>

                {{$indicadores->tx_indicadores}}
                </div>
            </div>
        </div>
    </center>
<center><div class="col-sm-3">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Tipo de indicador</label><br>

                {{$indicadores->tx_tipo}}
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