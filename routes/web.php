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
// });conseil_pack

// pack-controller
    Route::name('accueil')->get('/', 'PackController@accueil');
    Route::name('listpack')->get('listpack', 'PackController@listpack');
    Route::name('packdetail')->get('packdetail', 'PackController@packdetail');
   // end pack-controller

	//about controler
    Route::name('About')->get('About', 'AboutController@index');
	//end about controler

    //partenaire controller
    Route::name('partenaire')->get('partenaire', 'partenaireController@index');
    // end partenaire controller

    //conseil pack
    Route::name('conseil_pack')->get('conseil_pack/{id}', 'detailpackController@conseil_pack');
    //conseil pack

    //contact pack
    Route::name('contact')->get('contact', 'contactController@showContactPage');
    //contact pack

