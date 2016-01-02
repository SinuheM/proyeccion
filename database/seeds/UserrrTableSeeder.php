<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert([
            [
            'nombre' => 'Admin',
            'email'  => 'admin',
            'password'   => bcrypt('cafobe'),
            'dni'      => '12345678',
            'telefono'   =>  '985401483',
            'remember_token' => 'cafobe',
            ]
        ]);
    }
}