<?php
namespace App\Http\Controllers;


use App\Boisson;//lien vers la classe boisson


class RecetteController extends Controller
{

	public function index()
	{
		$boissons = Boisson::all()->load('ingredients');
		// dd($boissons);
		return view('recettes', ['boissons'=>$boissons]);
	}
}
?>



