<?php

use Illuminate\Database\Seeder;

class motivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivos')->insert([
            ['nombre'=>'Apoyo oftalmológico',],
			['nombre'=>'Apoyo por maternidad',],
			['nombre'=>'Apoyo por defunción',],
			['nombre'=>'Prestamo económico',],
			['nombre'=>'Apoyo por salud',],
			['nombre'=>'Apoyo por alto rendimiento académico',],
			['nombre'=>'Apoyo por beca de estímulo o deportista destacado',]
		]);
    }
}
