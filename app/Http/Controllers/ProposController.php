<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposController extends Controller
{
    //Controlleur pour la page a propos

    public function index(){
        return view('pages.apropos');
    }

  
}
