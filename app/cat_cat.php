<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_cat extends Model
{
    protected $primaryKey = "id_cat";

    protected $table = "cat_cat";

    //sin campos d eauditoria

    public $timestamps = false;

    public function opciones(){
        return $this->hasMany('\App\cat_item',"id_cat","id_cat");
    }
}
