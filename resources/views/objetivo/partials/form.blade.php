
		
		<div class="container">
			<div class="col-sm-8">
				<div class="form-group">
					<label for="">Proyecto/Acción</label>
					<select name="id_proyecto" class="form-control" id="id_proyecto"  required="">
						<option value="0" disable="true" selected="true">Seleccione</option>
					<?php foreach ($proyecto as $key => $value): ?>
						<option value={{"$value->id_proyecto"}} > {{$value->nb_proyecto}}</option>}						
					<?php endforeach ?>
					</select>
				
				
				
				
					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Gerencia</label>
							<select name="id_gerencia" class="form-control" id="id_gerencia"  required="">
								<option value="0" disable="true" selected="true"></option>


							</select>
							</div>
					</div>

				

					<div class="col-sm-6">
						<div class="form-group">
							<label for="">Coordinacion</label>
							<select name="id_coordinacion" class="form-control" id="id_coordinacion"  required="">
								<option value="0" disable="true" selected="true"></option>
							</select>
							</div>
						</div>	

<center><div class="col-sm-12">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo</label><br>

               <textarea name="tx_objetivo" style="width:100% ; height: 120px;" id="tx_objetivo" required=""></textarea>	
                </div>
            </div>
        </div>
        <div class="col-sm-12">
			<div class="form-group">
				<button type="submit" style="width: 200px; height:50px; " class="btn btn-primary">
					<i class="fa fa-plus-square"> Guardar</i>
						</button>
					</div>
				</div>
    </center>
		</div>
	</div>
</div>

		
        
        


		<script src="{{ asset('modules/sapoa/js/objetivoFuncional.js') }}"></script>
		

	

