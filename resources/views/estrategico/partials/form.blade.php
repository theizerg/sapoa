
<div class="container">
  <div class="col-sm-9">
    <div class="box-footer">
        <div class="box box-primary">
            <div class="box">
              <br>
              <div class="box-header-primary">
      <div class="form-group"><a href="#nacion" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el plan de la nación cargado</a>
  <div id="nacion" class="panel-collapse collapse">

  {{Form::label('nacion','Plan de la nación') }}
          <?php foreach ($nacion as $key => $value): ?>
            <br>
            <div class="form-group">
                    <input type="radio" name="id_nacion" id="id_nacion" value="{{$value->id_nacion}}"> <td></td>{{$value->tx_nacion}}
                  </div>
          <?php endforeach ?>  
                          </div>
                       </div>  
                    </div> 
                  </div>
              </div>
          </div>
      </div>
</div>

<div class="container">
  <div class="col-sm-6">
    <div class="box-footer">
        <div class="box box-primary">
          <div class="box">
              <br>
              <div class="box-header-primary">
                <div class="form-group"><a href="#institucional" class="btn btn-danger" data-toggle="collapse">Hacer click para mostrar el plan estratégico institucional cargado</a>
                  <div id="institucional" class="panel-collapse collapse">

            {{Form::label('institucional','Plan estratégico institucional') }}
            <?php foreach ($institucional as $key => $value): ?>
            <br>
            <div class="form-group">
              <input type="radio" name="id_institucional" id="id_institucional" value="{{$value->id_institucional}}"> <td></td>{{$value->tx_institucional}}
                  </div>
          <?php endforeach ?>  
                          </div>
                       </div>  
                    </div> 
                  </div>
              </div>
          </div>
      </div>
</div>

<div class="form-group">
  {{Form::label('estrategico','Plan estratégico') }}
          
           <textarea name="tx_estrategico" id="tx_estrategico" style="width:100% ; height: 120px;" value="" ></textarea>               
        </div>  

<br><br><br>
  <div class="form-group">
    
    <button type="submit" style="width: 200px; height:50px; " class="btn btn-primary">
          <i class="fa fa-plus-square"></i>
            </button>
      </div>
      </div>
   </div>
