<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\editeur;

class editeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editeurs = editeurController::all();
        return view('editeur.index', ['editeurs' => $editeurs] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editeur.create');
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
            'nom' => ['required']
        ]);

        $input = $request->all();
        //auteur = model, pas oublier de rajouter use App\Models\auteur;
        editeur::create($input);

        return redirect('editeur');
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
     * @param  editeur $editeur
     * @return \Illuminate\Http\Response
     */
    public function edit(editeur $editeur)
    {
        return view('editeur.edit', [
            'editeur' => $editeur
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  editeur $editeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editeur = editeur::findOrFail($id);

        $this->validate($request, [
            'nom' => 'required'
        ]);

        $input = $request->all();

        $editeur->fill($input)->save();

        return redirect()->route('editeur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        editeur::findorfail($id)->delete();
        return redirect()->route('editeur');
    }
}
