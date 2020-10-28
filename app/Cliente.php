<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'users_id', 'telefono', 'ciudad', 'fecha_nacimiento',
    ];

    public function usuario()
    {
        return $this->belongsTo( 'App\User', 'users_id' );
    }
}
