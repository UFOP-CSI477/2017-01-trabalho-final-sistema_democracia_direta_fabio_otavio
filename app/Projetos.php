<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{

    protected $primaryKey = 'idProjeto';
    protected $fillable = ['titulo', 'subtitulo','descriçao','status','metaVotos'];


//    public function entradas() {
//      return $this->hasMany('App\Entrada');
//    }

}
