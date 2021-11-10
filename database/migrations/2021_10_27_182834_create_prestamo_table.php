<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {
            $table->bigIncrements('idPrestamo');
            $table->decimal('montoPrestamo', 8, 2);
            $table->date('fechaPrestamo')->format('d/m/Y');
            $table->string('estadoPrestamo',1000);

            $table->foreignId('idCliente')->constrained('cliente')->references('idCliente')->onDelete('cascade');
            $table->bigInteger('idTrabajador')->nullable()->unsigned();
            $table->foreign('idTrabajador')->references('idTrabajador')->on('trabajador')->onDelete('cascade');

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
        Schema::dropIfExists('prestamo');
    }
}
