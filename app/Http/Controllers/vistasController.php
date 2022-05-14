<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistasController extends Controller
{
    public function index(){
        return view('layout.index');
    }

    public function another(){
        return view('layout.elements');
    }
}
