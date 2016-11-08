<?php

use Illuminate\Database\Seeder;

class RegionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regiones')->insert([
        	[
            'nombre' => 'TARAPACA',
            'codigo' => 'I',
            ],
            [
            'nombre' => 'ANTOFAGASTA',
            'codigo' => 'II',
            ],
			[
			'codigo' =>'III', 
			'nombre' =>'ATACAMA'
			],
			[
			'codigo' =>'IV', 
			'nombre' =>'COQUIMBO'
			],
			[
			'codigo' =>'V',
			 'nombre' =>'VALPARAISO'
			],
			[
			'codigo' =>'VI',
			 'nombre' =>'LIBERTADOR BERNARDO OHIGGINS'
			],
			[
			 'codigo' =>'VII', 
			 'nombre' =>'MAULE'
			],
			[
			 'codigo' =>'VIII', 
			 'nombre' =>'BIOBIO'
			],
			[
			 'codigo' =>'IX', 
			 'LA ARAUCANIA'
			],
			[
			 'codigo' =>'X', 
			 'nombre' =>'LOS LAGOS'
			],
			[
			 'codigo' =>'XI', 
			 'nombre' =>'AISEN'
			],
			[
			 'codigo' =>'XII', 
			 'nombre' =>'MAGALLANES'
			],
			[
			 'codigo' =>'RM', 
			 'nombre' =>'METROPOLITANA'
			],
			[
			 'codigo' =>'XV', 
			 'nombre' =>'ARICA Y PARINACOTA'
			],
			[
			 'codigo' =>'XIV', 
			 'nombre' =>'LOS RIOS'
			]
        ]);
    }
}
