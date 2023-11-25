<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // Ruta que lleva a la vista admin
    public function admin() {
        return view('Admin.admin');
    }
    // Ruta que coge los datos del login del usuario
    public function usuaris(Request $request) {
        try {
            $email = $request->input('email');
            $pwd = $request->input('password');
            if ($email == '' || $pwd == '') {
                return view('signin');
            }
        } catch(Exception $e) {
            return view('signin');
        }
        return view('Admin.admin');
    }

    // Ruta que muestra los centros existentes
    public function centres(Request $request) {
        // array de centros
        $centres = [
            [
                'ID' => 1,
                'NAME' => 'Institut TIC de Barcelona',
                'ADDRESS' => 'C/ de Sancho de Ávila, 133',
                'CP' => '08018',
                'CITY' => 'Barcelona'
            ],
            [
                'ID' => 2,
                'NAME' => 'Jaume Balmes',
                'ADDRESS' => 'C/ diputació, 150',
                'CP' => '08013',
                'CITY' => 'Barcelona'
            ]
        ];
        return view('Admin.centres')->with('centres', $centres);
    }

    // Ruta que muestra los professores
    public function professorat(Request $request) {
        $profes = [
            [
                'ID' => 1,
                'NAME' => 'Roger',
                'SURNAME' => 'Sobrino',
                'ROL' => 'Professor',
                'EMAIL' => 'roger@roger.com'
            ],
            [
                'ID' => 1,
                'NAME' => 'Moises',
                'SURNAME' => 'Gómez',
                'ROL' => 'Professor',
                'EMAIL' => 'moises@moises.com'
            ],
            [
                'ID' => 1,
                'NAME' => 'Jordi',
                'SURNAME' => 'Quesada',
                'ROL' => 'Professor',
                'EMAIL' => 'jordi@jordi.com'
            ]
        ];
        return view('Admin.professorat')->with('profes', $profes);
    }

    // Ruta que muestra los alumnos
    public function alumnat(Request $request) {
        $alumnes = [
            [
                'ID' => 1,
                'NAME' => 'Neus',
                'SURNAME' => 'Bravo',
                'ROL' => 'Alumne',
                'EMAIL' => 'neus@neus.com'
            ],
            [
                'ID' => 1,
                'NAME' => 'Facundo',
                'SURNAME' => 'Barrios',
                'ROL' => 'Alumne',
                'EMAIL' => 'facundo@facundo.com'
            ],
            [
                'ID' => 1,
                'NAME' => 'Angelo',
                'SURNAME' => 'Montenegro',
                'ROL' => 'Alumne',
                'EMAIL' => 'angelo@angelo.com'
            ]
        ];
        return view('Admin.alumnat')->with('alumnes', $alumnes);
    }


}
