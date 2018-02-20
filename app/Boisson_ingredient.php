<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Boisson_ingredient extends Pivot
{
    protected $fillable= ['nbDose'];
    public $timestamps=false;
}
