<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    //llave primaria
    protected $primaryKey = "id_factura";
    //tabla
    protected $table = "factura";
    //sin campos d eauditoria
    public $timestamps = false;
}
