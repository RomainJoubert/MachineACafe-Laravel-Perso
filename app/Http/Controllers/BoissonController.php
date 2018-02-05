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
		$boisson = Boisson::select('nomBoisson')->orderBy('nomBoisson')->get();
		return view('triBoisson',['detailBoissons'=>$boisson]);		
	}

	public function triPrix()
	{
		$prix = Boisson::orderBy('prix')->get();
		return view('prix', ['prixBoissons'=>$prix]);
	}

	public function detailBoisson()
	{
		$detail = Boisson::select('nomBoisson', 'prix')->get();
		return view('boissons', ['detailBoissons'=>$detail]);
	}

	 public function afficheBoisson($id){
 	$boisson = Boisson::where('id',$id)->get();
 		return view('/detail', ['detail'=>$boisson]);
 	}

 	public function create()
 	{
 		return view('createBoisson');
 	}

 	public function store($codeBoisson, $nomBoisson)
 	{
 		$boisson=Boisson::insert('id', $codeBoisson)->post();
 			$boisson= Boisson::where('nomBoisson', $nomBoisson);
 				return view('boissons');
 	}
}

?>