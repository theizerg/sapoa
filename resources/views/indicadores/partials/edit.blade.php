@include('combos.edit')
                   <div class="col-sm-12">
                        <div class="col-sm-12">
                            <div class="box box-primary"><br>
                                <label for="">Objetivo</label>  
                                <div class="form-group">
                                <textarea name="" id="" style="width:100% ; height: 120px;" disabled="true">{{$indicadores->objetivo->tx_objetivo}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                <center>
                <div class="col-sm-6">
                    <div class="box box-primary"><br>
                        <div class="form-group">
                            <label for="">Tipo seleccionado</label><br>
                            {{$indicadores->tx_tipo}}
                            </div>
                        </div>
                    </div>
                </center>
                <center>
                    <div class="col-sm-6">
                        <div class="box box-primary"><br>
                            <div class="form-group">
                        <label for="">Tipo</label><br>
                        <input type="radio" name="tx_tipo" value="Demanda" checked="checked" id="tx_tipo" /> Demanda
                        <input type="radio" name="tx_tipo" value="Planificado" id="tx_tipo" /> Planificado
                        <input type="radio" name="tx_tipo" value="Porcentaje"  id="tx_tipo"/> Porcentaje
                            </div>
                        </div>
                    </div>
                </center>
             <div class="col-sm-12">
                <div class="box box-primary"><br>
                    <div class="form-group">
                {!!Form::label('Indicadores')!!}
        <textarea name="tx_indicadores" style="width:100% ; height: 120px;" id="tx_indicadores"  required="">{{$indicadores->tx_indicadores}}</textarea>    
                    </div>
                <br>
            </div>
        </div>

                    
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
