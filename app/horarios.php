<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horarios extends Model
{
    protected $primaryKey ='idh';
     protected $fillable = ['idh','tipohorario'];
}
