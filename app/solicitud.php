<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitud extends Model
{
    protected $table = "solicitudes";

    protected $fillable = ['semestre', 'fecha', 'monto', 'expediente', 'garantiza', 'motivo_id', 'user_id', 'estudiante_id'];

}
