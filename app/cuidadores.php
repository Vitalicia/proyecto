<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cuidadores extends Model
{
    use SoftDeletes;
    protected $primaryKey ='idcuidador';
    protected $fillable = ['idcuidador','horaentrada','horasalida','idd'];
    
}
