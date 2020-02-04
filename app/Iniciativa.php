<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iniciativa extends Model
{
    protected $table= 'iniciativa';

    protected $fillable=['id_nacion','id_institucional','id_objetivo','tx_iniciativa'];

    protected $primaryKey = 'id_iniciativa';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';

  	  	public function nacion()
	{

		 return $this->belongsTo('App\Models\Nacion', 'id_nacion');
	}

		public function institucional()
	{

		 return $this->belongsTo('App\Models\Institucional', 'id_institucional');
	}

		public function objetivo()
	{

		 return $this->belongsTo('App\Models\Objetivo', 'id_objetivo');
	}
	public function iniciativa()
	{

		 return $this->HasMany('App\Models\Iniciativa', 'id_iniciativa');
	}

}
