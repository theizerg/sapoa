<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table= 'meta';

    protected $fillable=['tx_meta','tx_recursos','id_objetivo'];

    protected $primaryKey = 'id_meta';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';
  	
	public function objetivo()
	{

		 return $this->belongsTo('App\Models\Objetivo', 'id_objetivo');
	}


}

