<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Boisson;
use App\Vente;

class VenteController extends Controller{
/**Affiche toutes les ventes passées */

 // public function index() {
  

  //tableau multidimensionnel pour afficher des ventes
    // $ventesTab = array (
    //   array (
    //     "N°" => "1",
    //     "Boisson commandée" => "Café",  
    //     "Date" => "2018/01/04",
    //     "Heure" => "08:17:57",
    //     "Nb de sucres" => "0",
     
    //   ),
    //   array (
    //     "N°" => "2",
    //     "Boisson commandée" => "Thé",  
    //     "Date" => "2018/01/04",
    //     "Heure" => "09:17:57",
    //     "Nb de sucres" => "1",
       
    //   ),
    //   array (
    //     "N°" => "3",
    //     "Boisson commandée" => "Expresso",  
    //     "Date" => "2018/01/14",
    //     "Heure" => "18:17:02",
    //     "Nb de sucres" => "5",
        
    //   ),
    //   array (
    //     "N°" => "4",
    //     "Boisson commandée" => "Expresso",  
    //     "Date" => "2018/01/15",
    //     "Heure" => "08:17:02",
    //     "Nb de sucres" => "2",
    
    //   ),
    //   array (
    //     "N°" => "5",
    //     "Boisson commandée" => "Thé",  
    //     "Date" => "2018/01/16",
    //     "Heure" => "10:17:57",
    //     "Nb de sucres" => "1",
   
    //   ),
    // );
    
    // return view("ventes",["RetourTab" => $ventesTab]);
  //  return view('/ventes');
  // }


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

