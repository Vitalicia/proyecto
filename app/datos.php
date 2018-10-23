<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos extends Model
{
    protected $primaryKey ='idd';
    protected $fillable = ['idd','nombre','ap','am','edad','telefono','calle','numero','calle1','calle2','colonia','municipio','ciudad','cp','referencia','archivo'];

}

