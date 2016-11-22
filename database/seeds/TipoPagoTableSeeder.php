<?php

use Illuminate\Database\Seeder;

class TipoPagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_atenciones')->insert([
        	[
        	'id' => 1,
            'nombre' => 'POR PAGAR',
            'activado' => true,
            ],
            [
            'id' => 2,
            'nombre' => 'CONTADO',
            'activado' => false,
            ],
			[
			'id' =>3, 
            'nombre' => 'GARANTIA TALLER',
            'activado' => true,
			],
			[
			'id' =>4, 
            'nombre' => 'GARANTIA TECNICA',
            'activado' => true,
			],
			[
			'id' =>5,
            'nombre' => 'GARANTIA COMERCIAL',
            'activado' => true,
			],
			[
			'id' =>6,
            'nombre' => 'GARANTIA',
            'activado' => true,
			],
			[
			 'id' =>7, 
            'nombre' => 'CONTRATO DE MANTENCION',
            'activado' => true,
			],
			[
			 'id' =>8, 
            'nombre' => 'ATENCION COMERCIAL',
            'activado' => true,
			],

            [
             'id' =>9, 
            'nombre' => 'GARANTIA EXTENDIDA',
            'activado' => true,
            ],

			[
			 'id' =>10, 
            'nombre' => 'CONTRATO DE INSTALACION',
            'activado' => true,
			],
			[
			 'id' =>11, 
            'nombre' => 'CONTADVISITA SUPERVISORO',
            'activado' => true,
			]
			
        ]);
    }
}
