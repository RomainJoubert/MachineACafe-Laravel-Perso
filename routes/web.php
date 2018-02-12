<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');

Route::get('/machineACafe','MachineACafeController@index');

//affiche la liste des ingrédients, ancienne version
// Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@index');

Route::get('/recettes','RecetteController@index');

Route::get('/gestionMonnaie','GestionMonnaieController@index');

Route::get('/boisson/{id}','MachineACafeController@showDrink');

//tri les boissons dans l'ordre alphabétique
Route::get('triBoisson', 'BoissonController@triBoisson');

//tri les boissons par prix, par ordre croissant
Route::get('prix', 'BoissonController@triPrix');


//BOISSON

//affiche le détail d'une boisson
Route::get('boissons', 'BoissonController@show')->name('test');

//
Route::get('/boissons/{id}','BoissonController@showDrink');

//affiche la vue pour créer une boisson
Route::get('/createBoisson', 'BoissonController@create');

//affiche la vue après avoir créée la boisson
Route::post('/boissons', 'BoissonController@store');

//affiche la vue pour modifier une boisson
Route::get('modifierBoisson/{id}', 'BoissonController@edit');


//affiche le formulaire pour modifier une boisson
Route::put('/boissons/{id}', 'BoissonController@update')->name('modifBoisson');

//affiche le formulaire pour supprimer une boisson
Route::get('/formulaireSuppBoisson/{id}', 'BoissonController@delete')->name('formulaireSupp');

//pour supprimer une boisson
Route::delete('/boissons/{id}', 'BoissonController@destroy')->name('supprimerBoisson');

//INGREDIENTS

//pour afficher la liste des ingrédients
Route::get('/listeIngredients', 'IngredientController@index');

//affiche la vue pour créer un ingrédient
Route::get('/createIngredient', 'IngredientController@create');

//affiche la vue après avoir créée un ingrédient
Route::post('/listeIngredients', 'IngredientController@store');

//affiche la vue pour modifier un ingrédient
Route::get('/modifierIngredient/{id}', 'IngredientController@edit');

//affiche le formulaire pour modifier un ingrédient
Route::put('/listeIngredients/{id}', 'IngredientController@update')->name('modifIngredient');

//affiche le formulaire pour supprimer un ingrédient
Route::get('/formulaireSuppIngredient/{id}', 'IngredientController@delete')->name('formulaireSuppIng');

//pour supprimer un ingrédient
Route::delete('/listeIngredients/{id}', 'IngredientController@destroy')->name('supprimerIngredient');


//RECETTES

//pour afficher la liste des ventes
Route::get('/ventes', 'VenteController@index');

//
Route::post('/ventes', 'VenteController@store')->name('ajoutVente');

?>
