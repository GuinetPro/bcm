<?php

use Illuminate\Database\Seeder;
use App\Model\TrabajoRealizar;

class TipoPresupuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipo_presupuesto')->insert([
			['id'=>1, 'trabajo_realizar_id' =>TrabajoRealizar::find(33)->id	, 'presupuesto' =>'INSTALACION', 'activado' =>	1],
			['id'=>2, 'trabajo_realizar_id' =>TrabajoRealizar::find(33)->id	, 'presupuesto' =>'REPARACION Y/O MANTENCION', 'activado' =>	1],
			['id'=>3, 'trabajo_realizar_id' =>TrabajoRealizar::find(33)->id	, 'presupuesto' =>'NORMALIZACION', 'activado' =>	1],
			['id'=>4, 'trabajo_realizar_id' =>TrabajoRealizar::find(33)->id	, 'presupuesto' =>'CONVERSION', 'activado' =>	1],
			['id'=>5, 'trabajo_realizar_id' =>TrabajoRealizar::find(14)->id	, 'presupuesto' =>'INSTALACION', 'activado' =>	1],
			['id'=>6, 'trabajo_realizar_id' =>TrabajoRealizar::find(14)->id	, 'presupuesto' =>'REPARACION Y/O MANTENCION', 'activado' =>	1],
			['id'=>7, 'trabajo_realizar_id' =>TrabajoRealizar::find(14)->id	, 'presupuesto' =>'NORMALIZACION', 'activado' =>	1],
			['id'=>8, 'trabajo_realizar_id' =>TrabajoRealizar::find(14)->id	, 'presupuesto' =>'CONVERSION', 'activado' =>	1],
			['id'=>9, 'trabajo_realizar_id' =>TrabajoRealizar::find(39)->id	, 'presupuesto' =>'INSTALACION', 'activado' =>	1],
			['id'=>10, 'trabajo_realizar_id' =>TrabajoRealizar::find(39)->id	, 'presupuesto' =>'REPARACION Y/O MANTENCION', 'activado' =>	1],
			['id'=>11, 'trabajo_realizar_id' =>TrabajoRealizar::find(39)->id	, 'presupuesto' =>'NORMALIZACION', 'activado' =>	1],
			['id'=>12, 'trabajo_realizar_id' =>TrabajoRealizar::find(39)->id	, 'presupuesto' =>'CONVERSION', 'activado' =>	1],
			['id'=>13, 'trabajo_realizar_id' =>TrabajoRealizar::find(29)->id	, 'presupuesto' =>'INSTALACION', 'activado' =>	1],
			['id'=>14, 'trabajo_realizar_id' =>TrabajoRealizar::find(29)->id	, 'presupuesto' =>'REPARACION Y/O MANTENCION', 'activado' =>	1],
			['id'=>15, 'trabajo_realizar_id' =>TrabajoRealizar::find(29)->id	, 'presupuesto' =>'NORMALIZACION', 'activado' =>	1],
			['id'=>16, 'trabajo_realizar_id' =>TrabajoRealizar::find(29)->id	, 'presupuesto' =>'CONVERSION', 'activado' =>	1],
			['id'=>17, 'trabajo_realizar_id' =>TrabajoRealizar::find(1)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>18, 'trabajo_realizar_id' =>TrabajoRealizar::find(2)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>19, 'trabajo_realizar_id' =>TrabajoRealizar::find(3)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>20, 'trabajo_realizar_id' =>TrabajoRealizar::find(4)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>21, 'trabajo_realizar_id' =>TrabajoRealizar::find(6)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>22, 'trabajo_realizar_id' =>TrabajoRealizar::find(7)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>23, 'trabajo_realizar_id' =>TrabajoRealizar::find(8)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>24, 'trabajo_realizar_id' =>TrabajoRealizar::find(9)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>25, 'trabajo_realizar_id' =>TrabajoRealizar::find(10)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>26, 'trabajo_realizar_id' =>TrabajoRealizar::find(11)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>27, 'trabajo_realizar_id' =>TrabajoRealizar::find(12)->id, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>28, 'trabajo_realizar_id' =>TrabajoRealizar::find(13)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>29, 'trabajo_realizar_id' =>TrabajoRealizar::find(15)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>30, 'trabajo_realizar_id' =>TrabajoRealizar::find(16)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>31, 'trabajo_realizar_id' =>TrabajoRealizar::find(17)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>32, 'trabajo_realizar_id' =>TrabajoRealizar::find(18)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>33, 'trabajo_realizar_id' =>TrabajoRealizar::find(19)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>34, 'trabajo_realizar_id' =>TrabajoRealizar::find(20)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>35, 'trabajo_realizar_id' =>TrabajoRealizar::find(21)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>36, 'trabajo_realizar_id' =>TrabajoRealizar::find(22)->id, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>37, 'trabajo_realizar_id' =>TrabajoRealizar::find(24)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>38, 'trabajo_realizar_id' =>TrabajoRealizar::find(25)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>39, 'trabajo_realizar_id' =>TrabajoRealizar::find(26)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>40, 'trabajo_realizar_id' =>TrabajoRealizar::find(27)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>41, 'trabajo_realizar_id' =>TrabajoRealizar::find(28)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>42, 'trabajo_realizar_id' =>TrabajoRealizar::find(30)->id, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>43, 'trabajo_realizar_id' =>TrabajoRealizar::find(31)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>44, 'trabajo_realizar_id' =>TrabajoRealizar::find(32)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>45, 'trabajo_realizar_id' =>TrabajoRealizar::find(5)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>46, 'trabajo_realizar_id' =>TrabajoRealizar::find(23)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>47, 'trabajo_realizar_id' =>TrabajoRealizar::find(33)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>48, 'trabajo_realizar_id' =>TrabajoRealizar::find(34)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>49, 'trabajo_realizar_id' =>TrabajoRealizar::find(35)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>50, 'trabajo_realizar_id' =>TrabajoRealizar::find(36)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>51, 'trabajo_realizar_id' =>TrabajoRealizar::find(37)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>52, 'trabajo_realizar_id' =>TrabajoRealizar::find(38)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>53, 'trabajo_realizar_id' =>TrabajoRealizar::find(40)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>54, 'trabajo_realizar_id' =>TrabajoRealizar::find(50)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>55, 'trabajo_realizar_id' =>TrabajoRealizar::find(51)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>56, 'trabajo_realizar_id' =>TrabajoRealizar::find(53)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>57, 'trabajo_realizar_id' =>TrabajoRealizar::find(54)->id	, 'presupuesto' =>'N/A', 'activado' =>	1],
			['id'=>58, 'trabajo_realizar_id' =>TrabajoRealizar::find(33)->id	, 'presupuesto' =>'INSTALACION + PROVISION', 'activado' =>	1]
       ]);

    }
}