<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primaryKey ='idu';
    protected $fillable = ['idu','usuario','contrasena','idd','idt'];
}
