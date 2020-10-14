<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

    Route::name('accueil')->get('/', 'PackController@accueil');
    Route::name('listpack')->get('listpack', 'CatalogueController@listpack');
    // Route::name('packlist')->get('packlist', 'PackController@packlist');
    Route::name('packdetail')->get('packdetail', 'PackController@packdetail');
    Route::name('About')->get('About', 'AboutController@index');
    Route::name('partenaire')->get('partenaire', 'partenaireController@index');
    Route::name('pack')->get('pack/{id}', 'PackController@conseil_pack');
