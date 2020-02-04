<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estrategico extends Model
{
    protected $table= 'estrategico';

    protected $fillable=['tx_estrategico','id_nacion','id_institucional'];

    protected $primaryKey = 'id_estrategico';
 
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


}
