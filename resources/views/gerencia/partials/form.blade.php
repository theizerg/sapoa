<div class="form-group">
	{{Form::label('gerencia','Gerencia') }}
	{{ Form:: text('nb_gerencia',null,['class'=>'form-control','placeholder' => 'Nombre de la gerencia' , 'required']) }}
	<br>
              <label for="">Proyecto/Acción</label>
          <select name="id_proyecto" class="form-control" id="id_proyecto">
            <option value="0" disable="true" selected="true">Seleccione</option>
          <?php foreach ($proyecto as $key => $value): ?>
            <option value={{"$value->id_proyecto"}} > {{$value->nb_proyecto}}</option>}            
          <?php endforeach ?>
          </select>
        

    

<br>
</div>

<div class="form-group">
	{{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>