<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emprunt;
use App\Models\auteur;
use App\Models\livre;
use App\Models\parametre;
use App\Models\client;

class empruntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emprunts = emprunt::all();
        return view('emprunt.index', [
            'emprunts' => $emprunts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emprunt.create', [
            'clients' => client::latest()->get(),
            'livres' => livre::where('statut', 'Y')->get()
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
        $date_emprunt = date('Y-m-d');
        $date_retour = date('Y-m-d', strtotime("+".(parametre::latest()->first()->nb_jour_emprunt_max). "days"));

        $data = emprunt::create([
                'client_id' => $request->client_id,
                'livre_id' => $request->livre_id,
                'date_emprunt' => $date_emprunt,
                'date_retour' => $date_retour,
                'statut_emprunt' => 'N'
            ]);
        $data->save();
        $livre = livre::find($request->livre_id);
        $livre->statut = 'N';
        $livre->save();
        return redirect()->route('emprunt');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $livre = emprunt::find($id);
        $livre->statut_emprunt = 'Y';
        $livre->jour_retour = now();
        $livre->save();
        $livree = livre::find($livre->livre_id);
        $livree->statut= 'Y';
        $livree->save();
        return redirect()->route('emprunt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        emprunt::find($id)->delete();
        return redirect()->route('emprunt');
    }
}
