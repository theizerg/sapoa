<?php foreach ($objetivos as $key => $value): ?>
	
<?php endforeach ?>
<div class="container">
			<div class="col-sm-9">
				<div class="form-group">
					 <div class="box box-primary">
					<label for="">Proyecto/Acción</label>
					<select name="id_proyecto" class="form-control" id="id_proyecto"  required="" disabled="true">
						<option value="{{$value->proyecto->id_proyecto}}" disable="true" selected="true">{{$value->proyecto->nb_proyecto}}</option>
					</select>
				</div>
			</div>
		
		
				
			
					<div class="col-sm-5">
						<div class="form-group">
							 <div class="box box-primary">
							<label for="">Gerencia</label>
							<select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="" disabled="true">
								<option value="{{$value->gerencia->id_gerencia}}" disable="true" selected="true">{{$value->gerencia->nb_gerencia}}</option>
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
								<option value="{{$value->coordinacion->id_coordinacion}}" disable="true" selected="true">{{$value->coordinacion->nb_coordinacion}}</option>
					</select>
				</div>
			</div>
		</div>
	</div>
		
		</div>
		
	</div>					

				