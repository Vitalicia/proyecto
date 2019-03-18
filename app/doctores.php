<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class doctores extends Model
{
    use SoftDeletes;
    protected $primaryKey ='iddoctor';
    protected $fillable = ['iddoctor','nombre','app','apm','cedula','idt'];
    protected $date=['deleted_at'];
    
}
