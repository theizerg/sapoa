<?php foreach ($directriz as $key => $value): ?>
<?php endforeach ?>
<div class="container">
    <div class="row">
    
        @include('combos.edit')
<center>
       
      
   
        <div class="col-sm-8">
            <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo seleccionado</label><br>

                {{$value->objetivo->tx_objetivo}}
                </div>
            </div>
        </div>
            
    </div>
</div>

</center>
<div class="container">
    
        <div class="col-sm-4">
            <div class="box box-primary">
                <div class="form-group well">
                <label for="">Plan de la nación seleccionado</label><br>

                {{$value->nacion->tx_nacion}}
            </div>
         </div>
     </div>

           <div class="col-sm-4">
            <div class="box box box-primary">
                <div class="form-group well">
                <label for="">Plan estratégico institucional cargado</label><br>

                {{$value->institucional->tx_institucional}}
            </div>
        </div>
    </div>
</div>
<div class="container">
    
    <div class="col-sm-8">
        <div class="box box-primary">
            <div class="form-group well">
                <label for="">Objetivo estratégico cargado</label><br>

                {{$value->estrategico->tx_estrategico}}
            </div> 
        </div>
    </div>
</div>

    @include('directriz.partials.nacion')


       

        
