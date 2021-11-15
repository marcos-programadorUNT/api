<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['idCliente','dniCliente','nombreCliente','emailCliente','celularCliente','direccionCasaCliente','contraseñaCliente'];
    public $timestamps=false;
    protected $primaryKey = "idCliente";
    protected $table="cliente";
}
