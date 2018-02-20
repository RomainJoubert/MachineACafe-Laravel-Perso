<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ingredient;


class Ingredient extends Model
{
    protected $fillable = ["nom","stock"];

    public function boissons()
    {
    	return $this->belongToMany('App\Boisson')->withPivot('nbDose');
    }
}
