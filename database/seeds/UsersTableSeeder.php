<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create( [
            'identificacion' => 00000,
            'nombre'         => 'admin',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt( 'admin' ),
            'tipo'           => 'usuario',
            'estado'         => 'ACTIVO',
        ] );
    }
}
