@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Auteurs</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('editeur.create') }}">Créer editeur</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                        <th>No</th>
                        <th>Nom</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        </thead>
                        <tbody>
                        @forelse ($editeurs as $editeur)
                            <tr>
                                <td>{{ $editeur->id }}</td>
                                <td>{{ $editeur->nom }}</td>
                                <td class="edit">
                                    <a href="{{ route('editeur.edit', $editeur) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td class="delete">
                                    <form action="{{ route('editeur.destroy', $editeur->id) }}" method="post"
                                          class="form-hidden">
                                        <button class="btn btn-danger supprimer-editeur">Delete</button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Pas d'auteurs trouvés</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
