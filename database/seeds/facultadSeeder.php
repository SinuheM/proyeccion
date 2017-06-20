<?php

use Illuminate\Database\Seeder;

class facultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facultads')->insert([
        	['nombre' => '< - - - Todos - - - >',],
			['nombre' => 'Administración de Empresas',],
			['nombre' => 'Agronomía',],
			['nombre' => 'Antropología',],
			['nombre' => 'Arquitectura',],
			['nombre' => 'Ciencias de la Comunicación',],
			['nombre' => 'Ciencias Forestales y del Ambiente',],
			['nombre' => 'Ciencias Matemática e Informática',],
			['nombre' => 'Ciencias Naturales y Ambientales',],
			['nombre' => 'Contabilidad',],
			['nombre' => 'Economía',],
			['nombre' => 'Educación Inicial y Primaria',],
			['nombre' => 'Educación Física y Psicomotricidad',],
        	['nombre' => 'Enfermeria',],
			['nombre' => 'Filosofía Ciencias Sociales y Relaciones Humanas',],
			['nombre' => 'Ingeniería Civil',],
			['nombre' => 'Ingeniería de Sistemas',],
			['nombre' => 'Ingeniería Eléctrica y Electrónica',],
			['nombre' => 'Ingeniería en Industrias Alimentarias',],
			['nombre' => 'Ingeniería Mecánica',],
			['nombre' => 'Ingeniería Metalúrgica y Materiales',],
			['nombre' => 'Ingeniería Minas',],
			['nombre' => 'Ingeniería Química Ambiental',],
			['nombre' => 'Ingenieria Química del Gas Natural y Energía',],
			['nombre' => 'Ingeniería Química Industrial',],
			['nombre' => 'Junin',],
			['nombre' => 'Lenguas Literatura y Comunicación',],
			['nombre' => 'Medicina Humana',],
			['nombre' => 'Satipo',],
			['nombre' => 'Sociología',],
			['nombre' => 'Tarma',],
			['nombre' => 'Trabajo Social',],
			['nombre' => 'Zootecnia',],
			['nombre' => 'Varios',]
		]);
    }
}
