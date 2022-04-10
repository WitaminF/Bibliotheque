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
                    <form class="yourform" action="{{ route('livre.update', $livre->id) }}" method="post"
                          autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Catégorie</label>
                            <select class="form-control" name="categorie_id">
                                <option value="">Selectionner une catégorie</option>
                                @foreach ($categories as $categorie)
                                    @if ($categorie->id == $livre->categorie_id)
                                        <option value="{{ $categorie->id }}" selected>{{ $categorie->nom }}</option>
                                    @else
                                        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Editeur</label>
                            <select class="form-control" name="editeur_id">
                                <option value="">Selectionner un éditeur</option>
                                @foreach ($editeurs as $editeur)
                                    @if ($editeur->id == $livre->editeur_id)
                                        <option value="{{ $editeur->id }}" selected>{{ $editeur->nom }}</option>
                                    @else
                                        <option value="{{ $editeur->id }}">{{ $editeur->nom }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Auteur</label>
                            <select class="form-control" name="auteur_id">
                                <option value="">Seléctionner un auteur</option>
                                @foreach ($auteurs as $auteur)
                                    @if ($auteur->id == $livre->auteur_id)
                                        <option value="{{ $auteur->id }}" selected>{{ $auteur->nom }}</option>
                                    @else
                                        <option value="{{ $auteur->id }}">{{ $auteur->nom }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" class="form-control" name="isbn" value="{{ $livre->isbn }}" required>
                        </div>

                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name="nom" value="{{ $livre->nom }}" required>
                        </div>

                        <div class="form-group">
                            <label>Etat</label>
                            <input type="text" class="form-control" name="etat" value="{{ $livre->etat }}" required>
                        </div>

                        <div class="form-group">
                            <label>Langue</label>
                            <input type="text" class="form-control" name="langue" value="{{ $livre->langue }}" required>
                        </div>

                        <input type="submit" name="save" class="btn btn-danger" value="Update" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
