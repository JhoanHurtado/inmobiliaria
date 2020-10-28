<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmobiliaria extends Model
{
    protected $table = 'inmobiliarias';

    protected $fillable = [
        'cliente_id',
        'nit',
        'nombre_empresa',
        'direccion',
        'telefono',
        'correo',
        'codigo_postal',
        'imagen',
    ];
}
