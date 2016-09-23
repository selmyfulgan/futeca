<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forma_pago extends Model
{
     protected $primaryKey = "id_forma_pago";

    protected $table = "tm_forma_pago";

   public $timestamps = false;
}
