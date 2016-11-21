<?php

use Illuminate\Database\Seeder;

class ServicioRealizadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicio_realizado')->insert([

		['id' =>1	,'nombre' => 'Otro','activado' =>	0],
		['id' =>2	,'nombre' => 'Sin Tiempo','activado' =>	0],
		['id' =>3	,'nombre' => 'No Detecta Falla','activado' =>	0],
		['id' =>4	,'nombre' => 'Ppto. Aprob.Trabajo Pend.','activado' =>	0],
		['id' =>9	,'nombre' => 'Sin Repuesto','activado' =>	0],
		['id' =>10	,'nombre' => 'ASISTENCIA TECNICA','activado' =>	1],
		['id' =>11	,'nombre' => 'ATENCION COMERCIAL','activado' =>	1],
		['id' =>42	,'nombre' => 'CAMBIO FECHA','activado' =>1],
		['id' =>43	,'nombre' => 'GTIA METROGAS','activado' =>0],
		['id' =>44	,'nombre' => 'GTIA SODIMAC','activado' =>0],
		['id' =>45	,'nombre' => 'GTIA EASY','activado' =>	0],
		['id' =>46	,'nombre' => 'GTIA CONSTRUCTORA','activado' =>0],
		['id' =>12	,'nombre' => 'CONVERSION','activado' =>	1],
		['id' =>13	,'nombre' => 'ERROR DE AGENDAMIENTO','activado' =>	1],
		['id' =>14	,'nombre' => 'FUERA DE NORMA','activado' =>	1],
		['id' =>15	,'nombre' => 'GTIA TALLER','activado' =>1],
		['id' =>16	,'nombre' => 'GTIA TECNICA','activado' =>1],
		['id' =>17	,'nombre' => 'GTIA Y MANTENCION','activado' =>	1],
		['id' =>18	,'nombre' => 'GARANTIA Y PRESUPUESTO','activado' =>	1],
		['id' =>19	,'nombre' => 'INSTALACION','activado' =>1],
		['id' =>20	,'nombre' => 'MANTENCION','activado' =>	1],
		['id' =>21	,'nombre' => 'MANTENCION Y PRESUPUESTO','activado' =>0],
		['id' =>22	,'nombre' => 'NO PRESENTA FALLA','activado' =>	1],
		['id' =>23	,'nombre' => 'NORMALIZACION','activado' =>	1],
		['id' =>24	,'nombre' => 'NULO CLIENTE','activado' =>	1],
		['id' =>25	,'nombre' => 'NULO JUNKERS','activado' =>	1],
		['id' =>26	,'nombre' => 'ANULA SAT	1','activado' =>1],
		['id' =>27	,'nombre' => 'PPTO CONVERSION','activado' =>1],
		['id' =>28	,'nombre' => 'PPTO INSTALACION','activado' =>1],
		['id' =>29	,'nombre' => 'PPTO MANTENCION','activado' =>1],
		['id' =>30	,'nombre' => 'PPTO NORMALIZACION','activado' =>	1],
		['id' =>31	,'nombre' => 'PPTO REPARACION','activado' =>1],
		['id' =>32	,'nombre' => 'PUESTA EN MARCHA','activado' =>1],
		['id' =>33	,'nombre' => 'REPARACION','activado' =>	1],
		['id' =>34	,'nombre' => 'MANT. Y PRESUP','activado' =>	1],
		['id' =>35	,'nombre' => 'REP-MANT','activado' =>	1],
		['id' =>36	,'nombre' => 'RETIRO PARA PRESUPUESTO','activado' =>1],
		['id' =>37	,'nombre' => 'SIN CONTACTO','activado' =>1],
		['id' =>38	,'nombre' => 'SIN MORADORES','activado' =>1],
		['id' =>39	,'nombre' => 'SIN REPUESTO','activado' =>1],
		['id' =>40	,'nombre' => 'VISITA COBRO PENDIENTE','activado' =>	1],
		['id' =>41	,'nombre' => 'ATENCION PENDIENTE','activado' =>	0],
		['id' =>47	,'nombre' => 'PROBLEMA EXTERNO','activado' =>1],
		['id' =>48	,'nombre' => 'RESPUESTO OK','activado' =>1],
		['id' =>49	,'nombre' => 'VISITA DE CORTESIA','activado' =>	1],
		['id' =>50	,'nombre' => 'INSTALACIÓN + PROVISIÓN','activado' =>1]

        ]);
    }



}
