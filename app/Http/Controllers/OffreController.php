<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres= DB::table('offres')->orderBy('dateP','desc')->take(30)->paginate(5);
        return view('admin.offre.index',compact('offres'));
    }
    public function index2()
    {
        $offres= DB::table('offres')->orderBy('dateP','desc')->take(30)->paginate(5);
        return view('pages.offre.alloffre',compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reference' => 'required',
            'contenu' => 'required',
            'dateC' => 'required',
            'dateP' => 'required',
            'titre' => 'required',
            'fichier'=> 'required|mimes:pdf|max:5000'

        ]);

        //upload image

        $pdfName=time().'.'.$request->fichier->extension();
        $request->fichier->move(public_path('fichier_pdf'), $pdfName);

        $offre = new Offre;
        $offre->Fichier = $pdfName;
        $offre->Titre = $request->titre;
        $offre->Contenu =$request->contenu;
        $offre->DateC = $request->dateC;
        $offre->DateP = $request->dateP;
        $offre->Reference = $request->reference;
        

        $offre->save();
        return redirect()->route('offre.index')->withSuccess('Activité ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        $offre = Offre::where('id',$offre->id)->first();
        return view('pages.offre.show',compact('offre'));
    }
    public function detail(Offre $offre)
    {
        $offre= Offre::where('id', $offre->id)->first();
        return view('pages.offre.show',compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {
        $offre = Offre::where('id',$offre->id)->first();
        return view('admin.offre.edit', compact('offre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offre $offre)
    {
        $request->validate([
            'reference' => 'required',
            'contenu' => 'required',
            'dateC' => 'required',
            'dateP' => 'required',
            'titre' => 'required',
            'fichier'=> 'nullable|mimes:pdf|max:5000'

        ]);

        //upload image
        if(isset($request->fichier)){
        $pdfName=time().'.'.$request->fichier->extension();
        $request->fichier->move(public_path('fichier_pdf'), $pdfName);
        $offre->Fichier = $pdfName;
        }
        $offre->Titre = $request->titre;
        $offre->Contenu =$request->contenu;
        $offre->DateC = $request->dateC;
        $offre->DateP = $request->dateP;
        $offre->Reference = $request->reference;
        

        $offre->save();
        return redirect()->route('offre.index')->withSuccess('Offre Modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {
        $offre = Offre::where('id',$offre->id)->first();
        $offre->delete();
        return redirect()->route('offre.index')->withSuccess('supprimé avec succès');
    }
}
