<?php

use Illuminate\Database\Seeder;
use App\Trabajador;

class TrabajadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*   DB::statement("INSERT INTO `trabajador` (`idTrabajador`,`dniTrabajador`,`nombreTrabajador`,`contraseñaTrabajador`) VALUES
        (1, '20000000 ', 'Arturo Villanueva', 'bajito');"); */

        Trabajador::create(['idTrabajador' => '1','dniTrabajador' => '20000000','nombreTrabajador' => 'Arturo Villanueva','contraseñaTrabajador' => 'bajito']);
    }
}
