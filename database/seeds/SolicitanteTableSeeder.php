<?php

use Illuminate\Database\Seeder;
use App\Model\TipoPago;


class SolicitanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       	DB::table('solicitantes')->insert([
			       					      
			['cod2'=>6,'id'=>'1', 'tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'CLIENTE', 'activado' =>'1'],
			['cod2'=>1,'id'=>'2', 'tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'SODIMAC', 'activado' =>'1'],
			['cod2'=>2,'id'=>'3', 'tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'EASY', 'activado' =>'1'],
			['cod2'=>3,'id'=>'4', 'tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'MTS', 'activado' =>'1'],
			['cod2'=>4,'id'=>'5', 'tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'OTRO', 'activado' =>'1'],
			['cod2'=>5,'id'=>'6', 'tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'JUNKERS', 'activado' =>'1'],
			['cod2'=>6,'id'=>'7', 'tipo_pago_id' =>TipoPago::find(3)->id, 'solicitante' =>'CLIENTE', 'activado' =>'1'],
			['cod2'=>1,'id'=>'8', 'tipo_pago_id' =>TipoPago::find(3)->id, 'solicitante' =>'SODIMAC', 'activado' =>'1'],
			['cod2'=>2,'id'=>'9', 'tipo_pago_id' =>TipoPago::find(3)->id, 'solicitante' =>'EASY', 'activado' =>'1'],
			['cod2'=>3,'id'=>'10','tipo_pago_id' =>TipoPago::find(3)->id,'solicitante' => 'MTS', 'activado' =>'1'],
			['cod2'=>4,'id'=>'11','tipo_pago_id' =>TipoPago::find(3)->id,'solicitante' => 'OTRO', 'activado' =>'1'],
			['cod2'=>5,'id'=>'12','tipo_pago_id' =>TipoPago::find(3)->id,'solicitante' => 'JUNKERS', 'activado' =>'1'],
			['cod2'=>6,'id'=>'13','tipo_pago_id' =>TipoPago::find(4)->id,'solicitante' => 'CLIENTE','activado' =>'1'],
			['cod2'=>1,'id'=>'14','tipo_pago_id' =>TipoPago::find(4)->id,'solicitante' => 'SODIMAC', 'activado' =>'1'],
			['cod2'=>2,'id'=>'15','tipo_pago_id' =>TipoPago::find(4)->id,'solicitante' => 'EASY','activado' =>'1'],
			['cod2'=>3,'id'=>'16','tipo_pago_id' =>TipoPago::find(4)->id,'solicitante' => 'MTS', 'activado' =>'1'],
			['cod2'=>4,'id'=>'17','tipo_pago_id' =>TipoPago::find(4)->id,'solicitante' => 'OTRO','activado' =>'1'],
			['cod2'=>5,'id'=>'18','tipo_pago_id' =>TipoPago::find(4)->id,'solicitante' => 'JUNKERS', 'activado' =>'1'],
			['cod2'=>6,'id'=>'19','tipo_pago_id' =>TipoPago::find(5)->id,'solicitante' => 'CLIENTE', 'activado' =>'1'],
			['cod2'=>1,'id'=>'20','tipo_pago_id' =>TipoPago::find(5)->id,'solicitante' => 'SODIMAC', 'activado' =>'1'],
			['cod2'=>2,'id'=>'21','tipo_pago_id' =>TipoPago::find(5)->id,'solicitante' => 'EASY', 'activado' =>'1'],
			['cod2'=>3,'id'=>'22','tipo_pago_id' =>TipoPago::find(5)->id,'solicitante' => 'MTS', 'activado' =>'1'],
			['cod2'=>4,'id'=>'23','tipo_pago_id' =>TipoPago::find(5)->id,'solicitante' => 'OTRO', 'activado' =>'1'],
			['cod2'=>5,'id'=>'24','tipo_pago_id' =>TipoPago::find(5)->id,'solicitante' => 'JUNKERS','activado' =>'1'],
			['cod2'=>7,'id'=>'25','tipo_pago_id' =>TipoPago::find(7)->id,'solicitante' => 'ABCDIN', 'activado' =>'1'],
			['cod2'=>8,'id'=>'26','tipo_pago_id' =>TipoPago::find(7)->id,'solicitante' => 'CHILEMAT','activado' =>'1'],
			['cod2'=>2,'id'=>'27','tipo_pago_id' =>TipoPago::find(7)->id,'solicitante' => 'EASY', 'activado' =>'1'],
			['cod2'=>3,'id'=>'28','tipo_pago_id' =>TipoPago::find(7)->id,'solicitante' => 'MTS', 'activado' =>'1'],
			['cod2'=>1,'id'=>'29','tipo_pago_id' =>TipoPago::find(7)->id,'solicitante' => 'SODIMAC','activado' =>'1'],
			['cod2'=>4,'id'=>'30','tipo_pago_id' =>TipoPago::find(7)->id,'solicitante' => 'OTRO', 'activado' =>'1'],
			['cod2'=>9,'id'=>'31','tipo_pago_id' =>TipoPago::find(7)->id,'solicitante' => 'METROGAS', 'activado' =>'1'],
			['cod2'=>6,'id'=>'32','tipo_pago_id' =>TipoPago::find(9)->id,'solicitante' => 'CLIENTE', 'activado' =>'1'],
			['cod2'=>1,'id'=>'33','tipo_pago_id' =>TipoPago::find(9)->id,'solicitante' => 'SODIMAC', 'activado' =>'1'],
			['cod2'=>2,'id'=>'34','tipo_pago_id' =>TipoPago::find(9)->id,'solicitante' => 'EASY', 'activado' =>'1'],
			['cod2'=>3,'id'=>'35','tipo_pago_id' =>TipoPago::find(9)->id,'solicitante' => 'MTS', 'activado' =>'1'],
			['cod2'=>4,'id'=>'36','tipo_pago_id' =>TipoPago::find(9)->id,'solicitante' => 'OTRO', 'activado' =>'1'],
			['cod2'=>5,'id'=>'37','tipo_pago_id' =>TipoPago::find(9)->id,'solicitante' => 'JUNKERS', 'activado' =>'1'],
			['cod2'=>6,'id'=>'38','tipo_pago_id' =>TipoPago::find(10)->id, 'solicitante' =>'CLIENTE', 'activado' =>'1'],
			['cod2'=>1,'id'=>'39','tipo_pago_id' =>TipoPago::find(10)->id, 'solicitante' =>'SODIMAC', 'activado' =>'1'],
			['cod2'=>2,'id'=>'40','tipo_pago_id' =>TipoPago::find(10)->id, 'solicitante' =>'EASY', 'activado' =>'1'],
			['cod2'=>3,'id'=>'41','tipo_pago_id' =>TipoPago::find(10)->id, 'solicitante' =>'MTS', 'activado' =>'1'],
			['cod2'=>4,'id'=>'42','tipo_pago_id' =>TipoPago::find(10)->id, 'solicitante' =>'OTRO', 'activado' =>'1'],
			['cod2'=>5,'id'=>'43','tipo_pago_id' =>TipoPago::find(10)->id, 'solicitante' =>'JUNKERS', 'activado' =>'1'],
			['cod2'=>9,'id'=>'44','tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'METROGAS', 'activado' =>'1'],
			['cod2'=>7,'id'=>'45','tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'ABCDIN', 'activado' =>'1'],
			['cod2'=>30,'id'=>'46','tipo_pago_id' =>TipoPago::find(1)->id, 'solicitante' =>'CONSTRUCTORA', 'activado' =>'1'],
			['cod2'=>9,'id'=>'47','tipo_pago_id' =>TipoPago::find(3)->id, 'solicitante' =>'METROGAS', 'activado' =>'1'],
			['cod2'=>7,'id'=>'48','tipo_pago_id' =>TipoPago::find(3)->id, 'solicitante' =>'ABCDIN','activado' =>'1'],
			['cod2'=>30,'id'=>'49','tipo_pago_id' =>TipoPago::find(3)->id, 'solicitante' =>'CONSTRUCTORA', 'activado' =>'1'],
			['cod2'=>9,'id'=>'50','tipo_pago_id' =>TipoPago::find(4)->id, 'solicitante' =>'METROGAS', 'activado' =>'1'],
			['cod2'=>7,'id'=>'51','tipo_pago_id' =>TipoPago::find(4)->id, 'solicitante' =>'ABCDIN', 'activado' =>'1'],
			['cod2'=>30,'id'=>'52','tipo_pago_id' =>TipoPago::find(4)->id, 'solicitante' =>'CONSTRUCTORA', 'activado' =>'1'],
			['cod2'=>9,'id'=>'53','tipo_pago_id' =>TipoPago::find(5)->id, 'solicitante' =>'METROGAS', 'activado' =>'1'],
			['cod2'=>7,'id'=>'54','tipo_pago_id' =>TipoPago::find(5)->id, 'solicitante' =>'ABCDIN','activado' =>'1'],
			['cod2'=>30,'id'=>'55','tipo_pago_id' =>TipoPago::find(5)->id, 'solicitante' =>'CONSTRUCTORA', 'activado' =>'1'],
			['cod2'=>30,'id'=>'56','tipo_pago_id' =>TipoPago::find(7)->id, 'solicitante' =>'CONSTRUCTORA', 'activado' =>'1'],
			['cod2'=>9,'id'=>'57','tipo_pago_id' =>TipoPago::find(9)->id, 'solicitante' =>'METROGAS', 'activado' =>'1'],
			['cod2'=>7,'id'=>'58','tipo_pago_id' =>TipoPago::find(9)->id, 'solicitante' =>'ABCDIN','activado' =>'1'],
			['cod2'=>30,'id'=>'59','tipo_pago_id' =>TipoPago::find(9)->id, 'solicitante' =>'CONSTRUCTORA', 'activado' =>'1'],
			['cod2'=>9,'id'=>'60','tipo_pago_id' =>TipoPago::find(10)->id,'solicitante' => 'METROGAS', 'activado' =>'1'],
			['cod2'=>7,'id'=>'61','tipo_pago_id' =>TipoPago::find(10)->id,'solicitante' => 'ABCDIN', 'activado' =>'1'],
			['cod2'=>30,'id'=>'62','tipo_pago_id' =>TipoPago::find(10)->id, 'solicitante' =>'CONSTRUCTORA', 'activado' =>'1'],
			['cod2'=>6,'id'=>'63','tipo_pago_id' =>TipoPago::find(11)->id, 'solicitante' =>'N/A', 'activado' =>'1']

       ]);

    }
}