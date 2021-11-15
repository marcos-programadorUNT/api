<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'dniCliente' => '10000000',
            'nombreCliente' => 'Gustavo Piminchumo',
            'direccionCasaCliente' => 'Huanchaquito',
            'contraseñaCliente' => 'crackenbd',
            'emailCliente' => 'gustavopimol.98@gmail.com',
            'celularCliente' => '985920534'
        ]
        );
        Cliente::create([
            'dniCliente' => '12345678',
            'nombreCliente' => 'Juan Obando',
            'direccionCasaCliente' => 'Trujillo',
            'contraseñaCliente' => 'jobando',
            'emailCliente' => 'jobando@unitru.edu.pe',
            'celularCliente' => '985920535'
        ]
        );
        Cliente::create([
            'dniCliente' => '87654321',
            'nombreCliente' => 'Jerson Jesus Saavedra Neira',
            'direccionCasaCliente' => 'Trujillo',
            'contraseñaCliente' => 'predicador',
            'emailCliente' => 'jsaavedran@unitru.edu.pe',
            'celularCliente' => '913005047'
        ]
        );
    }
}
