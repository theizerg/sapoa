<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gerencia extends Model
{
 protected $table= 'gerencia';

 protected $fillable=['nb_gerencia','id_proyecto'];

    protected $primaryKey = 'id_gerencia';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';


  	public function proyecto()
	{

		 return $this->belongsTo('App\Models\Proyecto', 'id_proyecto');
	}


	public function gerencia()
	{

		 return $this->HasMany('App\Models\Gerencia', 'id_gerencia');
	}
	
	public function coordinacion()
	{

		 return $this->HasMany('App\Models\Coordinacion', 'id_gerencia');
	}

	

	



	
}



