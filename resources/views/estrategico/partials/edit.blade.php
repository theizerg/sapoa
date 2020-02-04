<a href="#nacion" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el plan de la nación cargado</a>
	<div id="nacion" class="panel-collapse collapse">
		<div class="form-group">
	{{Form::label('nacion','Plan de la nación') }}
          <?php foreach ($nacion as $key => $value): ?>
          	<br>
          	<div class="form-group">
                  	<input type="radio" name="id_nacion" id="id_nacion" value="{{$value->id_nacion}}">{{$value->tx_nacion}}
                  </div>
          <?php endforeach ?>  
          </div>
      </div>      

<div class="container">
	<div class="col-sm-9">
		<div class="box-footer">
  	 		<div class="box box-primary">
      			<div class="box">
        		 	<div class="box-header-primary">
			<div class="form-group">
	{{Form::label('nacion','Plan de la nación seleccionado') }}
          
           <textarea name="" id="id_nacion" style="width:100% ; height: 120px;" disabled="true" value={{"$estrategico->nacion->id_nacion"}} >{{$estrategico->nacion->tx_nacion}}</textarea>	             
				</div>
			</div>
		</div>
	</div>
</div>
 
 <a href="#institucional" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el plan estratégico institucional cargado</a>
	<div id="institucional" class="panel-collapse collapse">
		<div class="form-group">
	{{Form::label('institucional','Plan de la nación') }}
          <?php foreach ($institucional as $key => $value): ?>
          	<br>
          	<div class="form-group">
                  	<input type="radio" name="id_institucional" id="id_institucional"  value="{{$value->id_institucional}}">{{$value->tx_institucional}}
                  </div>
          <?php endforeach ?>  
          </div>
   </div>
<div class="box-footer">
   <div class="box box-primary">
      <div class="box">
         <div class="box-header-primary">
			<div class="form-group">
	{{Form::label('institucional','Plan estratégico institucional seleccionado') }}
          
           <textarea name="id_institucional" id="id_institucional" style="width:100% ; height: 120px;" disabled="true" value={{"$estrategico->institucional->id_institucional"}} >{{$estrategico->institucional->tx_institucional}}</textarea>	             
				</div>
			</div>
		</div>
	</div>
</div>

 

<div class="box-footer">
   <div class="box box-primary">
      <div class="box">
         <div class="box-header-primary">
			<div class="form-group">
	{{Form::label('estrategico','Plan estratégico seleccionado') }}
          
           <textarea name="id_estrategico" id="id_estrategico" style="width:100% ; height: 120px;" disabled="true" value={{"$estrategico->estrategico->id_estrategico"}} >{{$estrategico->tx_estrategico}}</textarea>	             
				</div>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	{{Form::label('estrategico','Plan estratégico') }}
          
           <textarea name="tx_estrategico" id="tx_estrategico" style="width:100% ; height: 120px;" value="" >{{$estrategico->tx_estrategico}}</textarea>	             
				</div>	

<br><br><br>
	<div class="form-group">
		
		<button type="submit" style="width: 200px; height:50px; " class="btn btn-primary">
					<i class="fa fa-plus-square"></i>
						</button>
			</div>
   		</div>
   </div>