<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $primaryKey = "id_categoria";

    protected $table = "tm_categoria";

    //sin campos d eauditoria

    public $timestamps = false;
}

