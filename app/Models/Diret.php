<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diret extends Model
{
    protected $table = 'direts';

    protected $fillable = [
      'nombre',
      'apellido',
      'edad',
      'sexo',
      'historia_clinica',
      'telefono',
      'email',
      'equipo_id'];
  
    protected $hidden = ['created_at','updated_at'];
  
    public function equipo(){
      return $this->belongsTo('App\Models\Equipo', 'equipo_id');
    }
  
    public function entrenamiento(){
      return $this->belongsToMany('App\Entrenamiento');
    }
}
