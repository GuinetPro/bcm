<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
       //$this->call(EstadoTableSeeder::class);  
       //$this->call(RoleTableSeeder::class);
       //$this->call(TipoGasTableSeeder::class);
       //$this->call(RegionesTableSeeder::class);
       //$this->call(ComunasTableSeeder::class);
       //$this->call(NominaTiendaTableSeeder::class);
       //$this->call(ServicioRealizadoSeeder::class);
       //$this->call(TipoPagoTableSeeder::class);
       //$this->call(TallerDistribuidorTableSeeder::class);
       //$this->call(SolicitanteTableSeeder::class);
       $this->call(TrabajoRealizarTableSeeder::class);
       $this->call(TipoPresupuestoTableSeeder::class);
       $this->call(CategoriaTableSeeder::class);
       $this->call(MarcaTableSeeder::class);
       $this->call(TipoProductoTableSeeder::class);
       $this->call(ModeloTableSeeder::class);
       $this->call(LitrajeableSeeder::class);
       $this->call(ModeloTableSeeder::class);
       $this->call(TiroTableSeeder::class);
//
         //
    }
}
