<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    protected $table = 'ligas';

  protected $fillable = [
    'nomliga',
    'cuidadliga',
    'Npartidos'];

  protected $hidden = ['created_at','updated_at'];

  public function fundador(){
    return $this->hasOne('App\Models\Fundador');
  }

  public function equipos(){
    return $this->hasMany('App\Models\Equipo');
  }
}
