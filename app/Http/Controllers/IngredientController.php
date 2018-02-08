<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientController extends Controller
{
  // function listIngredients() 
  // {
  	// $ingredients = array(
  	// 	'Café' => 100,
  	// 	'Eau'=> 100,
  	// 	'Thé'  => 100,
  	// 	'Lait' => 100,
   //    'Sucre' => 100
			// );
			
     // return view('ingredients', compact('ingredients'));
 // }

// récupérer l'id, le nom et le stock de l'ingrédient pour afficher
  public function ingredient()
  {
    $detail = Ingredient::all();
    return view('listeIngredients', ['detailIngredients'=>$detail]);
  }

  //créer la vue pour rajouter un ingrédient
  public function create()
  {
    return view('/createIngredient');
  }

//pour créer un nouvel ingrédient
  public function store(Request $request)
  {
    $ingredient= new Ingredient();

    $ingredient->nom = $request->input('nomIngredient');
    $ingredient->stock = $request->input('stock');
    $ingredient->save();


     return redirect('/listeIngredients');
  }

  public function modifier($id)
  {
    $ingredient =  Ingredient::find($id);
    return view('/modifierIngredient', ['ingredient'=>$ingredient]);
  }

  public function update(Request $request, $id)
  {
    $ingredient= Ingredient::find($id);
    $ingredient->nom = $request->input('nomIngredient');
    $ingredient->stock = $request->input('stock');
    $ingredient->save();
    // dump($boisson);
    return redirect('/listeIngredients');
  }

  public function destroy($id)
  {

    $delete = Ingredient::find($id);
    $delete->delete();

    return redirect('/listeIngredients');
  }
}
?>
