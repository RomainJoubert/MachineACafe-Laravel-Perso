<?php
namespace App\Http\Controllers;


use App\Boisson;//lien vers la classe boisson
use Illuminate\Http\Request;
use App\Ingredient;

use App\Boisson_ingredient;


class RecetteController extends Controller
{

	public function index()
	{
		//récupère les ingrédients d'une boisson
		$boissons = Boisson::all();
		return view('/recettes', ['boissons'=>$boissons]);
	}

	public function create()
	{
		$boissons = Boisson::all();
		$ingredients = Ingredient::all();
		return view('/createRecette',['boissons'=>$boissons],['ingredients'=>$ingredients]);
	}

	//ajouter une recette
	public function store (Request $request)
	{
		$data = [
	      'nomBoisson'=>$request->input('nomBoisson'),
	      'nom'=>$request->input('nomIngredient'),
	      'quantite'=>$request->input('nbDose'),
	  ];
		$boisson = Boisson::where('nomBoisson',$request->input('nomBoisson'))->first();
		// dd($boisson);
		$ingredient_id= Ingredient::where('nom', $data['nom'])->first()->id;
		$boisson->ingredients()->attach($ingredient_id,['nbDose'=>$request->input('nbDose')]);
		return redirect('/createRecette');
	}

	//pour afficher la vue du formulaire
	public function edit($boisson_id, $ingredient_id)
	{
		 $boisson=Boisson::find($boisson_id);
		 $recette=$boisson->ingredients->find($ingredient_id);
		return view('/modifierRecette', ['boisson'=>$boisson], ['recette'=>$recette]);
	}

	//pour modifier une recette
	public function update(Request $request,$boisson_id, $ingredient_id)
	{
		$boisson=Boisson::find($boisson_id);
		$recette=$boisson->ingredients->find($ingredient_id);
		$recette->pivot->update(['nbDose'=>$request->input('quantite')]);
		return redirect('/recettes');
	}

	//pour afficher la vue du formulaire de suppression
	public function delete($boisson_id, $ingredient_id)
	{
		$boisson=Boisson::find($boisson_id);
		$recette=$boisson->ingredients->find($ingredient_id);
		return view('/formulaireSuppRecette',['boisson'=>$boisson], ['recette'=>$recette]);
	}

	//pour supprimer une recette
	public function destroy($boisson_id, $ingredient_id)
	{
		$boisson=Boisson::find($boisson_id);
		$recette=$boisson->ingredients->find($ingredient_id);
		$boisson->ingredients()->detach($recette);
		// dump($boisson);
		return redirect('/recettes');
	}
}
?>



