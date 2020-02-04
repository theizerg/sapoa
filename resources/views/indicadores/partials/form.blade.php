@include('combos.principales')
	
				<center>
					<div class="col-sm-6">
						<div class="box box-primary"><br>
							<div class="form-group">
						<label for="">Tipo</label><br>
						<input type="radio" name="tx_tipo" value="Demanda" checked="checked" id="tx_tipo" /> Demanda
						<input type="radio" name="tx_tipo" value="Planificado" id="tx_tipo" /> Planificado
						<input type="radio" name="tx_tipo" value="Porcentaje"  id="tx_tipo"/> Porcentaje
							</div>
						</div>
					</div>
				</center>
		<div class="col-sm-12">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Indicadores</label><br>

               <textarea name="tx_indicadores" style="width:100% ; height: 120px;" id="tx_indicadores" required=""></textarea>	
                </div>
            </div>
        </div>
		<div class="col-sm-12">

			<div class="form-group">
				<button type="submit" style="width: 200px; height:50px; " class="btn btn-primary">
					<i class="fa fa-plus-square"></i>
						</button>
					</div>

				</div>
	


				

	

