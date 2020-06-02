<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fundador extends Model
{
    protected $table = 'fundadors';

    protected $fillable = [
      'nombres',
      'apellidos',
      'edad',
      'telefono',
      'email',
      'liga_id'];
  
    protected $hidden = ['created_at','updated_at'];
  
    public function hospital(){
      return $this->belongsTo('App\Models\Liga', 'liga_id');
    }
}
