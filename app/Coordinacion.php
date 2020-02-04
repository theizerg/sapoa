<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
{
 protected $table= 'coordinacion';

 protected $fillable=['nb_coordinacion','id_gerencia'];

    protected $primaryKey = 'id_coordinacion';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';


  	public function gerencia()
	{

		 return $this->belongsTo('App\Models\Gerencia', 'id_gerencia');
	}

	public function coordinacion()
	{

		 return $this->HasMany('App\Models\Coordinacion', 'id_coordinacion');
	}

	
}



