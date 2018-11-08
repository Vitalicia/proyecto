<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amedicamentos extends Model
{
    use SoftDeletes;
    protected $primaryKey ='idamedicamento';
    protected $fillable = ['idamedicamento','nmedica','mindicacion','mpresen'];
}
