<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamentos extends Model
{
    protected $primaryKey ='idmedicamento';
    protected $fillable = ['idmedicamento','nombre','indicacion','presen','terminotx','idh'];
}
