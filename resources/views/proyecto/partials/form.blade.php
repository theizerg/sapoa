<div class="form-group">
	{{Form::label('proyecto','Proyecto') }}
	{{ Form:: text('nb_proyecto',null,['class'=>'form-control','placeholder' => 'Nombre del proyecto/acción' , 'required']) }}
</div>

<div class="form-group">
	{{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>