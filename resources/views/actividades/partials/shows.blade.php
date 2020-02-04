<div class="container">
    <div class="col-sm-9">
                <div class="form-group">
                    <label for="">Proyecto/Acción</label>
                    <select name="id_proyecto" class="form-control" id="id_proyecto"  required="" disabled="true">                                      
                        <option value="{{$actividades->objetivo->proyecto->id_proyecto}}">{{$actividades->objetivo->proyecto->nb_proyecto}}</option>
                    </select>
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Gerencia</label>
                <select name="id_gerencia" class="form-control" id="id_gerencia"  required="" disabled="true">
                    <option value="{{$actividades->objetivo->gerencia->id_gerencia}}" disable="true" selected="true">{{$actividades->objetivo->gerencia->nb_gerencia}}</option>
                            </select>
                            </div>
                    </div> 
<div class="col-sm-6">
        <div class="form-group">
            <label for="">Coordinacion</label>
                <select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
                    <option value="{{$actividades->objetivo->coordinacion->id_coordinacion}}" disable="true" selected="true">{{$actividades->objetivo->coordinacion->nb_coordinacion}}</option>
                            </select>
                            </div>
                    </div> 