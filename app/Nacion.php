<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Nacion extends Model
{
    protected $table= 'nacion';

    protected $fillable=['tx_nacion'];

    protected $primaryKey = 'id_nacion';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';

	public function nacion()
	{

		 return $this->HasMany('App\Models\Nacion', 'id_nacion');
	}


}
