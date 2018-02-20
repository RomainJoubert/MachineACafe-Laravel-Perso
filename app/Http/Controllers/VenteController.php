<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Boisson;
use App\Vente;

class VenteController extends Controller{

  //afficher les commandes
  public function index()
  {
    $ventes = Vente::all();
  
    return view('/ventes', ['ventes'=>$ventes]);
  }

//affiche la vue pour ajouter une vente
  public function create()
  {
    return view('/machineACafe');
  }

//pour créer une nouvelle vente
  public function store(Request $request)
  {
    $data = [
      'nom'=>$request->input('choixBoisson'),
      'nbSucres'=>$request->input('choixSucre'),
      'prix' => Boisson::select('prix')->where('nomBoisson',$request->input('choixBoisson'))->get()->first()->prix,
      'boisson_id' => Boisson::select('id')->where('nomBoisson',$request->input('choixBoisson'))->get()->first()->id
            ];
            // $boisson = Boisson::select('prix')->where('nomBoisson',$data['nom'])->get();
    // dump($boisson[0]->prix);
            // dd($data);
   //$boisson = Boisson::select('prix')->where('nomBoisson',$data['nom'])->get();
    
    $ventes = Vente::create($data);
    return redirect('/machineACafe') ;
  }

}
?>

