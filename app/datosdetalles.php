<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class datosdetalles extends Model
{
    use SoftDeletes;
    protected $primaryKey ='iddd';
    protected $fillable = ['iddd','idcuidador','paciente','hora','fecha','edad','sexo','talla','peso','ta','fc','fr','grupsan','aguvi','tipalergia','alergia','observaciones'];
  
}
