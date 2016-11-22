<?php

use Illuminate\Database\Seeder;

class TipoGasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_gas')->insert([
        	
			['id' =>1, 'nombre' => 'CIUDAD', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>2, 'nombre' => 'LICUADO', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>3, 'nombre' => 'N/A','created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>4, 'nombre' => 'NATURAL',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>5, 'nombre' => 'OTRO',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]
			
        ]);
    }
}
