@include('supuestoI.partials.combo')

<center><div class="col-sm-12">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo creado</label><br>

                {{$SupuestoI->objetivo->tx_objetivo}}
                </div>
            </div>
        </div>

    </center>
<center><div class="col-sm-6">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Iniciativa creada</label><br>

                {{$SupuestoI->iniciativa->tx_iniciativa}}
                </div>
            </div>
        </div>
        
    </center>
 <center><div class="col-sm-6">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Supuesto de Iniciativa creada</label><br>

                {{$SupuestoI->tx_supuesto_iniciativa}}
                </div>
            </div>
        </div>

        
			    </center>
			</div>
		</div>
	</div>