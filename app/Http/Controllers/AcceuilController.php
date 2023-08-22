<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Membre;
use App\Models\Article;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    
        //controlleur pour la page d'acceuil    
        public function index(){
            $article = Article::latest()->get();
            $photo = Photo::latest()->get();
            $membre = Membre::latest()->get();
            return view('pages.acceuil',compact('article','photo','membre'));
        }

}
