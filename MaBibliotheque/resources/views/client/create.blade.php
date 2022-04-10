@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Créer auteur</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('client') }}">Retour</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('client.store') }}" method="post" autocomplete="off">
                        @csrf

                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" class="form-control" placeholder="Prénom du client" name="prenom" value="{{ old('prenom') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" placeholder="Nom du client" name="nom" value="{{ old('nom') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email du client" name="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" class="form-control" placeholder="Adresse du client" name="adresse" value="{{ old('adresse') }}" required>
                        </div>

                        <div class="form-group">
                            <label>NPA</label>
                            <input type="number" class="form-control" placeholder="NPA du client" name="npa" value="{{ old('npa') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" class="form-control" placeholder="Ville du client" name="ville" value="{{ old('ville') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Date de naissance</label>
                            <input type="date" class="form-control" placeholder="Date de naissance du client" name="date_naissance" value="{{ old('date_naissance') }}" required>
                        </div>

                        <label>Genre</label>
                        <select name="genre" class="form-control">
                            <option value="homme" selected>Homme</option>
                            <option value="femme">Femme</option>
                        </select>

                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="tel" class="form-control" placeholder="Téléphone du client" name="telephone" value="{{ old('telephone') }}" required>
                        </div>

                        <input type="submit" name="save" class="btn btn-danger" value="save" required>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
