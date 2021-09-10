<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreweryController;


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
Route::get('/',[BreweryController::class,'home'])->name('home');

Route::get('/cervecerias', [BreweryController::class,'cervecerias'])->name('cervecerias');

Route::get('/crearCerveceria', [BreweryController::class,'crearCerveceria'])->name('crearCerveceria');

Route::post('/cervecerias', [BreweryController::class,'guardarFormulario'])->name('guardarFormulario'); //Formulario

Route::get('/cervezas', [BreweryController::class,'paginaCervezas'])->name('paginaCervezas');

  