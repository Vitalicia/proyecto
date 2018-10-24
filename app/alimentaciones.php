<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alimentaciones extends Model
{
    protected $primaryKey ='idalimentacion';
    protected $fillable = ['idalimentacion','hora','menu','consumo','observaciones','idalientos'];
}
