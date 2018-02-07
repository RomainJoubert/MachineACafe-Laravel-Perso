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

Route::get('/index', 'IndexController@bienvenue');

Route::get('/machineACafe','MachineACafeController@listDrink');

Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@listeVente');

Route::get('/recettes','RecetteController@listRecettes');

Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');

Route::get('/boisson/{id}','MachineACafeController@showDrink');

Route::get('triBoisson', 'BoissonController@triBoisson');

Route::get('prix', 'BoissonController@triPrix');

Route::get('boissons', 'BoissonController@detailBoisson')->name('test');

Route::get('/boissons/{id}','BoissonController@afficheBoisson');

Route::get('/createBoisson', 'BoissonController@create');

Route::post('/boissons', 'BoissonController@store');

Route::get('modifierBoisson/{id}', 'BoissonController@modifier');

Route::post('/boissons/{id}', 'BoissonController@update')->name('modifBoisson');

?>
