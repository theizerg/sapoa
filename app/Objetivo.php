<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objetivo extends Model
{
    protected $table= 'objetivo';

    protected $fillable=['id_proyecto','id_gerencia','id_coordinacion','tx_objetivo'];

    protected $primaryKey = 'id_objetivo';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';

  	

  	public function proyecto()
	{

		 return $this->belongsTo('App\Models\Proyecto', 'id_proyecto');
	}
	public function gerencia()
	{

		 return $this->belongsTo('App\Models\Gerencia', 'id_gerencia');
	}
	public function coordinacion()
	{

		 return $this->belongsTo('App\Models\Coordinacion', 'id_coordinacion');
	}



		public function nacion()
	{

		 return $this->belongsTo('App\Models\Nacion', 'id_nacion');
	}

	public function objetivo()
	{

		 return $this->HasMany('App\Models\Objetivo', 'id_objetivo');
	}

}

