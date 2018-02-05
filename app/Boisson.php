<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
  protected $fillable=['id','nomBoisson', 'prix'];
  public $timestamps=false;
}
