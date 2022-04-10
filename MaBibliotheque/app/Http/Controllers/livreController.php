<?php

namespace App\Http\Controllers;

use App\Models\auteur;
use App\Models\categorie;
use App\Models\editeur;
use Illuminate\Http\Request;
use App\Models\livre;

class livreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = livre::all();
        return view('livre.index', ['livres' => $livres] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livre.create',[
            'auteurs' => auteur::latest()->get(),
            'editeurs' => editeur::latest()->get(),
            'categories' => categorie::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $livre = new livre();
        $livre->categorie_id = $request->categorie_id;
        $livre->editeur_id = $request->editeur_id;
        $livre->auteur_id = $request->auteur_id;
        $livre->isbn = $request->isbn;
        $livre->nom = $request->nom;
        $livre->etat = $request->etat;
        $livre->langue = $request->langue;

        $livre->save();

        return redirect() -> route('livre');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  livre $livre
     * @return \Illuminate\Http\Response
     */
    public function edit(livre $livre)
    {
        return view('livre.edit',[
            'auteurs' => auteur::latest()->get(),
            'editeurs' => editeur::latest()->get(),
            'categories' => categorie::latest()->get(),
            'livre' => $livre
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  livre $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $livre = livre::find($id);

        $livre->categorie_id = $request->categorie_id;
        $livre->editeur_id = $request->editeur_id;
        $livre->auteur_id = $request->auteur_id;
        $livre->isbn = $request->isbn;
        $livre->nom = $request->nom;
        $livre->etat = $request->etat;
        $livre->langue = $request->langue;

        $livre->save();

        return redirect()->route('livre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
