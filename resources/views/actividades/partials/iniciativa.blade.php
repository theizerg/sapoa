				<div class="container">
					<div class="col-sm-8">
						<div class="form-group">
							<div class="box box-primary">
								<br>
							 <a href="#iniciativa" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar las iniciativa cargadas</a>
							    <div id="iniciativa" class="panel-collapse collapse form-group well">
							    <?php foreach ($iniciativa as $key => $value): ?>
							    	<div class="form-form">
							    		
										<input type="radio" name="id_iniciativa"id="id_iniciativa" value="{{$value->id_iniciativa}}">{{$value->tx_iniciativa}}


									<?php endforeach ?>
										</div>
									</div>	
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
										<input type="radio" name="id_objetivo"  id="id_objetivo" value="{{$value->id_objetivo}}">{{$value->tx_objetivo}}


									<?php endforeach ?>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>