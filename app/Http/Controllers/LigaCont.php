<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Models\Liga;
use App\Models\Fundador;

class LigaCont extends Controller
 {
public function index(){ 
  
  $liga = App\Models\Liga::find(12);
  return $liga->fundador;

    }   
   
   public function store(){
    App/Models/Liga::create(
      ['nomliga'=>'Santander', 'cuidadliga'=>'Madrid', 'Npartidos'=>' 23']);

    $liga = App/Models/Liga::find(3);
    $liga->fundador()->create([
      'nombres' => 'Alfredo',
      'apellidos' => 'Di estefano',
      'edad' => '90',
      'telefono' => '000001',
      'email' => 'alfreD@hotmail.com',
    ]);

    return $liga->fundador;

  }

  public function update(){

    $liga = App/Models/Liga::find(12);
    $liga->update(['nomliga'=>'Bundersliga', 'cuidadliga'=>'Berlin', 'Npartidos'=>' 23']);
    return $liga;
  }

  public function update_2(){

    $liga = App/Models/Liga::find(3);
    $liga->fundador()->update([
      'nombres' => 'Aldol',
      'apellidos' => 'Di h',
      'edad' => '90',
      'telefono' => '000001',
      'email' => 'adolf@hotmail.com',
    ]);
    return $liga->fundador;
  }

  public function destroy(){
    $liga = App/Models/Liga::find(15);
    $liga->destroy(15);
    return $liga;
  }

  public function destroy_2(){
    $liga = App/Models/Liga::find(17);
    $liga->director()->delete(5);
    $liga->destroy(17);
    return $liga->fundador;
  }
}
