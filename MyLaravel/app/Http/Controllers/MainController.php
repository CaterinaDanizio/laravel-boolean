<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function hola()
    {
        return view('home-es');
    }

    public function holaTu()
    {
        return view('home-es2', [ 
	    'nombre' => 'Alejandro'
     ]);
    }

    public function holaTu2()
    {
        return view('home-es2', [ 
	    'nombre' => 'Carlos'
     ]);
    }
}
