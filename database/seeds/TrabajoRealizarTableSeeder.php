<?php

use Illuminate\Database\Seeder;
use App\Model\TipoPago;


class TrabajoRealizarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('trabajo_realizar')->insert([
                    	

             /*['id'=>'0', 'trabajo' =>'SIN TRABAJO', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],*/
             ['id'=>'1', 'trabajo' =>'INSTALACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'2', 'trabajo' =>'MANTENCION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'3', 'trabajo' =>'CONVERSION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'4', 'trabajo' =>'NORMALIZACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'5', 'trabajo' =>'INSTRUCCION', 'activado' =>'0', '0'],
             ['id'=>'6', 'trabajo' =>'PUESTA EN MARCHA', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'7', 'trabajo' =>'TRABAJO ESPECIAL', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'8', 'trabajo' =>'VISITA EN GARANTIA', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'9', 'trabajo' =>'REPARACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'10','trabajo' => 'INSTALACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(3)->id],
             ['id'=>'11','trabajo' => 'OTRO', 'activado' =>'0','tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'12','trabajo' => 'MANTENCION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(3)->id],
             ['id'=>'13','trabajo' => 'TRANSFORMACION', 'activado' =>'0','tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'14','trabajo' => 'PRESUPUESTO', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(3)->id],
             ['id'=>'15','trabajo' => 'PUESTA EN MARCHA', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(3)->id],
             ['id'=>'16','trabajo' => 'TRABAJO ESPECIAL', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(3)->id],
             ['id'=>'17','trabajo' => 'REPARACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(3)->id],
             ['id'=>'18','trabajo' => 'VISITA EN GARANTIA', 'activado' =>'1', 'tipo_pago_id' =>'4'],
             ['id'=>'19','trabajo' => 'INSTALACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(5)->id],
             ['id'=>'20','trabajo' => 'PPTO. TRANSFORMACION', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'21','trabajo' => 'PPTO. NORMALIZACION', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'22','trabajo' => 'PPTO. INSTALACION', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'23','trabajo' => 'PPTO. MANTENCION', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'24','trabajo' => 'PPTO. REPARACION', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'25','trabajo' => 'TRABAJO ESPECIAL', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(5)->id],
             ['id'=>'26','trabajo' => 'REPARACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(5)->id],
             ['id'=>'27','trabajo' => 'MANTENCION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(7)->id],
             ['id'=>'28','trabajo' => 'MANTENCION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(9)->id],
             ['id'=>'29','trabajo' => 'PRESUPUESTO', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(9)->id],
             ['id'=>'30','trabajo' => 'TRABAJO ESPECIAL', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(9)->id],
             ['id'=>'31','trabajo' => 'REPARACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(9)->id],
             ['id'=>'32','trabajo' => 'INSTALACION', 'activado' =>'1','tipo_pago_id' =>TipoPago::find(10)->id],
             ['id'=>'33','trabajo' => 'PRESUPUESTO', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id],
             ['id'=>'34','trabajo' => 'CONVERSION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(3)->id],
             ['id'=>'35','trabajo' => 'NORMALIZACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(3)->id],
             ['id'=>'36','trabajo' => 'CONVERSION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(5)->id],
             ['id'=>'37','trabajo' => 'MANTENCION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(5)->id],
             ['id'=>'38','trabajo' => 'NORMALIZACION', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(5)->id],
             ['id'=>'39','trabajo' => 'PRESUPUESTO', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(5)->id],
             ['id'=>'40','trabajo' => 'PUESTA EN MARCHA', 'activado' =>'1','tipo_pago_id' =>TipoPago::find(5)->id],
             ['id'=>'50','trabajo' => 'COBRO PENDIENTE', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'51','trabajo' => 'METROGAS INSTALACION', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'52','trabajo' => 'PRESUPUESTO ACEPTADO', 'activado' =>'0', 'tipo_pago_id' =>TipoPago::find(0)->id],
             ['id'=>'53','trabajo' => 'VISITA SUPERVISOR', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(11)->id],
             ['id'=>'54','trabajo' => 'RECLAMO', 'activado' =>'1', 'tipo_pago_id' =>TipoPago::find(1)->id]

			
        ]);
    }
}
