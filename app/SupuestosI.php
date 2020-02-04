<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupuestosI extends Model
{
    protected $table= 'supuesto_iniciativa';

    protected $fillable=['tx_supuesto_iniciativa','id_objetivo','id_iniciativa'];

    protected $primaryKey = 'id_supuesto_iniciativa';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';
  	
	public function iniciativa()
	{

		 return $this->belongsTo('App\Models\Iniciativa', 'id_iniciativa');
	}

	public function objetivo()
	{

		 return $this->belongsTo('App\Models\Objetivo', 'id_objetivo');
	}



}

