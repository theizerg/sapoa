<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table= 'proyecto';

    protected $fillable=['id_proyecto','nb_proyecto'];

    protected $primaryKey = 'id_proyecto';
 
 	const CREATED_AT= 'created_at';
  	const UPDATED_AT= 'updated_at';


  	
	public function Proyecto()
	{

		 return $this->HasMany('App\Models\Proyecto', 'id_proyecto');
	}


	public function gerencia()
	{

		 return $this->HasMany('App\Models\Gerencia', 'id_proyecto');
	}


	


}
