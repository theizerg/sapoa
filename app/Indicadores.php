<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicadores extends Model
{
    protected $table= 'indicadores';

    protected $fillable=['tx_indicadores','tx_tipo','id_objetivo'];

    protected $primaryKey = 'id_indicadores';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';

  	public function objetivo()
	{

		 return $this->belongsTo('App\Models\Objetivo', 'id_objetivo');
	}

}
