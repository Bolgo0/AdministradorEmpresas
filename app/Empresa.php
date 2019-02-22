<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;

class Empresa extends Model
{

    protected $fillable = [
        'nombre', 'direccion', 'correo', 'logotipo', 'sitio_web'
    ];

    public $timestamps = true;

    public function empleados(){
        return $this->hasMany(Empleado::class);
    }
}
