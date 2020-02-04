<?php foreach ($objetivos as $key => $value): ?>
<?php endforeach ?>
<center><div class="container">
    <div class="col-sm-9">
                <div class="form-group">
                    <label for="">Proyecto/Acción</label>
                    <select name="id_proyecto" class="form-control" id="id_proyecto"  required="" disabled="true">                                      
                        <option value="{{$value->proyecto->id_proyecto}}">{{$value->proyecto->nb_proyecto}}</option>                     
                 
                    </select>   
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Gerencia</label>
                            <select name="id_gerencia" class="form-control" id="id_gerencia"  required="" disabled="true">
                                <option value="{{$value->gerencia->id_gerencia}}" disable="true" selected="true">{{$value->gerencia->nb_gerencia}}</option>
                            </select>
                            </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Coordinacion</label>
                            <select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
                                <option value="{{$value->coordinacion->id_coordinacion}}" disable="true" selected="true" >{{$value->coordinacion->nb_coordinacion}}</option>
                            </select>
                        </div>
                     </div>
         </div>
     </div>
</div>

</center>
                      