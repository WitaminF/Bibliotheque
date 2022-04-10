@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Créer livre</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('livre') }}">Retour</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('livre.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="categorie_id" required>
                                <option value="">Selectionner une catégorie</option>
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="editeur_id" required>
                                <option value="">Selectionner un editeur</option>
                                @foreach ($editeurs as $editeur)
                                    <option value="{{ $editeur->id }}">{{ $editeur->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="auteur_id" required>
                                <option value="">Selectionner un auteur</option>
                                @foreach ($auteurs as $auteur)
                                    <option value="{{ $auteur->id }}">{{ $auteur->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" class="form-control" placeholder="ISBN" name="isbn" value="{{ old('isbn') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Nom livre</label>
                            <input type="text" class="form-control" placeholder="Titre du livre" name="nom" value="{{ old('nom') }}" required>
                        </div>

                        <label>Etat du livre</label>
                        <select name="etat" class="form-control">
                            <option value="neuf" selected>Neuf</option>
                            <option value="use">Usé</option>
                            <option value="tres_use">Très usé</option>
                        </select>

                        <div class="form-group">
                            <label>Langue du livre</label>
                            <input type="text" class="form-control" placeholder="Langue du livre" name="langue" value="{{ old('langue') }}" required>
                        </div>


                        <input type="submit" name="save" class="btn btn-danger" value="save" required>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
