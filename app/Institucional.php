<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institucional extends Model
{
    protected $table= 'institucional';

    protected $fillable=['tx_institucional'];

    protected $primaryKey = 'id_institucional';
 
 	const CREATED_AT= 'fe_creado';
  	const UPDATED_AT= 'fe_actualizado';

	


}
