@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Catégories</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('categorie.create') }}">Créer catégorie</a>
                </div>
            </div>
            <div class="row" id="display-table">
                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                        <th>No</th>
                        <th>Nom</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        </thead>
                        <tbody>
                        @forelse ($categories as $categorie)
                            <tr>
                                <td>{{ $categorie->id }}</td>
                                <td>{{ $categorie->nom }}</td>
                                <td class="edit">
                                    <a href="{{ route('categorie.edit', $categorie) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td class="delete">
                                    <form action="{{ route('categorie.destroy', $categorie->id) }}" method="post"
                                          class="form-hidden">
                                        <button class="btn btn-danger supprimer-categorie">Delete</button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">Pas de catégories trouvées</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
