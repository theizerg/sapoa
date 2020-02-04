<br>
   @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div><br />
      @endif
<div class="panel panel-default box box-primary">
     <div class="panel-heading">
         <h3>Actividades de iniciativa cargadas
             <a href="{{route('actividades.index' )}}" 
                    class="btn btn-primary pull-right">Volver</a>
                    </h3>
                </div>
                <div class="panel-body">

             @include('combos.edit')
			@include('actividades.partials.iniciativa')


<div class="col-sm-6">
    <div class="box box-primary">
        <div class="form-group well">
           <label for="">Descripción</label><br>
           <textarea name="tx_descripcion" style="width:100% ; height: 120px;" id="tx_descripcion" required="">
             {{$actividades->tx_descripcion}}
           </textarea>  
                </div>
            </div>
        </div>
<div class="col-sm-6">
    <div class="box box-primary">
        <div class="form-group well">
           <label for="">Producto</label><br>
           <textarea name="tx_producto" style="width:100% ; height: 120px;" id="tx_producto" required="">
             {{$actividades->tx_producto}}
           </textarea>	
                </div>
            </div>
        </div>
<div class="col-sm-6">
    <div class="box box-primary">
        <div class="form-group well">
           <label for="">Requerimiento</label><br>
           <textarea name="tx_requerimiento" style="width:100% ; height: 120px;" id="tx_requerimiento" required="">
             {{$actividades->tx_requerimiento}}
           </textarea>	

                </div>
            </div>
        </div>
<div class="col-sm-6">
    <div class="box box-primary">
        <div class="form-group well">
           <label for="">Responsable</label><br>
           <textarea name="tx_responsable" style="width:100% ; height: 120px;" id="tx_responsable" required="">
              {{$actividades->tx_responsable}}
           </textarea>	
                </div>
            </div>
        </div>
<center><div class="col-sm-6">
    <div class="box box-primary">
        <div class="form-group well">
            <label for="">Inicio</label><br>
     
<input type="text" name="fe_inicio" id="fe_inicio" value="{{$fechainicio}}">

                </div>
            </div>
        </div>

<div class="col-sm-6">
    <div class="box box-primary">
        <div class="form-group well">
            <label for="">Fin</label><br>
     
<input type="text" name="fe_fin" value="{{$fechafinal}}" placeholder="Fecha de fin" id="fe_fin">  

                          </div>
                      </div>
                  </div><br>
                  <div class="form-group">
  {{ Form:: submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
  </div>
     
          </center>

  
</div>
    </div>






 <script src="{{ asset('modules/sapoa/js/times.js') }}" type="text/javascript" charset="utf-8" async defer></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

