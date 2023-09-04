<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = DB::table('articles')->orderBy('Date','desc')->take(30)->paginate(5);
        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation de de données
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'date' => 'required',
            'image'=> 'required|mimes:jpeg,jpg,png|max:5000|dimensions:width=900,height=600'
        ]);
        //upload image
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('articles'), $imageName);


        $article = new Article;
        $article->Image = $imageName;
        $article->Titre = $request->titre;
        $article->Contenu = $request->contenu;
        $article->Date = $request->date;

        $article->save();
        return redirect()->route('article.index')->withSuccess('article ajouté avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $article = Article::where('id',$article->id)->first();
        $ar = DB::table('articles')->orderBy('Date','desc')->take(4)->get();
        return view('pages.article.show',compact('article','ar')) ; 
    } 

    //Affichage et detail fonctions
    public function detail(Article $article)
    {
        $article = Article::where('id',$article->id)->first();
        $ar =DB::table('articles')->orderBy('Date','desc')->take(4)->get();
        return view('pages.article.show',compact('article','ar')) ; 
    }

    public function affiche(){
        
        $articles= DB::table('articles')->orderBy('Date','desc')->take(30)->paginate(3);

        return view('pages.article.allarticles',compact('articles'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
       
        $article = Article::where('id',$article->id)->first();

        return view('admin.article.edit',compact('article')) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //validation de de données
         $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'date' => 'required',
            'image'=> 'nullable|mimes:jpeg,jpg,png|max:5000|dimensions:dimensions:width=900,height=600'
        ]);

        $article = Article::where('id',$article->id)->first();

        if(isset($request->image)){
            //upload image
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('articles'), $imageName);
            $article->Image = $imageName;
        }
        $article->Titre = $request->titre;
        $article->Contenu = $request->contenu;
        $article->Date = $request->date;

        $article->save();
        return redirect()->route('article.index')->withSuccess('article Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article = Article::where('id',$article->id)->first();
        $article->delete();
        return back()->withSuccess('article Supprimé avec succès');
    }
}
