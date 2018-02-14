<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
	
  protected $fillable=['nomBoisson', 'prix'];
  public $timestamps=true;

  public function ventes()
  {
  	return $this->hasMany('App\Vente');
  }

  public function ingredients()
  {
  	return $this->belongsToMany('App\ingredient')->withPivot('nbDose');
  }
}
