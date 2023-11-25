<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Creamos la clase del controlador que se encargará de definir la función de cada ruta que use SignController
class SignController extends Controller
{
    // Función que muestra el login con parámetros como título
    public function signin($login = '', $rol = '', $name = '', $surname = '') {  
        $login = ($login == '') ? 'Sin parámetro' : $login;
        $rol = ($rol == '') ? 'Sin parámetro' : $rol;
        $name = ($name == '') ? 'Sin parámetro' : $name;
        $surname = ($surname == '') ? 'Sin parámetro' : $surname;

        $title = $login . ' ' . $rol . ' ' . $name . ' ' . $surname;
        return view('signin')->with('title', $title);
    }

    // Función que muestra la página de registro con parámetros como título
    public function signup($form = '', $user = '', $name = '') {
        $form = ($form == '') ? 'Sin parámetro' : $form;
        $user = ($user == '') ? 'Sin parámetro' : $user;
        $name = ($name == '') ? 'Sin parámetro' : $name;

        $title = $form . ' ' . $user . ' ' . $name;
        return view('signup')->with('title', $title);
    }
}
