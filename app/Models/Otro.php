<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otro extends Model
{
    protected $table = 'otros';

  protected $fillable = [

    'TarjetasAm',
'TarjetasRJ',
'Personalapollo',
'Medeico'];

  protected $hidden = ['created_at','updated_at'];

  public function equipos(){
    return $this->morphToMany('App\Models\Equipo', 'jugador');
  }
}
