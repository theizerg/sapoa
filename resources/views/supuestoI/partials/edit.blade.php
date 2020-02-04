
@include('combos.edit')



  <div class="col-sm-8">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                        <div class="form-group">
                            <label for="">Iniciativa</label><br>
                            <?php foreach ($iniciativa as $key => $value): ?>
                              
                            
                         <input type="radio" id="id_iniciativa" name="id_iniciativa" value="{{$value->id_iniciativa}}">{{$value->tx_iniciativa}}
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
             </div>
         </div>
     </div>


  <div class="col-sm-8">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                {!!Form::label('Supuesto')!!}
        <textarea name="tx_supuesto_iniciativa" style="width:100% ; height: 120px;" id="tx_supuesto_iniciativa"  required="">{{$SupuestoI->tx_supuesto_iniciativa}}</textarea>    
                  </div>
               </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
  <div class="form-group">
  <button type="submit" style="width: 200px; height:50px; " class="btn btn-primary"><i class="fa fa-save"> Editar</i>
        
  </button>
    </div>
 </div>
         
</div>         
   
