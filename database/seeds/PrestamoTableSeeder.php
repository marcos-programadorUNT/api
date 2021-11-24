<?php

use Illuminate\Database\Seeder;
use App\Prestamo;

class PrestamoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestamo::create([
            'dniCliente' => '71238739',
            'montoPrestamo' => '1000',
            'cuotasPrestamo' => '10',
            'estadoPrestamo' => 'pendiente'
        ]
       );
    }
}
