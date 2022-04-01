<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auteurController extends Controller
{
    public function index(){
        return view('auteur.index');
    }


}
