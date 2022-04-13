@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Clients</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('client.create') }}">Créer client</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" id="display-table">
                    <table class="content-table">
                        <thead>
                        <th>No</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Date de naissance</th>
                        <th>Genre</th>
                        <th>Tél</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        </thead>
                        <tbody>
                        @forelse ($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->nom }}</td>
                                <td>{{ $client->prenom }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->date_naissance }}</td>
                                <td>{{ $client->genre }}</td>
                                <td>{{ $client->telephone }}</td>
                                <td class="edit">
                                    <a href="{{ route('client.edit', $client) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td class="delete">
                                    <form action="{{ route('client.destroy', $client->id) }}" method="post"
                                          class="form-hidden">
                                        <button class="btn btn-danger supprimer-client">Delete</button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12">Pas de clients trouvés</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
