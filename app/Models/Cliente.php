<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     protected $primaryKey = "id_cliente";

    protected $table = "tm_cliente";

   public $timestamps = false;
}
