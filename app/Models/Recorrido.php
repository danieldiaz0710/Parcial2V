<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recorrido extends Model
{
    protected $table = 'recorridos';

  protected $fillable = [

    'otrosequipos'];

  protected $hidden = ['created_at','updated_at'];

  public function equipos(){
    return $this->morphToMany('App\Models\Equipo', 'jugador');
  }
}
