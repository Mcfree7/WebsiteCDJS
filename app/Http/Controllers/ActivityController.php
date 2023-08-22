<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activity = Activite::latest()->get();
        return view('admin.activity.index', compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'categorie' => 'required',
            'status' => 'required',
            'date' => 'required',
            'image'=> 'required|mimes:jpeg,jpg,png|max:5000|dimensions:width=900,height=600'

        ]);

        //upload image

        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('activités'), $imageName);

        $activite = new Activite;
        $activite->Image = $imageName;
        $activite->Titre = $request->titre;
        $activite->Contenu = $request->contenu;
        $activite->Date = $request->date;
        $activite->Categorie = $request->categorie;
        $activite->Status = $request->status;

        $activite->save();
        return back()->withSuccess('Activité ajoutée avec succès');


    }

    /**
     * Display the specified resource.
     */
    public function show(Activite $activite)
    {
        $activity = Activite::where('id',$activite->id)->first();
        $act= Activite::latest()->take(4)->get();
        return view('pages.activity.show', compact('activity','act'));
    }

    ///fonction pour route hors middleware
    public function detail(Activite $activite)
    {
        $activity = Activite::where('id',$activite->id)->first();
        $act= Activite::latest()->take(4)->get();
        return view('pages.activity.show', compact('activity','act'));
    }
    public function sport(Activite $activite)
    {
        $activity = Activite::where('Categorie','Sport')->get();
        return view('pages.activity.allsport', compact('activity'));
    }  
    public function volontaire(Activite $activite)
    {
        $activity = Activite::where('Categorie','Volontariat')->get();
        return view('pages.activity.allsport', compact('activity'));
    }  
    public function jeunesse(Activite $activite)
    {
        $activity = Activite::where('Categorie','Jeunesse')->get();
        return view('pages.activity.allsport', compact('activity'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activite $activite)
    {
        $activity = Activite::where('id',$activite->id)->first();

        return view('admin.activity.edit',compact('activity')) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activite $activite)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'categorie' => 'required',
            'status' => 'required',
            'date' => 'required',
            'image'=> 'required|mimes:jpeg,jpg,png|max:5000|dimensions:width=900,height=650'

        ]);

        $activite = Activite::where('id',$activite->id)->first();
        //upload image

        if(isset($request->image)){

        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('activités'), $imageName);
        $activite->Image = $imageName;

        }
        $activite->Titre = $request->titre;
        $activite->Contenu = $request->contenu;
        $activite->Date = $request->date;
        $activite->Categorie = $request->categorie;
        $activite->Status = $request->status;

        $activite->save();
        return back()->withSuccess('Activité Modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activite $activite)
    {
        $activite = Activite::where('id', $activite->id)->first();
        $activite->delete();
        return back()->withSuccess('activité Supprimée avec succès');
    }
}
