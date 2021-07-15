<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

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

Route::get('/', function () {
    return view('welcome');
});
//Mes Homes//
Route::resource('Accueil','AccueilController');
Route::resource('Admin','AdminController');
//Authentification//
Route::resource('Connexion','loginController');
Route::resource('Inscription','RegisterController');

//Les vues//
Route::resource('Categories', 'CategorieController');
Route::resource('Produits', 'ProduitsController');

