<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $table = 'inmuebles';

    protected $fillable = [
        'inmobiliaria_id',
        'imagen',
        'image2',
        'image3',
        'nombre',
        'precio',
        'ciudad',
        'direccion',
        'descripcion',
        'banos',
        'habitaciones',
        'area',
    ];

    public function inmobiliaria()
    {
        return $this->belongsTo('App\Inmobiliaria', 'inmobiliaria_id');
    }
}
