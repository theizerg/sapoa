@if (count($errors) > 0)
    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@include('combos.edit')

@include('actividades.partials.iniciativa')

<div class="container">
	<div class="col-sm-5">
          <div class="box box-primary">
             <div class="form-group well">
                <label for="">Descripción</label><br>
               <textarea name="tx_descripcion" style="width:100% ; height: 120px;" id="tx_descripcion" required="">
               	
               </textarea>	

                </div>
            </div>
        </div>
            
  
<div class="col-sm-5">
    <div class="box box-primary">
        <div class="form-group well">
           <label for="">Producto</label><br>
           <textarea name="tx_producto" style="width:100% ; height: 120px;" id="tx_producto" required=""></textarea>	

                </div>
            </div>
        </div>
<div class="col-sm-5">
    <div class="box box-primary">
        <div class="form-group well">
            <label for="">Requerimiento</label><br>
           <textarea name="tx_requerimiento" style="width:100% ; height: 120px;" id="tx_requerimiento" required=""></textarea>	

                </div>
            </div>
        </div>
<div class="col-sm-5">
    <div class="box box-primary">
        <div class="form-group well">
            <label for="">Responsable</label><br>
           <textarea name="tx_responsable" style="width:100% ; height: 120px;" id="tx_responsable" required=""></textarea>	

                </div>
            </div>
        </div>

 <div class="col-sm-5">
    <div class="box box-primary">
        <div class="form-group well">
            <label for="">Fecha de inicio</label><br>
     
<input type="text" name="fe_inicio" value="" placeholder="Fecha de inicio" id="fe_inicio">	
                </div>
            </div>
        </div>

 <div class="col-sm-5">
    <div class="box box-primary">
        <div class="form-group well">
            <label for="">Fecha de fin</label><br>
     
<input type="text" name="fe_fin" value="" placeholder="Fecha de fin" id="fe_fin">	
                </div>
            </div>
        </div>
            
    </div>


<div class="container">
   <div class="form-group">
  {{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
	</div>
</div>

 <script src="{{ asset('modules/sapoa/js/times.js') }}" type="text/javascript" charset="utf-8" async defer></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


