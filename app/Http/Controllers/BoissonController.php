<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;//lien vers la classe boisson

class BoissonController extends Controller
{
    // public function listeBoisson()
    // {
    // 	$boisson = Boisson::all();
    // 	return view('boisson',['boisson'=>$boisson]);
    // }

//tri les boissons par ordre alphabétique
	public function triBoisson()
	{
		$boisson = Boisson::select('nomBoisson')->orderBy('nomBoisson')->get();
		return view('triBoisson',['detailBoissons'=>$boisson]);		
	}

//tri les boissons par prix
	public function triPrix()
	{
		$prix = Boisson::orderBy('prix')->get();
		return view('prix', ['prixBoissons'=>$prix]);
	}

//affiche la liste des boissons
	public function show()
	{
		$detail = Boisson::select('id', 'nomBoisson', 'prix')->get();
		return view('boissons', ['detailBoissons'=>$detail]);
	}

//affiche le détail d'une boisson
	 public function showDrink($id){
 		$boisson = Boisson::where('id',$id)->get();
 		return view('/detail', ['detail'=>$boisson]);
 	}

//affiche la vue pour créer une nouvelle boisson
 	public function create()
 	{
 		return view('createBoisson');
 	}

//pour créer une nouvelle boisson à partir d'un formulaire
 	public function store(Request $request)
 	{
 		$boisson= new Boisson();

 		$boisson->nomBoisson = $request->input('nomBoisson');
 		$boisson->prix = $request->input('prix');
 		$boisson->save();


 		 return redirect('/boissons');
 	}

//affiche la vue pour modifier une recette
 	public function edit($id)
 	{
 		$boisson =  Boisson::find($id);
 		return view('/modifierBoisson',  ['boisson'=>$boisson]);
 	}

//pour modifier une boissons à partir d'un formulaire
 	public function update($id)
 	{
 		$boisson= Boisson::find($id);
 		$boisson->nomBoisson = request('nomBoisson');
 		$boisson->prix = request('prix');
 		$boisson->save();
 		// dump($boisson);
 		return redirect('/boissons');
 	}

//affiche la vue pour supprimer une boisson
 	public function delete($id)
 	{
 		$boisson =  Boisson::find($id);
 		return view('/formulaireSuppBoisson',  ['boisson'=>$boisson]);
 	}

//pour supprimer une boisson
 	public function destroy($id)
 	{
 		$delete = Boisson::find($id);
 		$delete->delete();

 		return redirect('/boissons');
 	}
 }

?>