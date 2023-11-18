<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Creamos la clase del controlador que se encargará de definir la función de cada ruta que use SignController
class SignController extends Controller
{
    // Función que muestra el login con parámetros como título
    public function signin($login, $rol, $name, $surname = '') {  
        $surname = ($surname == '') ? 'Asecas' : $surname;
        $title = $login . ' ' . $rol . ' ' . $name . ' ' . $surname;
        return view('signin')->with('title', $title);
    }

    // Función que muestra la página de registro con parámetros como título
    public function signup($form, $user, $name = '') {
        $name = ($name == '') ? 'nuevo' : $name;
        $title = $form . ' ' . $user . ' ' . $name;
        return view('signup')->with('title', $title);
    }
}
