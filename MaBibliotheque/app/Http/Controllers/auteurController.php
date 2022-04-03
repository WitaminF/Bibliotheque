<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\auteur;


class auteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auteurs = auteur::all();
        return view('auteur.index', ['auteurs' => $auteurs] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auteur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required'],
            'prenom' => ['required']
        ]);

        $input = $request->all();
        //auteur = model, pas oublier de rajouter use App\Models\auteur;
        auteur::create($input);

        return redirect('auteur');
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
     * @param  auteur  $auteur
     * @return \Illuminate\Http\Response
     */
    public function edit(auteur $auteur)
    {
        return view('auteur.edit', [
            'auteur' => $auteur
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  auteur $auteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $auteur = auteur::findOrFail($id);

        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        $input = $request->all();

        $auteur->fill($input)->save();

        return redirect()->route('auteur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auteur::findorfail($id)->delete();
        return redirect()->route('auteur');
    }
}
