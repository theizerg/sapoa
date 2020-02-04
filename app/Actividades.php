<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    protected $table= 'actividades';

    protected $fillable=['id_iniciativa','id_nacion','id_institucional','id_estrategico','id_objetivo',
    'tx_descripcion','tx_producto','tx_responsable','tx_producto'
  ,'fe_inicio','tx_requerimiento','fe_fin'];

    protected $primaryKey = 'id_actividades';


    protected $dates = ['fe_creado','']; 





 	const CREATED_AT= 'fe_creado';
  const UPDATED_AT= 'fe_actualizado';

 
  	
  public function objetivo()
  {

     return $this->belongsTo('App\Models\Objetivo', 'id_objetivo');
  }

   
  public function iniciativa()
  {

     return $this->belongsTo('App\Models\Iniciativa', 'id_iniciativa');
  } 
}
