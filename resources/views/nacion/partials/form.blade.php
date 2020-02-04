<div class="form-group">
	{{Form::label('nacion','Plan de la nación') }}
	{{ Form:: textarea('tx_nacion',null,['class'=>'form-control','placeholder' => 'Escriba el plan de la nación' , 'required']) }}
</div>

<div class="form-group">
	{{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>