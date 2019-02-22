<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empresa;

class Empleado extends Model
{
/*
Nombre (obligatorio),
apellido (obligatorio), Empresa (clave externa para las Empresas), correo electrónico,
teléfono.
*/
    protected $fillable = [
        'nombre', 'apellido', 'empresa_id', 'correo'
    ];

    public $timestamps = true;

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
}
