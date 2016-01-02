<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    protected $table = "carros";

    protected $fillable = ['placaCarro', 'marcaCarro', 'modeloCarro', 'colorCarro', 'tipoCarro'];
}
