
@include('combos.edit')

<div class="container">
  <div class="col-sm-8">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                        <div class="form-group">
                            <label for="">Objetivo cargado</label><br>
                           <textarea name="" id=""style="width:100% ; height: 120px;" disabled=""> {{$iniciativas->objetivo->tx_objetivo}}</textarea>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
</div>
<div class="container">
  <div class="col-sm-8">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                        <div class="form-group">
                            <label for="">Plan de la nacion cargado</label><br>
                           <textarea name="" id=""style="width:100% ; height: 120px;" disabled=""> {{$iniciativas->nacion->tx_nacion}}</textarea>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
</div>
<div class="container">
  <div class="col-sm-8">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                        <div class="form-group">
                            <label for="">Objetivo estratégico institucional cargado</label><br>
                           <textarea name="" id=""style="width:100% ; height: 120px;" disabled=""> {{$iniciativas->institucional->tx_institucional}}</textarea>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
</div>
<div class="container">
  <div class="col-sm-8">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                {!!Form::label('Iniciativa')!!}
        <textarea name="tx_iniciativa" style="width:100% ; height: 120px;" id="tx_iniciativa"  required="">{{$iniciativas->tx_iniciativa}}</textarea>    
                </div>
            </div>
        </div>
    </div>
</div>
               
             <br>
        
                    
         <div class="col-sm-12">
            <div class="form-group">
                <button type="submit" style="width: 200px; height:50px; " class="btn btn-success">
                    <i class="fa fa-edit"></i>
                </button>
                    </div>
                    </div>
                </div>
            </div>  
        </div>

                      