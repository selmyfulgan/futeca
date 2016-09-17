<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_item extends Model
{
    protected $primaryKey = "id_item";

    protected $table = "cat_item";

    //sin campos de auditoria
    public $timestamps = false;

    public $fillable = ['descripcion','id_cat'];

    public function catalogo(){
        return $this->belongsTo('\App\cat_cat', 'id_cat', 'id_cat');
    }

    //public function arreglo_opciones par que se pser uisaso en los form:select()
    public function arreglo_opciones($id_catalogo=0){
            return $this->where('id_cat',$catalogo)
                        ->orderBy('descripcion')
                        ->lists('descripcion','id_item');

    }
}
