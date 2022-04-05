<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;

class categorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categorie::all();
        return view('categorie.index', ['categories' => $categories] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.create');
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
        categorie::create($input);

        return redirect('categorie');
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
     * @param  categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie $categorie)
    {
        return view('categorie.edit', [
            'categorie' => $categorie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  categorie $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $auteur = categorie::findOrFail($id);

        $this->validate($request, [
            'nom' => 'required'
        ]);

        $input = $request->all();

        $auteur->fill($input)->save();

        return redirect()->route('categorie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categorie::findorfail($id)->delete();
        return redirect()->route('categorie');
    }
}
