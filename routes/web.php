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

//AUTHENTIFICATION

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index');





Route::get('/machineACafe','MachineACafeController@index');

//affiche la liste des ingrédients, ancienne version
// Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@index')->middleware('auth');

//RECETTES

//affiche les recettes des boissons
Route::get('/recettes','RecetteController@index')->middleware('auth');

//affiche le formulaire pour ajouter une recette
Route::get('/createRecette', 'RecetteController@create')->middleware('auth');

//affiche la vue après avoir créée une recette
Route::post('/recettes', 'RecetteController@store')->middleware('auth');

//affiche la vue pour modifier une recette
Route::get('/modifierRecette/{boisson_id}/{ingredient_id}', 'RecetteController@edit')->middleware('auth');

//affiche le formulaire de modification d'une recette
Route::put('/modifierRecette/{boisson_id}/{ingredient_id}', 'RecetteController@update')->middleware('auth');

//affiche le formulaire pour supprimer une recette
Route::get('/supprimerRecette/{boisson_id}/{ingredient_id}', 'RecetteController@delete')->middleware('auth');

//supprimer une recette
Route::delete('/recettes/{boisson_id}/{ingredient_id}', 'RecetteController@destroy')->name('supprimerRecette')->middleware('auth');




Route::get('/gestionMonnaie','GestionMonnaieController@index')->middleware('auth');

Route::get('/boisson/{id}','MachineACafeController@showDrink');

//tri les boissons dans l'ordre alphabétique
Route::get('triBoisson', 'BoissonController@triBoisson')->middleware('auth');

//tri les boissons par prix, par ordre croissant
Route::get('prix', 'BoissonController@triPrix')->middleware('auth');


//BOISSON

//affiche le détail d'une boisson
Route::get('boissons', 'BoissonController@show')->name('test')->middleware('auth');

//
Route::get('/boissons/{id}','BoissonController@showDrink')->middleware('auth');

//affiche la vue pour créer une boisson
Route::get('/createBoisson', 'BoissonController@create')->middleware('auth');

//affiche la vue après avoir créée la boisson
Route::post('/boissons', 'BoissonController@store')->middleware('auth');

//affiche la vue pour modifier une boisson
Route::get('modifierBoisson/{id}', 'BoissonController@edit')->middleware('auth');


//affiche le formulaire pour modifier une boisson
Route::put('/boissons/{id}', 'BoissonController@update')->name('modifBoisson')->middleware('auth');

//affiche le formulaire pour supprimer une boisson
Route::get('/formulaireSuppBoisson/{id}', 'BoissonController@delete')->name('formulaireSupp')->middleware('auth');

//pour supprimer une boisson
Route::delete('/boissons/{id}', 'BoissonController@destroy')->name('supprimerBoisson')->middleware('auth');

//INGREDIENTS

//pour afficher la liste des ingrédients
Route::get('/listeIngredients', 'IngredientController@index')->middleware('auth');

//affiche la vue pour créer un ingrédient
Route::get('/createIngredient', 'IngredientController@create')->middleware('auth');

//affiche la vue après avoir créée un ingrédient
Route::post('/listeIngredients', 'IngredientController@store')->middleware('auth');

//affiche la vue pour modifier un ingrédient
Route::get('/modifierIngredient/{id}', 'IngredientController@edit')->middleware('auth');

//affiche le formulaire pour modifier un ingrédient
Route::put('/listeIngredients/{id}', 'IngredientController@update')->name('modifIngredient')->middleware('auth');

//affiche le formulaire pour supprimer un ingrédient
Route::get('/formulaireSuppIngredient/{id}', 'IngredientController@delete')->name('formulaireSuppIng')->middleware('auth');

//pour supprimer un ingrédient
Route::delete('/listeIngredients/{id}', 'IngredientController@destroy')->name('supprimerIngredient')->middleware('auth');


//VENTES

//pour afficher la liste des ventes
Route::get('/ventes', 'VenteController@index')->middleware('auth');

//pour ajouter une commande
Route::post('/machineACafe', 'VenteController@store')->name('ajoutVente');




?>


