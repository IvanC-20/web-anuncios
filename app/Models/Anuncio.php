<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $table = 'anuncios';

    //Relación one to many/ uno a muchos
    public function imagenes(){
        return $this->hasMany('App/Imagen');
    }
    //use HasFactory;

    //Relacion one to one / uno a uno
    public function categoria(){
        return $this->hasOne('App/Categoria');
    }

    //Relacion many to one / muchos a uno
    public function user(){
        return $this->belongsTo('App/User', 'usuario_id');
    }

}
