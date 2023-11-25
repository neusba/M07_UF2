<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;    // "importamos" el controlador que se encargará de todas las funciones que se ejecutan si un usuario es admin

// Rutas de funciones de admin que tienen el middleware 'admin_db'
Route::middleware(['admin_db'])->group(function() {
    Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');  // Checkea las credenciales de login y da acceso o no
    Route::get('/centres', [AdminController::class, 'centres'])->name('centres');   // Muestra los centros si hace login
    Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');   // Muestra los professores si hace login
    Route::get('/alumant', [AdminController::class, 'alumnat'])->name('alumnat');   // Muestra los alumnos si accede
    Route::get('/vistaAdmin', [AdminController::class, 'admin'])->name('admin');    // Vuelve a vista ADMIN
});

