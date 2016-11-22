<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('marcas')->insert([

		['id'=>'6', 'nombre' =>'JUNKERS', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'7', 'nombre' =>'NECKAR',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'8', 'nombre' =>'OTROS',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'9', 'nombre' =>'JUNKERS ASO', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'10', 'nombre' =>'BOSCH',  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]
      ]);
    }
}
