<?php

use Illuminate\Database\Seeder;

class TipoProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_productos')->insert([
        	
			['id' =>'1', 'nombre' => 'TERMOSIFON', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>'2', 'nombre' => 'TERMOELECTRICO', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>'3', 'nombre' => 'CALEFONT','categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>'4', 'nombre' => 'CALDERA', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>'5','nombre' =>  'TERMO ELECTRICO', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>'6','nombre' =>  'BOMBA DE CALOR ', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>'7','nombre' =>  'COCINA ', 'categoria_id' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
			['id' =>'8','nombre' =>  'LAVADORA','categoria_id' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]

			
        ]);
    }
}
