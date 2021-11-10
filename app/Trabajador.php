<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $fillable = ['idTrabajador','dniTrabajador','nombreTrabajador','contraseñaTrabajador'];
    public $timestamps=false;
    protected $primaryKey = "idTrabajador";
    protected $table="trabajador";
}
