<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supuesto extends Model
{
    protected $table= 'supuesto';

    protected $fillable=['tx_supuesto','id_objetivo'];

    protected $primaryKey = 'id_supuesto';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';
  	
	public function objetivo()
	{

		 return $this->belongsTo('App\Models\Objetivo', 'id_objetivo');
	}


}

