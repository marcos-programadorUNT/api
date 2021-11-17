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
            $table->string('dniCliente',8)->primary();
            $table->decimal('montoPrestamo', 8, 2);
            $table->bigInteger('cuotasPrestamo');
            $table->string('estadoPrestamo',1000);

            $table->foreign('dniCliente')->constrained('cliente')->references('dniCliente')->on('cliente')->onDelete('cascade');
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
