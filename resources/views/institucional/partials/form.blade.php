<div class="form-group">
	{{Form::label('nacion','Plan estratégico institucional') }}
	{{ Form:: textarea('tx_institucional',null,['class'=>'form-control','placeholder' => 'Escriba el plan estratégico institucional' , 'required']) }}
</div>

<div class="form-group">
	{{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>