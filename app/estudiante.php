<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
	protected $table = "estudiantes";

    protected $fillable = ['codigo', 'nombre', 'domicilio', 'dni', 'facultad_id'];
    
}
