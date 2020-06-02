<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Equipo;
use App\Models\Diret;

class EquipoCont extends Controller
{
    public function index(){

        $equipo = App/Models/Equipo::find(0);
        return $equipo->direts;
    }
  
      public function store(){
        App/Models/Equipo::create(
          ['nomequipo'=>'Real Madrid',
          'nmtrofeos'=>'ochenta',
          'nmjugadores'=>'18',
          'posicion'=>'primer lugar',
          'liga_id'=>'3']);
  
        $equipo = App/Models/Equipo::find(5);
        $equipo->direts()->createMany([
          ['nombre' => 'Pablo ',
          'apellido' => 'Ancelotty',
          'edad' => '50',
          'sexo' => 'masculino',
          'historia_clinica' => 'bien',
          'telefono' => '77777',
          'email' => 'pabloA@hotmail.com'],
          ['nombre' => 'Zinedy',
          'apellido' => 'Zidane',
          'edad' => '42',
          'sexo' => 'masculino',
          'historia_clinica' => 'bien',
          'telefono' => '242424',
          'email' => 'zizu@hotmail.com'],
        ]);
  
        return $equipo->direts;
  
      }
  
      public function update(){
  
        $equipo = App/Models/Equipo::find(1);
        $equipo ->update(
        ['nomequipo'=>'barcelona',
        'nmtrofeos'=>'cuarenta',
        'nmjugadores'=>'18',
        'posicion'=>'segundo lugar',
        'liga_id'=>'12']);
  
          return $equipo;
      }
  
      public function update_2(){
  
        $equipo = App/Models/Equipo::find(5);
        $equipo->direts()->find(2)->update([
          'nombre' => 'mouriño',
          'apellido' => 'sergui',
          'edad' => '69',
          'sexo' => 'masculino',
          'historia_clinica' => 'regular',
          'telefono' => '456777',
          'email' => 'moup@hotmail.com'
        ]);
        return $equipo->direts;
      }
  
      public function destroy(){
        $equipo = App/Models/Equipo::find(15);
        $equipo->destroy(15);
        return $equipo;
      }
  
      public function destroy_2(){
        $equipo = App/Models/Equipo::find(1);
        $equipo->direts()->delete(1, 2);
        $equipo->destroy(1);
        return $equipo->direts;
      }
  
  
  
      public function store_2(){
        App/Models/Equipo::create(
            
            ['nomequipo'=>'Real Madrid',
            'nmtrofeos'=>'ochenta',
            'nmjugadores'=>'18',
            'posicion'=>'primer lugar',
            'liga_id'=>'1']);
  
        $equipo = App/Models/Equipo::find(1);
        $equipo->recorridos()->createMany([
          ['descripcion' => 'manchester city'],
          ['descripcion' => 'Real madrid'],
        ]);
  
        return $equipo->recorridos;
  
      }
  
  
      public function store_3(){
        App/Models/Equipo::create(
            ['nomequipo'=>'Valencia',
            'nmtrofeos'=>'veinte',
            'nmjugadores'=>'18',
            'posicion'=>'quinto lugar',
            'liga_id'=>'3']);
  
        $equipo = App/Models/Equipo::find(6);
        $equipo->otros()->createMany([
          ['TarjetasAm' => '20'],
          ['TarjetasRJ' => '2'],
          ['Personalapollo' => '7'],
          ['Medeico' => 'Juan David'],

        ]);
  
        return $equipo->otros;
  
      }
  
      public function relacionar(){
        $equipo = App/Models/Equipo::find(2);
        $equipo->recorridos()->attach([1,2]);
        return $equipo->recorridos;
  
      }
  
      public function update_morfica(){
  
        $equipo = App/Models/Equipo::find(6);
        $equipo->otros()->find(4)->update([
          'descripcion' => 'Juan david']);
        return $equipo->otros;
      }
  
      public function destroy_morfica(){
        $equipo = App/Models/Equipo::find(6);
        $equipo->otros()->delete(3, 4);
        return $equipo->otros;
      }
  
}
