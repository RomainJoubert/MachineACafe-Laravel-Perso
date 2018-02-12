<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vente;
use App\Boisson;

class Vente extends Model
{
	protected $fillable=['nom', 'nbSucres', 'prix', 'boisson_id'];
  	

    public function boisson()
    { 
    	$this->belongsTo('App\Boisson');
	}
	
}
