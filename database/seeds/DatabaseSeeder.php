<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Empresa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          =>	'Admin',
            'email'         =>  'admin@admin.com',
            'password'      =>  password_hash('admin', PASSWORD_DEFAULT),
            'remember_token' => str_random(10)
       ]);

       Empresa::create([
            'nombre'        =>  'Empresa1',
            'direccion'     =>  'direccion Random',
            'correo'        =>  'empresa@empresa1.com',
            'logotipo'      =>  '',
            'sitio_web'     =>  'www.empresa1.com',
       ]);
    }
}
