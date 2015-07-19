<?php namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class alimentos extends Model {

	public function scopeCodigo($query,$codigo){
		if(trim($codigo)<>''){
			$query->where(\DB::raw('CONCAT(CTAL,CALIM)'),"LIKE","$codigo%");
		}
	}
	public function scopeNombre($query,$nombre){
		if (trim($nombre)<>''){
			$query->where('NOMALIM',"LIKE","$nombre%");
		}

	}
}
