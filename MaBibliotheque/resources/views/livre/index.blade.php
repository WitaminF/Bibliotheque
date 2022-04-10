@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Livres</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('livre.create') }}">Ajouter</a>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="message"></div>
                <table class="content-table">
                    <thead>
                    <th>No</th>
                    <th>Categorie</th>
                    <th>Editeur</th>
                    <th>Auteur</th>
                    <th>ISBN</th>
                    <th>Nom</th>
                    <th>Etat</th>
                    <th>Langue</th>
                    <th>Statut</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    </thead>
                    @forelse ($livres as $livre)
                        <tr>
                            <td>{{ $livre->id }}</td>
                            <td>{{ $livre->categorie->nom }}</td>
                            <td>{{ $livre->editeur->nom }}</td>
                            <td>{{ $livre->auteur->nom }} {{$livre->auteur->prenom}}</td>
                            <td>{{ $livre->isbn }}</td>
                            <td>{{ $livre->nom }}</td>
                            <td>{{ $livre->etat }}</td>
                            <td>{{ $livre->langue }}</td>
                            <td>
                                @if ($livre->statut == 'Y')
                                    <span class='badge badge-success'>Disponnible</span>
                                @else
                                    <span class='badge badge-danger'>Emprunté</span>
                                @endif
                            </td>
                            <td class="edit">
                                <a href="{{ route('livre.edit', $livre) }}" class="btn btn-success">Edit</a>
                            </td>


                            <td class="delete">
                                <form action="{{ route('livre.destroy', $livre->id) }}" method="post"
                                      class="form-hidden">
                                    <button class="btn btn-danger supprimer-livre">Delete</button>
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="12">Pas de livres trouvés</td>
                        </tr>
                        @endforelse
                        </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection

