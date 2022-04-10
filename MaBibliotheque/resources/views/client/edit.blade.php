@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Modifier client</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('client.update', $client->id) }}" method="post"
                          autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" value="{{ $client->nom }}" required>
                        </div>

                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" class="form-control" name="prenom" value="{{ $client->prenom }}" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $client->email }}" required>
                        </div>

                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" class="form-control" name="adresse" value="{{ $client->adresse }}" required>
                        </div>

                        <div class="form-group">
                            <label>NPA</label>
                            <input type="number" class="form-control" name="npa" value="{{ $client->npa }}" required>
                        </div>

                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" class="form-control" name="ville" value="{{ $client->ville }}" required>
                        </div>

                        <div class="form-group">
                            <label>Date de Naissance</label>
                            <input type="date" class="form-control" name="date_naissance" value="{{ $client->date_naissance }}" required>
                        </div>

                        <div class="form-group">
                            <label>Genre</label>
                            <input type="text" class="form-control" name="genre" value="{{ $client->genre }}" required>
                        </div>

                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="tel" class="form-control" name="telephone" value="{{ $client->telephone }}" required>
                        </div>
                        <input type="submit" name="submit" class="btn btn-danger" value="Update" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
