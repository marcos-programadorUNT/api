<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('idCliente');
            $table->string('nombreCliente',1000);
            $table->string('dniCliente',8)->unique();
            $table->string('emailCliente')->unique();
            $table->string('direccionCasaCliente',1000);
            $table->string('contraseñaCliente',1000);
            $table->string('celularCliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
