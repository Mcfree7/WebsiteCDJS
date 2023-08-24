<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membre = DB::table('membres')->orderBy('id','desc')->paginate(5);
        return view('admin.Membre.index',compact('membre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Membre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nom'=> 'required',
            'poste'=> 'required',
            'image'=> 'required|mimes:jpeg,jpg,png|max:5000|dimensions:width=600,height=600',
        ]);

        //upload image
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('Membres'),$imageName);

        $membre = new Membre;
        $membre->Image = $imageName;
        $membre->Nom = $request->nom;
        $membre->Poste = $request->poste;

        $membre->save();
        return redirect()->route('membre.index')->withSuccess('Membre ajouté avec succès!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Membre $membre)
    {
        //
    }
    public function affiche()
    {
        $membres = DB::table('membres')->orderBy('id','desc')->paginate(4);
        return view('pages.Membre.allmembre',compact('membres'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Membre $membre)
    {
        $membre = Membre::where('id',$membre->id)->first();

        return view('admin.membre.edit',compact('membre')) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membre $membre)
    {
        $request->validate([

            'nom'=> 'required',
            'poste'=> 'required',
            'image'=> 'nullable|mimes:jpeg,jpg,png|max:5000|dimensions:width=600,height=600',
        ]);
        $membre = Membre::where('id',$membre->id)->first();
        //upload image
        if(isset($request->image)){
            $imageName=time().'.'.$request->image->extension();
            $request->image->move(public_path('Membres'),$imageName);
            $membre->Image = $imageName;
        }
        $membre->Nom = $request->nom;
        $membre->Poste = $request->poste;

        $membre->save();
        return redirect()->route('membre.index')->withSuccess('Membre modifié avec succès!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membre $membre)
    {
        $membre = Membre::where('id',$membre->id)->first();
        $membre->delete();
        return back()->withSuccess('membre Supprimé avec succès');
    }
}
