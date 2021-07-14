<?php

use App\Http\Controllers\CategorieController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Connexion','loginController');
Route::resource('Inscription','RegisterController');
Route::resource('Accueil','AccueilController');
Route::resource('Admin','AdminController');
Route::resource('Categories', 'CategorieController');

