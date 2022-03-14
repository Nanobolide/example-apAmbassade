<?php

use App\Http\Controllers\imageTesteController;
use Illuminate\Support\Facades\Route;

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

 Route::get('/','AmbassadeController@home')->name('home');

Route::get('/acceuil', function(){
    return view('welcome');
});

Route::get('/home','AmbassadeController@home')->name('home');


// Route::resource('lta', 'LtaController');

# Admin
    Route::resource('actualite','Admin\ActualiteController');


//admin Route
Route::get('/admin/actulite','AdminController@formactualite')->name('create.actualite');
Route::post('/admin/actulite/post' ,'AdminController@storeActu')->name('store.actualite');
Route::get('/admin/actualite','AdminController@actualite')->name('admin.actualite');

Route::get('/actualite/{id}/edit','AdminController@editActu')->name('edit.actualite');
Route::post('/actualite/{id}/update','AdminController@updateActualite')->name('modifier.actualite');

Route::post('/actu/{id}/delete','AdminController@deleteActu')->name('destroy.actualite');

Route::get('/admin/communique','AdminController@create')->name('create.communique');
// admin


// Route::get(,'AdminController@contact')->name('contact');


Route::get('/contact','AmbassadeController@contact')->name('contact');
Route::get('/ambassadeur','AmbassadeController@ambassadeur')->name('ambassadeur');
Route::get('/equipe','AmbassadeController@equipe')->name('equipe');
Route::get('/horaire','AmbassadeController@horaire')->name('horaire');

Route::get('/carte','AmbassadeController@carte')->name('carte');
Route::get('/inscrire','AmbassadeController@inscrire')->name('inscrire');
Route::get('/visa','AmbassadeController@visa')->name('visa');




Route::get('/actualite','AmbassadeController@actualite')->name('actualite');
Route::get('/communique','AmbassadeController@communique')->name('communique');
