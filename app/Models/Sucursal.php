<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    protected $fillable = [
        'ciudad',
        'direccion_fisica',
        'telefono_contacto'
    ];
}
