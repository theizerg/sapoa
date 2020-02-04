@include('combos.edit')

             <div class="box box-primary">
                <div class="col-sm-12">
                    <div class="form-group">
                        <br>
                        <label for="">Objetivo</label>  
                            <div class="form-group">
                                <textarea name="" id="" style="width:100% ; height: 120px;" disabled="true">{{$metas->objetivo->tx_objetivo}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-sm-6">
                           <div class="box box-primary"><br>
                        <div class="form-group">
                            <label for="">Recurso presupuestario seleccionado</label><br>
                            {{$metas->tx_recursos}}
                        </div>
                    </div>
                </div>
                    <div class="col-sm-6">
                        <div class="box box-primary"><br>
                            <div class="form-group">
                        <label for="">Recurso presupuestario</label><br>
                        <input type="radio" name="tx_recursos" value="Si" checked="checked" id="tx_recursos" /> Si
                        <input type="radio" name="tx_recursos" value="No" checked="checked" id="tx_recursos" /> No
                        </div>
                    </div>
                </div>
                    <div class="col-sm-12">
                        <div class="box box-primary"><br>
                            <div class="form-group">
                            <label for="">Meta</label>
                                  <textarea name="tx_meta" id="tx_meta" style="width:100% ; height: 120px;">{{$metas->tx_meta}}</textarea>
                             </div>
                         </div>
                    </div>
    <center> <div class="col-sm-12">
            <div class="form-group">
                <button type="submit" style="width: 200px; height:50px; " class="btn btn-primary">
                    <i class="fa fa-edit"> Editar</i>
                </button>
                    </div>
                </div>
                </div>
            </center>
            </div>  
        </div>
