<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class livreController extends Controller
{
    public function index(){
        return view('livre.index');
    }
}
