<?php

use Illuminate\Database\Seeder;

class ComunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('comunas')->insert([

			['region_id' => 1, 'nombre'    =>'IQUIQUE'],
			['region_id' => 1, 'nombre'    =>'ALTO HOSPICIO'],
			['region_id' => 1, 'nombre'    =>'POZO ALMONTE'],
			['region_id' => 1, 'nombre'    =>'CAMIÑA'],
			['region_id' => 1, 'nombre'    =>'COLCHANE'],
			['region_id' => 1, 'nombre'    =>'HUARA'],
			['region_id' => 1, 'nombre'    =>'PICA'],
			['region_id' => 2, 'nombre'    =>'ANTOFAGASTA'],
			['region_id' => 2, 'nombre'    =>'MEJILLONES'],
			['region_id' => 2, 'nombre'    =>'SIERRA GORDA'],
			['region_id' => 2, 'nombre'    =>'TALTAL'],
			['region_id' => 2, 'nombre'    =>'CALAMA'],
			['region_id' => 2, 'nombre'    =>'OLLAGUE'],
			['region_id' => 2, 'nombre'    =>'SAN PEDRO DE ATACAMA'],
			['region_id' => 2, 'nombre'    =>'TOCOPILLA'],
			['region_id' => 2, 'nombre'    =>'MARIA ELENA'],
			['region_id' => 3, 'nombre'    =>'CHAÑARAL'],
			['region_id' => 3, 'nombre'    =>'DIEGO DE ALMAGRO'],
			['region_id' => 3, 'nombre'    =>'COPIAPO'],
			['region_id' => 3, 'nombre'    =>'CALDERA'],
			['region_id' => 3, 'nombre'    =>'TIERRA AMARILLA'],
			['region_id' => 3, 'nombre'    =>'VALLENAR'],
			['region_id' => 3, 'nombre'    =>'ALTO DEL CARMEN'],
			['region_id' => 3, 'nombre'    =>'FREIRINA'],
			['region_id' => 3, 'nombre'    =>'HUASCO'],
			['region_id' => 4, 'nombre'    =>'LOS VILOS'],
			['region_id' => 4, 'nombre'    =>'SALAMANCA'],
			['region_id' => 4, 'nombre'    =>'ILLAPEL'],
			['region_id' => 4, 'nombre'    =>'HUENTELAUQUEN'],
			['region_id' => 4, 'nombre'    =>'PICHIDANGUI'],
			['region_id' => 4, 'nombre'    =>'QUILIMARI'],
			['region_id' => 4, 'nombre'    =>'LOS MOLLES'],
			['region_id' => 4, 'nombre'    =>'CATAPILCO'],
			['region_id' => 4, 'nombre'    =>'CAIMANES '],
			['region_id' => 4, 'nombre'    =>'GUANGUALI'],
			['region_id' => 4, 'nombre'    =>'LA BALLENA'],
			['region_id' => 4, 'nombre'    =>'PICHICUI'],
			['region_id' => 4, 'nombre'    =>'CANELA'],
			['region_id' => 4, 'nombre'    =>'LA SERENA'],
			['region_id' => 4, 'nombre'    =>'COQUIMBO'],
			['region_id' => 4, 'nombre'    =>'ANDACOLLO'],
			['region_id' => 4, 'nombre'    =>'LA HIGUERA'],
			['region_id' => 4, 'nombre'    =>'PAIGUANO'],
			['region_id' => 4, 'nombre'    =>'VICUÑA'],
			['region_id' => 4, 'nombre'    =>'OVALLE'],
			['region_id' => 4, 'nombre'    =>'COMBARBALA'],
			['region_id' => 4, 'nombre'    =>'MONTE PATRIA'],
			['region_id' => 4, 'nombre'    =>'PUNITAQUI'],
			['region_id' => 4, 'nombre'    =>'RIO HURTADO'],
			['region_id' => 5, 'nombre'    =>'ISLA DE PASCUA'],
			['region_id' => 5, 'nombre'    =>'LOS ANDES'],
			['region_id' => 5, 'nombre'    =>'CALLE LARGA'],
			['region_id' => 5, 'nombre'    =>'RINCONADA'],
			['region_id' => 5, 'nombre'    =>'SAN ESTEBAN'],
			['region_id' => 5, 'nombre'    =>'LA LIGUA'],
			['region_id' => 5, 'nombre'    =>'CABILDO'],
			['region_id' => 5, 'nombre'    =>'PAPUDO'],
			['region_id' => 5, 'nombre'    =>'PETORCA'],
			['region_id' => 5, 'nombre'    =>'ZAPALLAR'],
			['region_id' => 5, 'nombre'    =>'CACHAGUA'],
			['region_id' => 5, 'nombre'    =>'MAITENCILLO'],
			['region_id' => 5, 'nombre'    =>'MARBELLA'],
			['region_id' => 5, 'nombre'    =>'QUILLOTA'],
			['region_id' => 5, 'nombre'    =>'CALERA'],
			['region_id' => 5, 'nombre'    =>'HIJUELAS'],
			['region_id' => 5, 'nombre'    =>'LA CRUZ'],
			['region_id' => 5, 'nombre'    =>'LIMACHE'],
			['region_id' => 5, 'nombre'    =>'NOGALES'],
			['region_id' => 5, 'nombre'    =>'OLMUE'],
			['region_id' => 5, 'nombre'    =>'SAN ANTONIO'],
			['region_id' => 5, 'nombre'    =>'ALGARROBO'],
			['region_id' => 5, 'nombre'    =>'CARTAGENA'],
			['region_id' => 5, 'nombre'    =>'LAS BRISAS-STA MARIA'],
			['region_id' => 5, 'nombre'    =>'SAN SEBASTIÀN'],
			['region_id' => 5, 'nombre'    =>'LAS CRUCES'],
			['region_id' => 5, 'nombre'    =>'ISLA NEGRA'],
			['region_id' => 5, 'nombre'    =>'LLO-LLEO'],
			['region_id' => 5, 'nombre'    =>'MIRASOL'],
			['region_id' => 5, 'nombre'    =>'TUNQUÈN'],
			['region_id' => 5, 'nombre'    =>'EL QUISCO'],
			['region_id' => 5, 'nombre'    =>'EL TABO'],
			['region_id' => 5, 'nombre'    =>'SANTO DOMINGO'],
			['region_id' => 5, 'nombre'    =>'SAN FELIPE'],
			['region_id' => 5, 'nombre'    =>'CATEMU'],
			['region_id' => 5, 'nombre'    =>'LLAILLAY'],
			['region_id' => 5, 'nombre'    =>'PANQUEHUE'],
			['region_id' => 5, 'nombre'    =>'PUTAENDO'],
			['region_id' => 5, 'nombre'    =>'SANTA MARIA'],
			['region_id' => 5, 'nombre'    =>'VALPARAISO'],
			['region_id' => 5, 'nombre'    =>'CASABLANCA'],
			['region_id' => 5, 'nombre'    =>'CONCON'],
			['region_id' => 5, 'nombre'    =>'JUAN FERNANDEZ'],
			['region_id' => 5, 'nombre'    =>'PUCHUNCAVI'],
			['region_id' => 5, 'nombre'    =>'QUILPUE'],
			['region_id' => 5, 'nombre'    =>'QUINTERO'],
			['region_id' => 5, 'nombre'    =>'VILLA ALEMANA'],
			['region_id' => 5, 'nombre'    =>'VIÑA DEL MAR'],
			['region_id' => 5, 'nombre'    =>'REÑACA'],
			['region_id' => 5, 'nombre'    =>'BELLOTO'],
			['region_id' => 5, 'nombre'    =>'CURAUMA'],
			['region_id' => 5, 'nombre'    =>'LLIU LLIU'],
			['region_id' => 5, 'nombre'    =>'MANTAGUA'],
			['region_id' => 5, 'nombre'    =>'LAGUNA VERDE'],
			['region_id' => 5, 'nombre'    =>'VENTANAS'],
			['region_id' => 5, 'nombre'    =>'HORCON'],
			['region_id' => 6, 'nombre'    =>'SAN VICENTE'],
			['region_id' => 6, 'nombre'    =>'RANCAGUA'],
			['region_id' => 6, 'nombre'    =>'CODEGUA'],
			['region_id' => 6, 'nombre'    =>'COINCO'],
			['region_id' => 6, 'nombre'    =>'COLTAUCO'],
			['region_id' => 6, 'nombre'    =>'DOÑIHUE'],
			['region_id' => 6, 'nombre'    =>'GRANEROS'],
			['region_id' => 6, 'nombre'    =>'LAS CABRAS'],
			['region_id' => 6, 'nombre'    =>'MACHALI'],
			['region_id' => 6, 'nombre'    =>'MALLOA'],
			['region_id' => 6, 'nombre'    =>'MOSTAZAL'],
			['region_id' => 6, 'nombre'    =>'OLIVAR'],
			['region_id' => 6, 'nombre'    =>'PEUMO'],
			['region_id' => 6, 'nombre'    =>'PICHIDEGUA'],
			['region_id' => 6, 'nombre'    =>'QUINTA DE TILCOCO'],
			['region_id' => 6, 'nombre'    =>'RENGO'],
			['region_id' => 6, 'nombre'    =>'REQUINOA'],
			['region_id' => 6, 'nombre'    =>'PICHILEMU'],
			['region_id' => 6, 'nombre'    =>'LA ESTRELLA'],
			['region_id' => 6, 'nombre'    =>'LITUECHE'],
			['region_id' => 6, 'nombre'    =>'MARCHIHUE'],
			['region_id' => 6, 'nombre'    =>'NAVIDAD'],
			['region_id' => 6, 'nombre'    =>'PAREDONES'],
			['region_id' => 6, 'nombre'    =>'SAN FERNANDO'],
			['region_id' => 6, 'nombre'    =>'PELEQUEN'],
			['region_id' => 6, 'nombre'    =>'ROSARIO'],
			['region_id' => 6, 'nombre'    =>'QTA.DE TILCOCO'],
			['region_id' => 6, 'nombre'    =>'ROMA'],
			['region_id' => 6, 'nombre'    =>'TALCAREHUE'],
			['region_id' => 6, 'nombre'    =>'PTE.NEGRO'],
			['region_id' => 6, 'nombre'    =>'TINGUIRIRICA'],
			['region_id' => 6, 'nombre'    =>'CHEPICA'],
			['region_id' => 6, 'nombre'    =>'CHIMBARONGO'],
			['region_id' => 6, 'nombre'    =>'LOLOL'],
			['region_id' => 6, 'nombre'    =>'NANCAGUA'],
			['region_id' => 6, 'nombre'    =>'PALMILLA'],
			['region_id' => 6, 'nombre'    =>'PERALILLO'],
			['region_id' => 6, 'nombre'    =>'PLACILLA'],
			['region_id' => 6, 'nombre'    =>'PUMANQUE'],
			['region_id' => 6, 'nombre'    =>'SANTA CRUZ'],
			['region_id' => 7, 'nombre'    =>'CAUQUENES'],
			['region_id' => 7, 'nombre'    =>'CHANCO'],
			['region_id' => 7, 'nombre'    =>'PELLUHUE'],
			['region_id' => 7, 'nombre'    =>'CURICO'],
			['region_id' => 7, 'nombre'    =>'HUALAÑE'],
			['region_id' => 7, 'nombre'    =>'LICANTEN'],
			['region_id' => 7, 'nombre'    =>'MOLINA'],
			['region_id' => 7, 'nombre'    =>'RAUCO'],
			['region_id' => 7, 'nombre'    =>'ROMERAL'],
			['region_id' => 7, 'nombre'    =>'SAGRADA FAMILIA'],
			['region_id' => 7, 'nombre'    =>'TENO'],
			['region_id' => 7, 'nombre'    =>'VICHUQUEN'],
			['region_id' => 7, 'nombre'    =>'TENO LA MONTAÑA'],
			['region_id' => 7, 'nombre'    =>'MORZA'],
			['region_id' => 7, 'nombre'    =>'HUEMUL DE MORZA'],
			['region_id' => 7, 'nombre'    =>'LOS GUAICOS '],
			['region_id' => 7, 'nombre'    =>'LOS NICHES'],
			['region_id' => 7, 'nombre'    =>'POTRERO GRANDE'],
			['region_id' => 7, 'nombre'    =>'LONTUE'],
			['region_id' => 7, 'nombre'    =>'PARQUE INGLES'],
			['region_id' => 7, 'nombre'    =>'CUMPEO'],
			['region_id' => 7, 'nombre'    =>'SANGRADA FAMILIA'],
			['region_id' => 7, 'nombre'    =>'VILLA PRAT'],
			['region_id' => 7, 'nombre'    =>'PUENTE PAULA'],
			['region_id' => 7, 'nombre'    =>'LA HUERTA '],
			['region_id' => 7, 'nombre'    =>'ILOCA'],
			['region_id' => 7, 'nombre'    =>'EL DUAO'],
			['region_id' => 7, 'nombre'    =>'LINARES'],
			['region_id' => 7, 'nombre'    =>'COLBUN'],
			['region_id' => 7, 'nombre'    =>'LONGAVI'],
			['region_id' => 7, 'nombre'    =>'PARRAL'],
			['region_id' => 7, 'nombre'    =>'RETIRO'],
			['region_id' => 7, 'nombre'    =>'SAN JAVIER'],
			['region_id' => 7, 'nombre'    =>'VILLA ALEGRE'],
			['region_id' => 7, 'nombre'    =>'YERBAS BUENAS'],
			['region_id' => 7, 'nombre'    =>'TALCA'],
			['region_id' => 7, 'nombre'    =>'CONSTITUCION'],
			['region_id' => 7, 'nombre'    =>'CUREPTO'],
			['region_id' => 7, 'nombre'    =>'EMPEDRADO'],
			['region_id' => 7, 'nombre'    =>'MAULE'],
			['region_id' => 7, 'nombre'    =>'PELARCO'],
			['region_id' => 7, 'nombre'    =>'PENCAHUE'],
			['region_id' => 7, 'nombre'    =>'RIO CLARO'],
			['region_id' => 7, 'nombre'    =>'SAN CLEMENTE'],
			['region_id' => 7, 'nombre'    =>'SAN RAFAEL'],
			['region_id' => 8, 'nombre'    =>'LEBU'],
			['region_id' => 8, 'nombre'    =>'ARAUCO'],
			['region_id' => 8, 'nombre'    =>'CONTULMO'],
			['region_id' => 8, 'nombre'    =>'CURANILAHUE'],
			['region_id' => 8, 'nombre'    =>'LOS ALAMOS'],
			['region_id' => 8, 'nombre'    =>'TIRUA'],
			['region_id' => 8, 'nombre'    =>'CAÑETE'],
			['region_id' => 8, 'nombre'    =>'LOS ANGELES'],
			['region_id' => 8, 'nombre'    =>'ANTUCO'],
			['region_id' => 8, 'nombre'    =>'CABRERO'],
			['region_id' => 8, 'nombre'    =>'LAJA'],
			['region_id' => 8, 'nombre'    =>'MULCHEN'],
			['region_id' => 8, 'nombre'    =>'NACIMIENTO'],
			['region_id' => 8, 'nombre'    =>'NEGRETE'],
			['region_id' => 8, 'nombre'    =>'QUILACO'],
			['region_id' => 8, 'nombre'    =>'QUILLECO'],
			['region_id' => 8, 'nombre'    =>'SAN ROSENDO'],
			['region_id' => 8, 'nombre'    =>'SANTA BARBARA'],
			['region_id' => 8, 'nombre'    =>'TUCAPEL'],
			['region_id' => 8, 'nombre'    =>'YUMBEL'],
			['region_id' => 8, 'nombre'    =>'ALTO BIOBIO'],
			['region_id' => 8, 'nombre'    =>'TALCAHUANO'],
			['region_id' => 8, 'nombre'    =>'TOME'],
			['region_id' => 8, 'nombre'    =>'HUALPEN'],
			['region_id' => 8, 'nombre'    =>'CONCEPCION'],
			['region_id' => 8, 'nombre'    =>'CORONEL'],
			['region_id' => 8, 'nombre'    =>'CHIGUAYANTE'],
			['region_id' => 8, 'nombre'    =>'FLORIDA'],
			['region_id' => 8, 'nombre'    =>'HUALQUI'],
			['region_id' => 8, 'nombre'    =>'LOTA'],
			['region_id' => 8, 'nombre'    =>'PENCO'],
			['region_id' => 8, 'nombre'    =>'SAN PEDRO DE LA PAZ'],
			['region_id' => 8, 'nombre'    =>'SANTA JUANA'],
			['region_id' => 8, 'nombre'    =>'CHILLAN'],
			['region_id' => 8, 'nombre'    =>'BULNES'],
			['region_id' => 8, 'nombre'    =>'COBQUECURA'],
			['region_id' => 8, 'nombre'    =>'COELEMU'],
			['region_id' => 8, 'nombre'    =>'COIHUECO'],
			['region_id' => 8, 'nombre'    =>'CHILLAN VIEJO'],
			['region_id' => 8, 'nombre'    =>'EL CARMEN'],
			['region_id' => 8, 'nombre'    =>'NINHUE'],
			['region_id' => 8, 'nombre'    =>'ÑIQUEN'],
			['region_id' => 8, 'nombre'    =>'PEMUCO'],
			['region_id' => 8, 'nombre'    =>'PINTO'],
			['region_id' => 8, 'nombre'    =>'PORTEZUELO'],
			['region_id' => 8, 'nombre'    =>'QUILLON'],
			['region_id' => 8, 'nombre'    =>'QUIRIHUE'],
			['region_id' => 8, 'nombre'    =>'RANQUIL'],
			['region_id' => 8, 'nombre'    =>'SAN CARLOS'],
			['region_id' => 8, 'nombre'    =>'SAN FABIAN'],
			['region_id' => 8, 'nombre'    =>'SAN IGNACIO'],
			['region_id' => 8, 'nombre'    =>'SAN NICOLAS'],
			['region_id' => 8, 'nombre'    =>'BULI'],
			['region_id' => 8, 'nombre'    =>'CACHAPOAL'],
			['region_id' => 8, 'nombre'    =>'CATO'],
			['region_id' => 8, 'nombre'    =>'CAMPANARIO'],
			['region_id' => 8, 'nombre'    =>'CHOLHUAN'],
			['region_id' => 8, 'nombre'    =>'CONFLUENCIA'],
			['region_id' => 8, 'nombre'    =>'EL SAUCE'],
			['region_id' => 8, 'nombre'    =>'HUAPE'],
			['region_id' => 8, 'nombre'    =>'HUEPIL'],
			['region_id' => 8, 'nombre'    =>'LAS TERMAS'],
			['region_id' => 8, 'nombre'    =>'LAS TRANCAS '],
			['region_id' => 8, 'nombre'    =>'NAHUELTORO'],
			['region_id' => 8, 'nombre'    =>'NEBUCO '],
			['region_id' => 8, 'nombre'    =>'NINQUIHUE'],
			['region_id' => 8, 'nombre'    =>'ÑIPAS(CAMINO QUINCHAM.)'],
			['region_id' => 8, 'nombre'    =>'ÑIPAS(POR AUTOP. ITATA)'],
			['region_id' => 8, 'nombre'    =>'PUEBLO SECO'],
			['region_id' => 8, 'nombre'    =>'QUINCHAMALI'],
			['region_id' => 8, 'nombre'    =>'QUIRIQUINA'],
			['region_id' => 8, 'nombre'    =>'RECINTO'],
			['region_id' => 8, 'nombre'    =>'RUCAPEQUEN'],
			['region_id' => 8, 'nombre'    =>'SANTA CLARA'],
			['region_id' => 8, 'nombre'    =>'TREGUACO'],
			['region_id' => 8, 'nombre'    =>'YUNGAY'],
			['region_id' => 9, 'nombre'    =>'PUCON'],
			['region_id' => 9, 'nombre'    =>'SAAVEDRA'],
			['region_id' => 9, 'nombre'    =>'TEODORO SCHMIDT'],
			['region_id' => 9, 'nombre'    =>'TOLTEN'],
			['region_id' => 9, 'nombre'    =>'VILCUN'],
			['region_id' => 9, 'nombre'    =>'VILLARRICA'],
			['region_id' => 9, 'nombre'    =>'CHOLCHOL'],
			['region_id' => 9, 'nombre'    =>'TEMUCO'],
			['region_id' => 9, 'nombre'    =>'CARAHUE'],
			['region_id' => 9, 'nombre'    =>'CUNCO'],
			['region_id' => 9, 'nombre'    =>'CURARREHUE'],
			['region_id' => 9, 'nombre'    =>'FREIRE'],
			['region_id' => 9, 'nombre'    =>'GALVARINO'],
			['region_id' => 9, 'nombre'    =>'GORBEA'],
			['region_id' => 9, 'nombre'    =>'LAUTARO'],
			['region_id' => 9, 'nombre'    =>'LONCOCHE'],
			['region_id' => 9, 'nombre'    =>'MELIPEUCO'],
			['region_id' => 9, 'nombre'    =>'NUEVA IMPERIAL'],
			['region_id' => 9, 'nombre'    =>'PADRE LAS CASAS'],
			['region_id' => 9, 'nombre'    =>'PERQUENCO'],
			['region_id' => 9, 'nombre'    =>'PITRUFQUEN'],
			['region_id' => 9, 'nombre'    =>'ANGOL'],
			['region_id' => 9, 'nombre'    =>'COLLIPULLI'],
			['region_id' => 9, 'nombre'    =>'CURACAUTIN'],
			['region_id' => 13,'nombre'    => 'ALHUE'],
			['region_id' => 9, 'nombre'    =>'ERCILLA'],
			['region_id' => 13,'nombre'    => 'BUIN'],
			['region_id' => 9, 'nombre'    =>'LONQUIMAY'],
			['region_id' => 13,'nombre'    => 'CALERA DE TANGO'],
			['region_id' => 9, 'nombre'    =>'LOS SAUCES'],
			['region_id' => 13,'nombre'    => 'CERRILLOS'],
			['region_id' => 9, 'nombre'    =>'LUMACO'],
			['region_id' => 13,'nombre'    => 'CERRO NAVIA'],
			['region_id' => 9, 'nombre'    =>'PUREN'],
			['region_id' => 13,'nombre'    => 'COLINA'],
			['region_id' => 9, 'nombre'    =>'RENAICO'],
			['region_id' => 13,'nombre'    => 'CONCHALI'],
			['region_id' => 9, 'nombre'    =>'TRAIGUEN'],
			['region_id' => 13,'nombre'    => 'CURACAVI'],
			['region_id' => 9, 'nombre'    =>'VICTORIA'],
			['region_id' => 13,'nombre'    => 'EL BOSQUE'],
			['region_id' => 10,'nombre'    => 'CASTRO'],
			['region_id' => 13,'nombre'    => 'EL MONTE'],
			['region_id' => 10,'nombre'    => 'DALCAHUE'],
			['region_id' => 13,'nombre'    => 'ESTACION CENTRAL'],
			['region_id' => 10,'nombre'    => 'PUQUELDON'],
			['region_id' => 13,'nombre'    => 'HUECHURABA'],
			['region_id' => 10,'nombre'    => 'QUEILEN'],
			['region_id' => 13,'nombre'    => 'INDEPENDENCIA'],
			['region_id' => 10,'nombre'    => 'QUELLON'],
			['region_id' => 13,'nombre'    => 'ISLA DE MAIPO'],
			['region_id' => 10,'nombre'    => 'QUEMCHI'],
			['region_id' => 13,'nombre'    => 'LA CISTERNA'],
			['region_id' => 10,'nombre'    => 'QUINCHAO'],
			['region_id' => 13,'nombre'    => 'LA FLORIDA'],
			['region_id' => 10,'nombre'    => 'ANCUD'],
			['region_id' => 13,'nombre'    => 'LA GRANJA'],
			['region_id' => 10,'nombre'    => 'CHONCHI'],
			['region_id' => 13,'nombre'    => 'LA PINTANA'],
			['region_id' => 10,'nombre'    => 'CURACO DE VELEZ'],
			['region_id' => 13,'nombre'    => 'LA REINA'],
			['region_id' => 10,'nombre'    => 'PUERTO MONTT'],
			['region_id' => 13,'nombre'    => 'LAMPA'],
			['region_id' => 10,'nombre'    => 'CALBUCO'],
			['region_id' => 13,'nombre'    => 'LAS CONDES'],
			['region_id' => 10,'nombre'    => 'COCHAMO'],
			['region_id' => 13,'nombre'    => 'LO BARNECHEA'],
			['region_id' => 10,'nombre'    => 'FRESIA'],
			['region_id' => 13,'nombre'    => 'LO ESPEJO'],
			['region_id' => 10,'nombre'    => 'FRUTILLAR'],
			['region_id' => 13,'nombre'    => 'LO PRADO'],
			['region_id' => 10,'nombre'    => 'LOS MUERMOS'],
			['region_id' => 13,'nombre'    => 'MACUL'],
			['region_id' => 10,'nombre'    => 'LLANQUIHUE'],
			['region_id' => 13,'nombre'    => 'MAIPU'],
			['region_id' => 10,'nombre'    => 'MAULLIN'],
			['region_id' => 13,'nombre'    => 'MARIA PINTO'],
			['region_id' => 10,'nombre'    => 'PUERTO VARAS'],
			['region_id' => 13,'nombre'    => 'MELIPILLA'],
			['region_id' => 10,'nombre'    => 'RIO NEGRO'],
			['region_id' => 13,'nombre'    => 'PAINE'],
			['region_id' => 10,'nombre'    => 'SAN JUAN DE LA COSTA'],
			['region_id' => 13,'nombre'    => 'PEDRO AGUIRRE CERDA'],
			['region_id' => 10,'nombre'    => 'SAN PABLO'],
			['region_id' => 13,'nombre'    => 'PEÑAFLOR'],
			['region_id' => 10,'nombre'    => 'OSORNO'],
			['region_id' => 13,'nombre'    => 'PEÑALOLEN'],
			['region_id' => 10,'nombre'    => 'PUERTO OCTAY'],
			['region_id' => 13,'nombre'    => 'PIRQUE'],
			['region_id' => 10,'nombre'    => 'PURRANQUE'],
			['region_id' => 13,'nombre'    => 'PROVIDENCIA'],
			['region_id' => 10,'nombre'    => 'PUYEHUE'],
			['region_id' => 13,'nombre'    => 'PUDAHUEL'],
			['region_id' => 10,'nombre'    => 'CHAITEN'],
			['region_id' => 13,'nombre'    => 'PUENTE ALTO'],
			['region_id' => 10,'nombre'    => 'FUTALEUFU'],
			['region_id' => 13,'nombre'    => 'QUILICURA'],
			['region_id' => 10,'nombre'    => 'HUALAIHUE'],
			['region_id' => 13,'nombre'    => 'QUINTA NORMAL'],
			['region_id' => 10,'nombre'    => 'PALENA'],
			['region_id' => 13,'nombre'    => 'RECOLETA'],
			['region_id' => 11,'nombre'    => 'AISEN'],
			['region_id' => 13,'nombre'    => 'RENCA'],
			['region_id' => 11,'nombre'    => 'CISNES'],
			['region_id' => 13,'nombre'    => 'SAN BERNARDO'],
			['region_id' => 11,'nombre'    => 'GUAITECAS'],
			['region_id' => 13,'nombre'    => 'SAN JOAQUIN'],
			['region_id' => 11,'nombre'    => 'COCHRANE'],
			['region_id' => 13,'nombre'    => 'SAN JOSE DE MAIPO'],
			['region_id' => 11,'nombre'    => 'O HIGGINS'],
			['region_id' => 13,'nombre'    => 'SAN MIGUEL'],
			['region_id' => 11,'nombre'    => 'TORTEL'],
			['region_id' => 13,'nombre'    => 'SAN PEDRO'],
			['region_id' => 11,'nombre'    => 'COIHAIQUE'],
			['region_id' => 13,'nombre'    => 'SAN RAMON'],
			['region_id' => 11,'nombre'    => 'LAGO VERDE'],
			['region_id' => 13,'nombre'    => 'SANTIAGO'],
			['region_id' => 11,'nombre'    => 'CHILE CHICO'],
			['region_id' => 13,'nombre'    => 'TALAGANTE'],
			['region_id' => 11,'nombre'    => 'RIO IBAÑEZ'],
			['region_id' => 13,'nombre'    => 'TILTIL'],
			['region_id' => 12,'nombre'    => 'CABO DE HORNOS (EX-NAVARINO)'],
			['region_id' => 13,'nombre'    => 'VITACURA'],
			['region_id' => 12,'nombre'    => 'ANTARTICA'],
			['region_id' => 13,'nombre'    => 'ÑUÑOA'],
			['region_id' => 12,'nombre'    => 'PUNTA ARENAS'],
			['region_id' => 12,'nombre'    => 'LAGUNA BLANCA'],
			['region_id' => 12,'nombre'    => 'RIO VERDE'],
			['region_id' => 12,'nombre'    => 'SAN GREGORIO'],
			['region_id' => 12,'nombre'    => 'PORVENIR'],
			['region_id' => 12,'nombre'    => 'PRIMAVERA'],
			['region_id' => 12,'nombre'    => 'TIMAUKEL'],
			['region_id' => 13,'nombre'    => 'PADRE HURTADO'],
			['region_id' => 12,'nombre'    => 'NATALES'],
			['region_id' => 12,'nombre'    => 'TORRES DEL PAINE'],
			['region_id' => 14,'nombre'    => 'VALDIVIA'],
			['region_id' => 14,'nombre'    => 'CORRAL'],
			['region_id' => 14,'nombre'    => 'LANCO'],
			['region_id' => 14,'nombre'    => 'LOS LAGOS'],
			['region_id' => 14,'nombre'    => 'MAFIL'],
			['region_id' => 14,'nombre'    => 'MARIQUINA'],
			['region_id' => 14,'nombre'    => 'PAILLACO'],
			['region_id' => 14,'nombre'    => 'PANGUIPULLI'],
			['region_id' => 14,'nombre'    => 'LA UNION'],
			['region_id' => 14,'nombre'    => 'FUTRONO'],
			['region_id' => 14,'nombre'    => 'LAGO RANCO'],
			['region_id' => 14,'nombre'    => 'RIO BUENO'],
			['region_id' => 15,'nombre'    => 'ARICA'],
			['region_id' => 15,'nombre'    => 'CAMARONES'],
			['region_id' => 15,'nombre'    => 'PUTRE'],
			['region_id' => 15,'nombre'    => 'GENERAL LAGOS'],
			['region_id' => 13,'nombre'    => 'INEXISTENTE'],
			['region_id' => 0, 'nombre'    =>'Sin comuna']

		]);	

    }
}