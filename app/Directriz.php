<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Directriz extends Model
{
    protected $table= 'directriz';

    protected $fillable=['id_estrategico','id_nacion','id_institucional','id_objetivo'];

    protected $primaryKey = 'id_directriz';
 
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

		public function estrategico()
	{

		 return $this->belongsTo('App\Models\Estrategico', 'id_estrategico');
	}

		public function objetivo()
	{

		 return $this->belongsTo('App\Models\Objetivo', 'id_objetivo');
	}



}
