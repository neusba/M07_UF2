<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;    // "importamos" el controlador que hemos creado para poder utilizarlo en este archivo

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta de inicio, archivo 'welcome' por defecto
Route::get('/', function () {
    return view('welcome');
});

// Grupo de rutas con prefijo 'NeusBravo'
Route::prefix('NeusBravo')->group(function() {
    Route::get('/signin/{login}/{rol}/{name}/{surname?}', [SignController::class, 'signin']);   // indicamos el controlador que desarrolla la función de la ruta signin
    Route::get('/signup/{form}/{user}/{name?}', [SignController::class, 'signup']);   // indicamos el controlador que desarrolla la función de la ruta signup
});
