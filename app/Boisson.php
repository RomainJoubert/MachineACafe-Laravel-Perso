<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
	
  protected $fillable=['nomBoisson', 'prix'];
  public $timestamps=false;
}
