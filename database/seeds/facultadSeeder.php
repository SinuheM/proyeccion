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
        	 ['nombre' => 'Enfermeria',],
			 ['nombre' => 'Medicina Humana',],
			 ['nombre' => 'Ingeniería en Industrias Alimentarias',],
			 ['nombre' => 'Ingeniería Eléctrica y Electrónica',],
			 ['nombre' => 'Ingeniería Mecánica',],
			 ['nombre' => 'Ingeniería Metalúrgica y Materiales',],
			 ['nombre' => 'Ingenieria Química del Gas Natural y Energía',],
			 ['nombre' => 'Ingeniería Química Ambiental',],
			  ['nombre' => 'Ingeniería Química Industrial',],
			  ['nombre' => 'Ciencias Matemática e Informática',],
			  ['nombre' => 'Administración de Empresas',],
			  ['nombre' => 'Contabilidad',],
			  ['nombre' => 'Ciencias Naturales y Ambientales',],
			  ['nombre' => 'Economía',],
			  ['nombre' => 'Antropología',],
			  ['nombre' => 'Ciencias de la Comunicación',],
			  ['nombre' => 'Educación Inicial y Primaria',],
			  ['nombre' => 'Lenguas Literatura y Comunicación',],
			  ['nombre' => 'Filosofía Ciencias Sociales y Relaciones Humanas',],
			  ['nombre' => 'Educación Física y Psicomotricidad',],
			  ['nombre' => 'Sociología',],
			  ['nombre' => 'Trabajo Social',],
			  ['nombre' => 'Agronomía',],
			  ['nombre' => 'Ciencias Forestales y del Ambiente',],
			  ['nombre' => 'Zootecnia',],
			  ['nombre' => 'Arquitectura',],
			  ['nombre' => 'Ingeniería Civil',],
			  ['nombre' => 'Ingeniería Minas',],
			  ['nombre' => 'Ingeniería de Sistemas',]
		]);
    }
}
