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

	public function show()
	{
		$detail = Boisson::select('id', 'nomBoisson', 'prix')->get();
		return view('boissons', ['detailBoissons'=>$detail]);
	}

	 public function showDrink($id){
 		$boisson = Boisson::where('id',$id)->get();
 		return view('/detail', ['detail'=>$boisson]);
 	}

 	public function create()
 	{
 		return view('createBoisson');
 	}

 	public function store(Request $request)
 	{
 		$boisson= new Boisson();

 		$boisson->nomBoisson = $request->input('nomBoisson');
 		$boisson->prix = $request->input('prix');
 		$boisson->save();


 		 return redirect('/boissons');
 	}

 	public function edit($id)
 	{
 		$boisson =  Boisson::find($id);
 		return view('/modifierBoisson',  ['boisson'=>$boisson]);
 	}


 	public function update($id)
 	{
 		$boisson= Boisson::find($id);
 		$boisson->nomBoisson = request('nomBoisson');
 		$boisson->prix = request('prix');
 		$boisson->save();
 		// dump($boisson);
 		return redirect('/boissons');
 	}

 	public function delete($id)
 	{
 		$boisson =  Boisson::find($id);
 		return view('/formulaireSuppBoisson',  ['boisson'=>$boisson]);
 	}

 	public function destroy($id)
 	{
 		$delete = Boisson::find($id);
 		$delete->delete();

 		return redirect('/boissons');
 	}
 }

?>