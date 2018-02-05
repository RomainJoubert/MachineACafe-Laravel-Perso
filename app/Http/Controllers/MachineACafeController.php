<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Boisson;

class machineACafeController extends Controller
{

function listDrink() {
    // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];

    $drinkChoice = Boisson::select('nomBoisson', 'id')->get();

     return view('machineACafe', ['drinkChoice'=>$drinkChoice]);

 }
 function showDrink($id){
 	$boisson = Boisson::find($id);
 		return view('/boisson.drinkDetails', ['details'=>$boisson]);
 }
//Fonction de Véro
    // function listDrink() {
    //     $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
    //     $drinkChoice = DB::select('select nomboisson, codeboisson  from boisson');

    //     return view('machineACafe', ['drinks' => $drinkChoice]);

    // }

    // function showDrink ($code) {
     
    //     $drink = DB::select("select nomboisson, prixboisson from boisson where codeboisson = ?", [$code]);
    //     return view('boisson.drinkDetails', ['details' => $drink]);
        
    // }

// Fonction de Thomas
//   function listDrink()
//   {
//        // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
//       // return view('machineACafe', compact('drinkChoice'));

//     $drinkChoice = DB::select('select nomBoisson, codeBoisson from boisson');
//       return view('machineACafe', ['boissons' => $drinkChoice]);
//   }

//   function showDrink($code)
//   {
//     $drink = DB::select('select nomBoisson, prix from boisson where codeBoisson = ?',[$code]);
//     return view('boisson.affichageBoisson',['detailBoisson' => $drink]);
//   }

}

?>
