@include ('combos.principales')
<?php foreach ($directriz as $key => $value): ?>
<?php endforeach ?>

<div class="container">
		<div class="form-group">
			<div class="col-sm-6">
				<div class="box box-primary">
			<br>
			<a href="#nacion" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el plan de la nacion cargado</a>
				<div id="nacion" class="panel-collapse collapse form-group well">
					<div class="form-form">
					<input type="radio" name="id_nacion" class="id_nacion" id="id_nacion" value="{{$value->nacion->id_nacion}}">{{$value->nacion->tx_nacion}}

										</div>
									</div>	
								</div>
						</div>
				</div>
		</div>

<div class="container">
	<div class="form-group">
		<div class="col-sm-6">
			<div class="box box-primary">
			<br>
			<a href="#institucional" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el Objetivo estratégico institucional cargado</a>
				<div id="institucional" class="panel-collapse collapse form-group well">
					<div class="form-form">
					<input type="radio" name="id_institucional" class="id_institucional" id="id_institucional" value="{{$value->institucional->id_institucional}}">{{$value->institucional->tx_institucional}}

										</div>
									</div>	
								</div>
						</div>
				</div>
		</div>
<div class="container">
	<div class="col-sm-8">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Iniciativa</label><br>

               <textarea name="tx_iniciativa" style="width:100% ; height: 120px;" id="tx_iniciativa" required=""></textarea>	
                </div>
            </div>
        </div>
						</div>
				</div>

					<div class="col-sm-12">

<div class="form-group">
	<button type="submit" style="width: 200px; height:50px; " class="btn btn-primary">
		<i class="fa fa-plus-square"></i></button>
					</div>
				</div>
			</div>
