<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura_detalle extends Model
{
    protected $primaryKey = "id_cat_item";

    protected $table = "cat_item";

    //sin campos d eauditoria

    public $timestamps = false;
}
