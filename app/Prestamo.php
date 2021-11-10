<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = ['montoPrestamo','fechaPrestamo','estadoPrestamo','idCliente','idTrabajador'];
    public $timestamps=false;
    protected $primaryKey = "idPrestamo";
    protected $table="prestamo";
}
