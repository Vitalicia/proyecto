<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alimentos extends Model
{
    protected $primaryKey ='idalimentos';
    protected $fillable = ['idalimentos','tipoalimento'];
}
