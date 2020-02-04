@if (count($errors) > 0)
    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@include('combos.principales')
				<div class="container">
					<div class="col-sm-8">
						<div class="form-group">
							<div class="box box-primary">
								<br>
							 <a href="#indicadores" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar los indicadores que han sido cargados</a>
							    <div id="indicadores" class="panel-collapse collapse form-group well">
							    <?php foreach ($indicadores as $key => $value): ?>
							    	<div class="form-form">
							    		
										<input type="checkbox" name="id_indicadores"id="id_indicadores" value="{{$value->id_indicadores}}">{{$value->tx_indicadores}} <br>
											
										<label for="">Tipo</label><br>
										<input type="checkbox" name="tx_tipo"id="tx_tipo" value="{{$value->tx_tipo}}">{{$value->tx_tipo}} <br>
									<?php endforeach ?>
										</div>
									</div>
																	<br>
									<div class="col-sm-12">
										<div class="form-group"><br>
											<label for="">Descripción del indicador</label><br>
										<textarea name="tx_descripcion" id="tx_descripcion" style="width:100% ; height: 120px;">{{$diccionario->tx_descripcion}}</textarea>
									</div>	
								</div>

@include('diccionario.partials.mesescargados')


<div class="col-sm-12">
				<div class="form-group">
				<button type="submit" style="width: 150px;" class="btn btn-primary">
					<i class="fa fa-plus-square"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('modules/sapoa/js/diccionario.js') }}"></script>