<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
   protected $primaryKey = "id_jugador";

    protected $table = "tm_jugador";

    //sin campos d eauditoria

    public $timestamps = false;
}
