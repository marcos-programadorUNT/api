<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = ['montoPrestamo','dniCliente','estadoPrestamo','idTrabajador'];
    public $timestamps=false;
    protected $primaryKey = "dniCliente";
    protected $table="prestamo";
}
