<?php

use Illuminate\Database\Seeder;

class TiroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiros')->insert([
        	
			['id' =>1, 'nombre' => 'TIRO NATURAL', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>2, 'nombre' => 'TIRO FORZADO CAMARA ABIERTA', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>3, 'nombre' => 'LICUADO','created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>4, 'nombre' => 'TIRO FORZADO',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>5, 'nombre' => 'TIRO FORZADO CAMARA ESTANCA ',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>6, 'nombre' => 'S/D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>7, 'nombre' => 'OTRO',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>8,'nombre' =>  'N/A',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>9,'nombre' =>  'LICUADO', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			
        ]);
    }
}
