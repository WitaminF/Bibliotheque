<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use App\Models\emprunt;
use App\Models\auteur;
use App\Models\livre;
use App\Models\parametre;
use App\Models\client;
use Illuminate\Support\Facades\DB;

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
        //Requêtes sql:
        //Select count(client_id) from emprunts where statut_emprunt ="N" AND client_id = 1;
        $nb_emprunt_client = DB::table("emprunts")
            ->where('statut_emprunt', '=', 'N' )
            ->where('client_id', '=' , $request->client_id)
            ->count();

        $nb_emprunt_max = parametre::latest()->first()->nb_emprunt_max;


        if ($nb_emprunt_client <= $nb_emprunt_max){
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
            return redirect()->route('emprunt')->with('status', "Nouvel emprunt créé");
            }
            else {

            return redirect('/emprunt/create')->with('status', "Le client possède déjà trop d'emprunts !");
        }
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
        // calculate the total fine  (total days * fine per day)
        $livre = emprunt::where('id',$id)->get()->first();
        $premiere_date = date_create(date('Y-m-d'));
        $deuxieme_date = date_create($livre->date_retour);
        $diff = date_diff($premiere_date, $deuxieme_date);
        $nb_jour_retard = (parametre::latest()->first()->nb_jour_emprunt_max - $diff->format('%a'));
        return view('emprunt.edit', [
            'livre' => $livre,
            'jour_retard' => $nb_jour_retard,
        ]);
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
