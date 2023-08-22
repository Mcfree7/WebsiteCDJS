<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class ProposController extends Controller
{
    //Controlleur pour la page a propos

    public function index()
    {
        $membre = Membre::latest()->get();
        return view('pages.apropos',compact('membre'));
    }

  
}
