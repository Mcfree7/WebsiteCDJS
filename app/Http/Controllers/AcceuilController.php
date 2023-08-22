<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Photo;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    
        //controlleur pour la page d'acceuil    
        public function index(){
            $article = Article::latest()->get();
            $photo = Photo::latest()->get();
            return view('pages.acceuil',compact('article','photo'));
        }

}
