<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = client::all();
        return view('client.index', ['clients' => $clients] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
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
            'prenom' => ['required'],
            'email' => ['required'],
            'adresse' => ['required'],
            'npa' => ['required'],
            'ville' => ['required'],
            'date_naissance' => ['required'],
            'genre' => ['required'],
            'telephone' => ['required'],
        ]);

        $input = $request->all();
        client::create($input);

        return redirect('client');
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
     * @param  client $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        return view('client.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = client::findOrFail($id);

        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'adresse' => 'required',
            'npa' => 'required',
            'ville' => 'required',
            'date_naissance' => 'required',
            'genre' => 'required',
            'telephone' => 'required'
        ]);

        $input = $request->all();

        $client->fill($input)->save();

        return redirect()->route('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        client::findorfail($id)->delete();
        return redirect()->route('client');
    }
}
