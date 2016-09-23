<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
  protected $primaryKey = "id_cancha";

    protected $table = "tm_cancha";

    //sin campos d eauditoria

    public $timestamps = false;
}
