<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $photos = DB::table('photos')->orderBy('id','desc')->paginate(5);
        return view('admin.photo.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'categorie' => 'required',
            'image'=> 'required|mimes:jpeg,jpg,png|max:1000|dimensions:width=900,height=600'
        ]);

        ///upload image
        $imageName =time(). '.' .$request->image->extension();
        $request->image->move(public_path('photos'),$imageName);

        $photo = new Photo;
        $photo->Image = $imageName;
        $photo->Titre = $request->titre;
        $photo->Lieu = $request->lieu;
        $photo->Date= $request->date;
        $photo->Contenu = $request->contenu;
        $photo->Categorie = $request->categorie;

        $photo->save();
        return redirect()->route('photo.index')->withSuccess('Photo ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     * 
     */

     public function affiche()
     {
        $photos = DB::table('photos')->orderBy('id','desc')->paginate(3);
        return view('pages.photo.allphoto',compact('photos'));
     }
    public function show(Photo $photo)
    {
        $photo = Photo::where('id',$photo->id)->first();
        return view('pages.photo.show',compact('photo')) ; 
    }
    public function detail(Photo $photo)
    {
        $photo = Photo::where('id',$photo->id)->first();
        return view('pages.photo.show',compact('photo')) ; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        $photo = Photo::where('id',$photo->id)->first();

        return view('admin.photo.edit',compact('photo')) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
         //validation
         $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'categorie' => 'required',
            'image'=> 'nullable|mimes:jpeg,jpg,png|max:5000|dimensions:width=900,height=600'
        ]);
        
        $photo = Photo::where('id',$photo->id)->first();

        ///upload image
        if(isset($request->image)){
            $imageName =time(). '.' .$request->image->extension();
            $request->image->move(public_path('photos'),$imageName);
            $photo->Image = $imageName;

        }
        
        
        $photo->Titre = $request->titre;
        $photo->Lieu = $request->lieu;
        $photo->Date= $request->date;
        $photo->Contenu = $request->contenu;
        $photo->Categorie = $request->categorie;

        $photo->save();
        return redirect()->route('photo.index')->withSuccess('Photo modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photo = Photo::where('id', $photo->id)->first();
        $photo->delete();
        return back()->withSuccess('Suprresion effectuée avec succès');
    }
}
