<?php

use Illuminate\Database\Seeder;
use App\Model\TipoAtencion;
class TallerDistribuidorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('taller_distribuidor')->insert([


['id'=>'1', 'tipo_atencion_id' =>TipoAtencion::find(4)->id, 'distribuidor' =>'CLIENTE', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'2', 'tipo_atencion_id' =>TipoAtencion::find(4)->id, 'distribuidor' =>'SODIMAC', 'activado' =>'1','reg_x' => '99'],
['id'=>'3', 'tipo_atencion_id' =>TipoAtencion::find(4)->id, 'distribuidor' =>'EASY', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'4', 'tipo_atencion_id' =>TipoAtencion::find(4)->id, 'distribuidor' =>'MTS', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'5', 'tipo_atencion_id' =>TipoAtencion::find(4)->id, 'distribuidor' =>'OTRO', 'activado' =>'1','reg_x' => '99'],
['id'=>'6', 'tipo_atencion_id' =>TipoAtencion::find(3)->id, 'distribuidor' =>'SERVICIOS RIMAK', 'activado' =>'1','reg_x' => '13'],
['id'=>'7', 'tipo_atencion_id' =>TipoAtencion::find(3)->id, 'distribuidor' =>'ROGELIO ARANGUIZ Y BASTIAS', 'activado' =>'1','reg_x' => '13'],
['id'=>'8', 'tipo_atencion_id' =>TipoAtencion::find(3)->id, 'distribuidor' =>'SOSIS INGENIERIA LTDA.','activado' => '1', 'reg_x' =>'13'],
['id'=>'9', 'tipo_atencion_id' =>TipoAtencion::find(3)->id, 'distribuidor' =>'RIMAK','activado' => '1', 'reg_x' =>'13'],
['id'=>'10','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'SOSIS INGENIERIA LTDA.', 'activado' =>'1', 'reg_x' =>'13'],
['id'=>'11','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'RIMAK ORIENTE','activado' => '1', 'reg_x' =>'13'],
['id'=>'12','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'RYS', 'activado' =>'1', 'reg_x' =>'13'],
['id'=>'13','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'LEO RUZ', 'activado' =>'1','reg_x' => '13'],
['id'=>'14','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ALVARO SEGOVIA', 'activado' =>'1','reg_x' => '13'],
['id'=>'15','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'GUILLERMO VALENZUELA','activado' => '1', 'reg_x' =>'13'],
['id'=>'16','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'P Y G LTDA.', 'activado' =>'1', 'reg_x' =>'13'],
['id'=>'17','tipo_atencion_id' =>TipoAtencion::find(2)->id,'distribuidor' => 'N/A', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'18','tipo_atencion_id' =>TipoAtencion::find(6)->id,'distribuidor' => 'N/A', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'19','tipo_atencion_id' =>TipoAtencion::find(8)->id,'distribuidor' => 'N/A', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'20','tipo_atencion_id' =>TipoAtencion::find(1)->id,'distribuidor' => 'N/A', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'21','tipo_atencion_id' =>TipoAtencion::find(7)->id,'distribuidor' => 'SODIMAC', 'activado' =>'0', 'reg_x' =>'99'],
['id'=>'22','tipo_atencion_id' =>TipoAtencion::find(7)->id,'distribuidor' => 'JUNKERS', 'activado' =>'0','reg_x' =>'99'],
['id'=>'23','tipo_atencion_id' =>TipoAtencion::find(7)->id,'distribuidor' => 'MTS', 'activado' =>'0', 'reg_x' =>'99'],
['id'=>'24','tipo_atencion_id' =>TipoAtencion::find(7)->id,'distribuidor' => 'EASY','activado' =>'0', 'reg_x' =>'99'],
['id'=>'25','tipo_atencion_id' =>TipoAtencion::find(7)->id,'distribuidor' => 'OTRO', 'activado' =>'0','reg_x' => '99'],
/*['id'=>'26','tipo_atencion_id' =>TipoAtencion::find(9)->id,'distribuidor' => 'N/A', 'activado' =>'1', 'reg_x' =>'99'],*/
['id'=>'27','tipo_atencion_id' =>TipoAtencion::find(10)->id,'distribuidor' => 'N/A', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'28','tipo_atencion_id' =>TipoAtencion::find(5)->id,'distribuidor' => 'OTRO', 'activado' =>'1', 'reg_x' =>'99'],
['id'=>'30','tipo_atencion_id' =>TipoAtencion::find(7)->id,'distribuidor' => 'N/A','activado' => '1','reg_x' => '99'],
['id'=>'31','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'RICHARD EDUARDO HERNANDEZ PALAPE', 'activado' =>'1', 'reg_x' =>'15'],
['id'=>'32','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ALEJANDRO SILVA GONZALEZ', 'activado' =>'1', 'reg_x' =>'2'],
['id'=>'33','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ALEX LIZAMA CORNEJO', 'activado' =>'1', 'reg_x' =>'6'],
['id'=>'34','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ANA ISABEL HERNRIQUEZ NORAMBUENA','activado' =>'1', 'reg_x' =>'7'],
['id'=>'35','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'CARLOS ACEVEDO', 'activado' =>'1','reg_x' => '4'],
['id'=>'36','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'CARLOS PEREZ AZOCAR', 'activado' =>'1', 'reg_x' =>'9'],
['id'=>'37','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'CENTRO TECNICO ACUARELA', 'activado' =>'1', 'reg_x' =>'4'],
['id'=>'38','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'CLAUDIO TAPIA MORALES', 'activado' =>'1', 'reg_x' =>'3'],
['id'=>'39','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'CRISTIAN YAÑEZ', 'activado' =>'1','reg_x' => '7'],
['id'=>'40','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'EDMUNDO HERRADA BUSTAMANTE', 'activado' =>'1', 'reg_x' =>'13'],
['id'=>'41','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ELIZABETH YUBINI', 'activado' =>'1','reg_x' => '8'],
['id'=>'42','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ERMIN PAREDES', 'activado' =>'1', 'reg_x' =>'10'],
['id'=>'43','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ERWIN VILLEGAS RIOS', 'activado' =>'1','reg_x' =>'5'],
['id'=>'44','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'FRANCISCO FIGUEROA C.', 'activado' =>'1', 'reg_x' =>'4'],
['id'=>'45','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'HECTOR SARAVIA GUTIERREZ', 'activado' =>'1', 'reg_x' =>'3'],
['id'=>'46','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'HELMUTH CARRION R', 'activado' =>'1','reg_x' => '5'],
['id'=>'47','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'HUMBERTO ABARZA RODRIGUEZ', 'activado' =>'1', 'reg_x' =>'7'],
['id'=>'48','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'INGENIERIA EN PROYECTOS Y CIA LTDA', 'activado' =>'1','reg_x' => '8'],
['id'=>'49','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'INGENIERIA SUR AUSTRAL', 'activado' =>'1', 'reg_x' =>'10'],
['id'=>'50','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'JOB GUINEO', 'activado' =>'1', 'reg_x' =>'10'],
['id'=>'51','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'JORGE GONZALEZ', 'activado' =>'1', 'reg_x' =>'6'],
['id'=>'52','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'JORGE TORO BAEZ', 'activado' =>'1', 'reg_x' =>'11'],
['id'=>'53','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'JUAN CARLOS INSUNZA', 'activado' =>'1', 'reg_x' =>'8'],
['id'=>'54','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'LUIS DIAZ VENEGAS', 'activado' =>'1','reg_x' => '5'],
['id'=>'55','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'MARIO OTAROLA BAHAMONDES', 'activado' =>'1', 'reg_x' =>'1'],
['id'=>'56','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'MAURICIO LOPEZ','activado' => '1', 'reg_x' =>'12'],
['id'=>'57','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'MIGUEL MORALES', 'activado' =>'1','reg_x' => '4'],
['id'=>'58','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'MIGUEL VERGARA ESCUDERO','activado' => '1', 'reg_x' =>'7'],
['id'=>'59','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'H.G.B MARIA GONZALEZ', 'activado' =>'1', 'reg_x' =>'15'],
['id'=>'60','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'MOISES ESPINOZA', 'activado' =>'1', 'reg_x' =>'2'],
['id'=>'61','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'RAUL SANDOVAL', 'activado' =>'1', 'reg_x' =>'10'],
['id'=>'62','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'REINALDO PATIÑO','activado' => '1','reg_x' => '14'],
['id'=>'63','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ROBERTO HERRERA','activado' =>'1', 'reg_x' =>'10'],
['id'=>'64','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'RODRIGO URTUBIA','activado' => '1','reg_x' => '9'],
['id'=>'65','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'SERV TECNICO JUAN MARTINEZ', 'activado' =>'1', 'reg_x' =>'5'],
['id'=>'66','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'SERVITEC VIÑA MIGUEL ALARCON', 'activado' =>'1', 'reg_x' =>'5'],
['id'=>'67','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'SOCIEDAD COMERCIAL CATOCASA LTDA.', 'activado' =>'1', 'reg_x' =>'9'],
['id'=>'68','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'SOCIEDAD COMERCIAL JM LIMITADA', 'activado' =>'1',  'reg_x' =>'8'],
['id'=>'69','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'VICTOR GARRIDO', 'activado' =>'1', 'reg_x' =>'6'],
['id'=>'70','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'VICTOR PARRA HORMAZABAL', 'activado' =>'1', 'reg_x' =>'9'],
['id'=>'71','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'S.G.I HUGO PAVEZ', 'activado' =>'1', 'reg_x' =>'1'],
['id'=>'72','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ADOLFO GARCIA FUENTES', 'activado' =>'1', 'reg_x' =>'2'],
['id'=>'73','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'VICTOR CATALDO', 'activado' =>'1', 'reg_x' =>'2'],
['id'=>'74','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ROBERT BOSCH', 'activado' =>'1', 'reg_x' =>'5'],
['id'=>'75','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'JOSE FLORES TORRES', 'activado' =>'1','reg_x' => '5'],
['id'=>'76','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'LUIS TOLEDO', 'activado' =>'1', 'reg_x' =>'5'],
['id'=>'77','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'GUILLERMO CASTILLO', 'activado' =>'1', 'reg_x' =>'8'],
['id'=>'78','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'RODRIGO URTUBIA', 'activado' =>'1','reg_x' => '9'],
['id'=>'79','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'JORGE JIMENEZ CORONADO', 'activado' =>'1', 'reg_x' =>'10'],
['id'=>'80','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'JOSE DELIS PEÑA', 'activado' =>'1', 'reg_x' =>'10'],
['id'=>'81','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'CARLOS GALLARDO', 'activado' =>'1', 'reg_x' =>'13'],
['id'=>'82','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'ROBERTO SOTO', 'activado' =>'1', 'reg_x' =>'13'],
['id'=>'83','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'RICARDO RAMOS (SOLAR)', 'activado' =>'1', 'reg_x' =>'13'],
['id'=>'84','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'JUAN CASTRO AGUILA','activado' => '1','reg_x' =>'9'],
['id'=>'85','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'SEBASTIAN BEN - AZUL','activado' => '1', 'reg_x' =>'5'],
['id'=>'86','tipo_atencion_id' =>TipoAtencion::find(3)->id,'distribuidor' => 'HEVICA SERVICIOS', 'activado' =>'1', 'reg_x' =>'6'],
['id'=>'87','tipo_atencion_id' =>TipoAtencion::find(11)->id,'distribuidor' => 'N/A', 'activado' =>'1', 'reg_x' =>'99']





			
        ]);
    }
}
