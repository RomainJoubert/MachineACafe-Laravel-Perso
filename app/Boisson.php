<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
	
  protected $fillable=['nomBoisson', 'prix'];
  public $timestamps=false;

  public function ventes()
  {
  	return $this->hasMany('App\Boisson');
  }
}
