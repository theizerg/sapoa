<center><div class="col-sm-12">
                <div class="form-group">
                    <label for="">Proyecto/Acción</label>
                    <select name="id_proyecto" class="form-control" id="id_proyecto"  required="" disabled="true">                                      
                        <option value="{{$SupuestoI->objetivo->proyecto->id_proyecto}}">{{$SupuestoI->objetivo->proyecto->nb_proyecto}}</option>
                    </select>
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Gerencia</label>
        <center><select name="id_gerencia" class="form-control" id="id_gerencia"  required="" disabled="true">
                    <option value="{{$SupuestoI->objetivo->gerencia->id_gerencia}}" disable="true" selected="true">{{$SupuestoI->objetivo->gerencia->nb_gerencia}}</option>
                            </select></center>
                            </div>
                    </div> 
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Coordinacion</label>
                <select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
                    <option value="{{$SupuestoI->objetivo->coordinacion->id_coordinacion}}" disable="true" selected="true">{{$SupuestoI->objetivo->coordinacion->nb_coordinacion}}</option>
                                    </select>
                                    </div>
                                </div> 
                          