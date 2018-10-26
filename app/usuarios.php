<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
    use SoftDeletes;
    protected $primaryKey ='idu';
    protected $fillable = ['idu','usuario','contrasena','idt'];
    protected $date=['deleted_at'];
}
