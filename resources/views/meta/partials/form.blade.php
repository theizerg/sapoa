@include('combos.principales')

<div class="container">
	<div class="col-sm-8">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Meta</label><br>

               <textarea name="tx_meta" style="width:100% ; height: 120px;" id="tx_meta" required=""></textarea>	
                </div>
            </div>
        </div>
				<br>
		<div class="container">
			<div class="col-sm-8">
				<div class="box box-primary">
					<div class="form-group">
						<br>
					{!!Form::label('¿Requiere recursos presupuestarios?')!!}
				</div>
			</div>
			<div class="form-group">
					<input type="radio" name="tx_recursos" value="Si" checked="checked" id="recursos" /> Si <br/>
					<input type="radio" name="tx_recursos" value="No" /> No
				</div>
		</div>
		<center>		
		<div class="col-sm-8">
			<div class="form-group">
				<button type="submit" style="width: 200px; height:50px; " class="btn btn-primary">
					<i class="fa fa-plus-square"> Guardar</i>
						</button>
					</div>
				</div>
			</div>
		</center>

		
		




				

	

