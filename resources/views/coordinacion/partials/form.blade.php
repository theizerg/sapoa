
<div class="form-group">
  {{Form::label('coordinacion','Coordinacion') }}
  {{ Form:: text('nb_coordinacion',null,['class'=>'form-control','placeholder' => 'Nombre de la gerencia' , 'required']) }}
  <br>
              <label for="">Gerencia</label>
          <select name="id_gerencia" class="form-control" id="id_gerencia">
            <option value="0" disable="true" selected="true">Seleccione</option>
          <?php foreach ($gerencia as $key => $value): ?>
            <option value={{"$value->id_gerencia"}} > {{$value->nb_gerencia}}</option>}            
          <?php endforeach ?>
          </select>
        

    

<br>
</div>

<div class="form-group">
  {{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>