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
		
<div class="col-sm-8">
	<div class="form-group">
		<div class="box box-primary">
								<br>
							 <a href="#obj" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar las objetivos cargados</a>
							    <div id="obj" class="panel-collapse collapse form-group well">
							    <?php foreach ($obj as $key => $value): ?>
							    	<div class="form-form">
										<input type="checkbox" name="id_objetivo"  id="id_objetivo" value="{{$value->id_objetivo}}">{{$value->tx_objetivo}}


									<?php endforeach ?>
							</div>
						</div>	
					</div>
				</div>
<div class="col-sm-8">
						<div class="form-group">
							<div class="box box-primary">
								<br>
							 <a href="#iniciativa" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar las iniciativas cargados</a>
							    <div id="iniciativa" class="panel-collapse collapse form-group well">
							    <?php foreach ($iniciativa as $key => $value): ?>
							    	<div class="form-form">
										<input type="checkbox" name="id_iniciativa"  id="id_iniciativa" value="{{$value->id_iniciativa}}">{{$value->tx_iniciativa}}


									<?php endforeach ?>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>					

				