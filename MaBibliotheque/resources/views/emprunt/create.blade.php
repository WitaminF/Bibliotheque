@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Ajouter un emprunt</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('emprunt') }}">Retour</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('emprunt.create') }}" method="post"
                          autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Nom du client</label>
                            <select class="form-control" name="client_id" required>
                                <option value="">Selectionner un client</option>
                                @foreach ($clients as $client)
                                    <option value='{{ $client->id }}'>{{ $client->nom }} {{ $client->prenom }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Titre du livre</label>
                            <select class="form-control" name="livre_id" required>
                                <option value="">Selectionner un livre</option>
                                @foreach ($livres as $livre)
                                    <option value='{{ $livre->id }}'>{{ $livre->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="Sauvegarder">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
