@include('objetivo.partials.combo')

<center><div class="col-sm-12">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo</label><br>

               <textarea name="tx_objetivo" style="width:100% ; height: 120px;" id="tx_objetivo" required="">{{$objetivo->tx_objetivo}}</textarea>	
                </div>
            </div>
        </div>
        <div class="col-sm-12">
			<div class="form-group">
				<button type="submit" style="width: 200px; height:50px; " class="btn btn-primary">
					<i class="fa fa-edit"> Editar</i>
						</button>
					</div>
				</div>
            </center>
        </div>
    </div>

        



                

    

