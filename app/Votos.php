<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{
  protected $primaryKey = 'idVoto';
  protected $table = 'votos';
  protected $fillable = ['users_id','projeto_idProjeto'];
  
    public function projetos(){
    	return $this->belongsTo('App\Projetos');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
