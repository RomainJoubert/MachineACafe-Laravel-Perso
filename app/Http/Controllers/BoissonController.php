<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;

class BoissonController extends Controller
{
    // public function listeBoisson()
    // {
    // 	$boisson = Boisson::all();
    // 	return view('boisson',['boisson'=>$boisson]);
    // }

	public function triBoisson()
	{
		$boisson = Boisson::select('NomBoisson')->orderBy('NomBoisson')->get();
		return view('triBoisson',['detailBoissons'=>$boisson]);		
	}

	public function triPrix()
	{
		$prix = Boisson::orderBy('Prix')->get();
		return view('prix', ['prixBoissons'=>$prix]);
	}

	public function detailBoisson()
	{
		$detail = Boisson::all();
		return view('boissons', ['detailBoissons'=>$detail]);
	}

	 public function afficheBoisson($code){
 	$boisson = Boisson::where('CodeBoisson',$code)->get();
 		return view('/detail', ['detail'=>$boisson]);
 	}
}

?>