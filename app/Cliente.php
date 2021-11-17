<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['dniCliente','nombreCliente','emailCliente','celularCliente'];
    public $timestamps=false;
    protected $primaryKey = "dniCliente";
    protected $table="cliente";
}
