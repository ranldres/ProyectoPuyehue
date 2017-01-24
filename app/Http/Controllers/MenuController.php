<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function view(){

        return view('inicio');
    }

    public function sitios(){

        return view('sitios');
    }

    public function gastronomia(){

        return view('gastronomia');
    }

    public function evento(){

        return view('evento');
    }

    public function alojamiento(){

        return view('alojamiento');
    }
}

