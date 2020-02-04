<div class="panel panel-default box box-primary">
     <div class="panel-heading">
         <h3>Diccionario de indicadores cargados
             <a href="{{route('diccionario.index' )}}" 
                    class="btn btn-primary pull-right">Volver</a>
                    </h3>
                </div>
                <div class="panel-body">

                  @include('diccionario.partials.shows')

<center><div class="col-sm-6">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Objetivo seleccionado</label><br>

                {{$diccionario->objetivo->tx_objetivo}}
                </div>
            </div>
        </div>

 <div class="col-sm-6">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Indicadores</label><br>
                    
                    {{$diccionario->indicadores->tx_indicadores}}
               
                                            </div>
                                        </div>
                                    </div> 

<div class="col-sm-6">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Tipo de indicador</label><br>
                {{$diccionario->tx_tipo}}
        
                                            </div>
                                        </div>
                                    </div>  
<div class="col-sm-6">
        <div class="box box-primary">
             <div class="form-group well">
                <label for="">Descripción del indicador</label><br>
                    {{$diccionario->tx_descripcion}}
               
                                            </div>
                                        </div>
                                    </div>   
<div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Enero</label><br>

                {{$diccionario->nu_enero}}
                                            </div>
                                        </div>
                                    </div>
<div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Febrero</label><br>

                {{$diccionario->nu_febrero}}
                                            </div>
                                        </div>
                                    </div>
<div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Marzo</label><br>

                {{$diccionario->nu_marzo}}
                                            </div>
                                        </div>
                                </div>
 <div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Abril</label><br>

                {{$diccionario->nu_abril}}
                                            </div>
                                        </div>
                                    </div>                                 
 <div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Mayo</label><br>

                {{$diccionario->nu_mayo}}
                                            </div>
                                        </div>
                                    </div>
 <div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Junio</label><br>

                {{$diccionario->nu_junio}}
                                            </div>
                                        </div>
                                    </div>
 <div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Julio</label><br>

                {{$diccionario->nu_julio}}
                                            </div>
                                        </div>
                                    </div>                                    
 <div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Agosto</label><br>

                {{$diccionario->nu_agosto}}
                                            </div>
                                        </div>
                                    </div>
 <div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Septiembre</label><br>

                {{$diccionario->nu_septiembre}}
                                            </div>
                                        </div>
                                    </div>
  <div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Octubre</label><br>

                {{$diccionario->nu_octubre}}
                                            </div>
                                        </div>
                                    </div>
  <div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Noviembre</label><br>

                {{$diccionario->nu_noviembre}}
                                            </div>
                                        </div>
                                    </div>                                                          
<div class="col-sm-2">
    <div class="box box-primary">
             <div class="form-group well">
                <label for="">Diciembre</label><br>

                {{$diccionario->nu_diciembre}}
                                            </div>
                                        </div>
                                    </div>              
                                </div>
                         </center>
                     </div>
       