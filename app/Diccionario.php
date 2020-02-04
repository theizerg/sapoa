<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diccionario extends Model
{
    protected $table= 'diccionario';

 	protected $fillable=['id_objetivo','id_indicadores','tx_tipo','nu_enero','nu_febrero','nu_marzo','nu_abril','nu_mayo','nu_junio','nu_julio','nu_agosto','nu_septiembre','nu_octubre','nu_noviembre','nu_diciembre','tx_descripcion'];

    protected $primaryKey = 'id_diccionario';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';



  		public function objetivo()
	{

		 return $this->belongsTo('App\Models\Objetivo', 'id_objetivo');
	}

		public function indicadores()
	{

		 return $this->belongsTo('App\Models\Indicadores', 'id_indicadores');
	}


}

