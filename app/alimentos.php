<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alimentos extends Model
{
    use SoftDeletes;
    protected $primaryKey ='idalimentos';
    protected $fillable = ['idalimentos','tipoalimento'];
  
}
