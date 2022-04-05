@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Créer editeur</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('editeur') }}">Retour</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('editeur.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Nom de l'editeur</label>
                            <input type="text" class="form-control" placeholder="Nom auteur" name="nom" value="{{ old('nom') }}" required>

                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="save" required>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
