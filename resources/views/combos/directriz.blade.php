


<div class="form-group">
	<div class="box box-primary">
		<br>
		<a href="#objetivo" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar objetivos cargados</a>
            <div id="objetivo" class="panel-collapse collapse form-group well">
            <label for="">Objetivos</label>
            <br>
			<?php foreach ($obj as $key => $values): ?>
			    <div class="form-form">
					<input type="radio" name="id_objetivo" class="id_objetivo" id="id_objetivo" value="{{$values->id_objetivo}}">{{$values->tx_objetivo}}
									<?php endforeach ?>
                     </div>
                </div>                   
             </div>
        </div>
 <div class="form-group">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                <div class="form-group"><a href="#nacion" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el plan estratégico de la nacion cargado</a>
                  <div id="nacion" class="panel-collapse collapse" >
                  
                      
                          				</div>
                       				</div>  
                    			</div> 
                  			</div>
             		 	</div>
          			</div>
<div class="form-group">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                <div class="form-group"><a href="#institucional" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el plan estratégico institucional cargado</a>
                  <div id="institucional" class="panel-collapse collapse">
 
                          				</div>
                       				</div>  
                    			</div> 
                  			</div>
             		 	</div>
          			</div>
      			</div>
<div class="form-group">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                <div class="form-group"><a href="#estrategico" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el plan estratégico  cargado</a>
                  <div id="estrategico" class="panel-collapse collapse">
                    <div class="estrategico">
                            

                                         </div>
                       				</div>  
                    			</div> 
                  		    </div>
             		 	</div>
          			</div>
      			</div>
			</div>
	</div>
<div class="form-group">
  {{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>

<script src="{{ asset('modules/sapoa/js/directriz.js') }}"></script>