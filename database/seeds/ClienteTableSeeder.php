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
            'idCliente' => '1',
            'dniCliente' => '10000000',
            'nombreCliente' => 'Gustavo Piminchumo',
            'direccionCasaCliente' => 'Huanchaquito',
            'contraseñaCliente' => 'crackenbd',
            'emailCliente' => 'gustavopimol.98@gmail.com',
            'celularCliente' => '985920534'
        
        ],
    
        );


        Cliente::create(
        [
            'idCliente' => '2',
            'dniCliente' => '12345678',
            'nombreCliente' => 'Juan Obando',
            'direccionCasaCliente' => 'Trujillo',
            'contraseñaCliente' => 'jobando',
            'emailCliente' => 'jobando@unitru.edu.pe',
            'celularCliente' => '985920535'
        
        ],
    
        );
    }
}
