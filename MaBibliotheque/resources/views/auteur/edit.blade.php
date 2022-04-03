@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Modifier auteur</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('auteur.update', $auteur->id) }}" method="post"
                          autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Nom de l'auteur</label>
                            <input type="text" class="form-control" name="nom" value="{{ $auteur->nom }}" required>
                            <label>Prénom de l'auteur</label>
                            <input type="text" class="form-control" name="prenom" value="{{ $auteur->prenom }}" required>
                        </div>
                        <input type="submit" name="submit" class="btn btn-danger" value="Update" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
