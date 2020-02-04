<div class="container">
            <div class="col-sm-9">
                <div class="form-group">
                     <div class="box box-primary">
                    <label for="">Proyecto/Acción</label>
                    <select name="id_proyecto" class="form-control" id="id_proyecto"  required="" disabled="true">
                        <option value="{{$objetivo->proyecto->id_proyecto}}" disable="true" selected="true">{{$objetivo->proyecto->nb_proyecto}}</option>
                    </select>
                </div>
            </div>
        
        
                
            
                    <div class="col-sm-5">
                        <div class="form-group">
                             <div class="box box-primary">
                            <label for="">Gerencia</label>
                            <select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
                                <option value="{{$objetivo->gerencia->id_gerencia}}" disable="true" selected="true">{{$objetivo->gerencia->nb_gerencia}}</option>
                    </select>
                </div>
            </div>
        </div>

            <div class="container">
                    <div class="col-sm-5">
                        <div class="form-group">
                             <div class="box box-primary">
                                <label for="">Coordinacion</label>
                            <select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
                                <option value="{{$objetivo->coordinacion->id_coordinacion}}" disable="true" selected="true">{{$objetivo->coordinacion->nb_coordinacion}}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>