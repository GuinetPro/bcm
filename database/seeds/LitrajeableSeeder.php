<?php

use Illuminate\Database\Seeder;
use App\Model\TipoProducto;
class LitrajeableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 		DB::table('litrajes')->insert([


		['id'=>'1', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'5', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'2', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'7', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'3', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'10', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'4', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'11', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'5', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'12', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'6', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'13', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'7', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'14', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'8', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'16', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'9', 'tipo_producto_id' =>TipoProducto::find(6)->id, 'lts' =>'17', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'10','tipo_producto_id' =>TipoProducto::find(6)->id,'lts' => '18', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'11','tipo_producto_id' =>TipoProducto::find(2)->id,'lts' => '150', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'12','tipo_producto_id' =>TipoProducto::find(2)->id,'lts' => '200', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'13','tipo_producto_id' =>TipoProducto::find(2)->id,'lts' => '300', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'14','tipo_producto_id' =>TipoProducto::find(7)->id,'lts' => '13', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'15','tipo_producto_id' =>TipoProducto::find(7)->id,'lts' => '16', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'16','tipo_producto_id' =>TipoProducto::find(7)->id,'lts' => 'N/A', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'17','tipo_producto_id' =>TipoProducto::find(4)->id,'lts' => '35', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'18','tipo_producto_id' =>TipoProducto::find(4)->id,'lts' => '50', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'19','tipo_producto_id' =>TipoProducto::find(4)->id,'lts' => '80', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'20','tipo_producto_id' =>TipoProducto::find(4)->id,'lts' => '100', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'21','tipo_producto_id' =>TipoProducto::find(5)->id,'lts' => '5', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'22','tipo_producto_id' =>TipoProducto::find(5)->id,'lts' => '7', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'23','tipo_producto_id' =>TipoProducto::find(5)->id,'lts' => '10', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'24','tipo_producto_id' =>TipoProducto::find(5)->id,'lts' => '13', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'25','tipo_producto_id' =>TipoProducto::find(1)->id,'lts' =>'OTRO', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		/*['id'=>'0', 'tipo_producto_id'=>'0', 'lts' =>'S/D', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],*/
		['id'=>'26','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'5', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'27','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'7', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'28','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'10', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'29','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'13', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'30','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'16', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'31','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'17', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'32','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'18', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'33','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'19', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'34','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'35', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'35','tipo_producto_id' =>TipoProducto::find(8)->id, 'lts' =>'50', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
		['id'=>'60','tipo_producto_id' =>TipoProducto::find(7)->id, 'lts' =>'10', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],

		['id'=>'63','tipo_producto_id' =>TipoProducto::find(4)->id, 'lts' =>'120', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]

      ]);
    }
}
