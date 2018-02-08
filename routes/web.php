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

Route::get('/', 'IndexController@bienvenue');

Route::get('/machineACafe','MachineACafeController@listDrink');

//affiche la liste des ingrédients, ancienne version
// Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@listeVente');

Route::get('/recettes','RecetteController@listRecettes');

Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');

Route::get('/boisson/{id}','MachineACafeController@showDrink');

//tri les boissons dans l'ordre alphabétique
Route::get('triBoisson', 'BoissonController@triBoisson');

//tri les boissons par prix, par ordre croissant
Route::get('prix', 'BoissonController@triPrix');


//BOISSON

//affiche le détail d'une boisson
Route::get('boissons', 'BoissonController@detailBoisson')->name('test');

//
Route::get('/boissons/{id}','BoissonController@afficheBoisson');

//affiche la vue pour créer une boisson
Route::get('/createBoisson', 'BoissonController@create');

//affiche la vue après avoir créée la boisson
Route::post('/boissons', 'BoissonController@store');

//affiche la vue pour modifier une boisson
Route::get('modifierBoisson/{id}', 'BoissonController@modifier');

//affiche la vue quand on modifie une boisson
Route::post('/boissons/{id}', 'BoissonController@update')->name('modifBoisson');

//pour supprimer une boisson
Route::get('/boissons/{id}', 'BoissonController@destroy')->name('supprimerBoisson');

//INGREDIENTS

//pour afficher la liste des ingrédients
Route::get('/listeIngredients', 'IngredientController@ingredient');

//affiche la vue pour créer un ingrédient
Route::get('/createIngredient', 'IngredientController@create');

//affiche la vue après avoir créée un ingrédient
Route::post('/listeIngredients', 'IngredientController@store');

//affiche la vue pour modifier un ingrédient
Route::get('/modifierIngredient/{id}', 'IngredientController@modifier');

//affiche la vue quand un ingrédient est rajouté
Route::post('/listeIngredients/{id}', 'IngredientController@update')->name('modifIngredient');

//pour supprimer un ingrédient
Route::get('/listeIngredients/{id}', 'IngredientController@destroy')->name('supprimerIngredient');

?>
