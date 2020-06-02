<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

  protected $fillable = [
    'nomequipo',
    'nmtrofeos',
    'nmjugadores',
    'posicion',
    'liga_id'];

  protected $hidden = ['created_at','updated_at'];

  public function liga(){
    return $this->belongsTo('App\Models\Liga', 'liga_id');
  }

  public function direts(){
    return $this->hasMany('App\Models\Diret');
  }

  public function recorridos(){
    return $this->morphedByMany('App\Models\Recorrido', 'jugador');
  }

  public function otros(){
    return $this->morphedByMany('App\Models\Otro', 'jugador');
  }
}
