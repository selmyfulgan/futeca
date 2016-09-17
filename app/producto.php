<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $primaryKey = "id_producto";

    protected $table = "tm_productos";

    //sin campos d eauditoria

    public $timestamps = false;

    public function clasificacion(){
        return $this->belongsTo('\App\cat_item','id_familia','id_item');
    }
    public function setIdFamiliaAttribute($var){
        if($var = 0){
            $this->attributes['id_familia']= null;
        }else{
            $this->attributes['id_familia']=$var;
        }
    }
//filtrar por familia
    public function scopeParaMujer($query){
        return $query->where('id_famalia',3);
    }

    // para ordenar siempre igual
    public function scopeOrder ($query){
        return $query->orderBy('descripcion','like','%$nombre%');
    }

    public function scopePorFamilia ($query,$id_familia){
        if ($id_familia>0){
            return $query->where('id_familia',$id_familia);
        }
    }

    public function getNombreFamiliaAttribute(){
        return $this->clasificacion->descripcion;
    }

    public function scopePorNombre($query, $nombre)
    {
    if(strlen($nombre)>0){
        return $query->where('descripcion','like',"%$nombre%");
        }
    }

    public function buscarYpaginar($opciones){
        if(!isset($opciones->id_familia)){
            $opciones->id_familia = 0;
        }
        if(!isset($opciones->descripcion)){
            $opciones->descripcion= "";
        }
        return $this->porFamilia($opciones->id_familia)
                    ->porNombre($opciones->decripcion)
                    ->ordenar()
                    ->paginate();
    }
}
