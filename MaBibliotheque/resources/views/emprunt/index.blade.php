@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">All Book Issue</h2>
                </div>
                <div class="offset-md-6 col-md-3">
                    <a class="add-new" href="{{ route('emprunt.create') }}">Add Book Issue</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="content-table">
                        <thead>
                        <th>No</th>
                        <th>Nom client</th>
                        <th>Titre livre</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Jour emprunt</th>
                        <th>Date de retour</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                        @forelse ($emprunts as $emprunt)
                            <tr style='@if (date('Y-m-d') > $emprunt->date_retour->format('d-m-Y') && $emprunt->statut_emprunt == 'N') ) background:rgba(255,0,0,0.2) @endif'>
                                <td>{{ $emprunt->id }}</td>
                                <td>{{ $emprunt->client->nom }}</td>
                                <td>{{ $emprunt->livre->nom }}</td>
                                <td>{{ $emprunt->client->telephone }}</td>
                                <td>{{ $emprunt->client->email }}</td>
                                <td>{{ $emprunt->date_emprunt->format('d M, Y') }}</td>
                                <td>{{ $emprunt->date_retour->format('d M, Y') }}</td>
                                <td>
                                    @if ($emprunt->statut_emprunt == 'Y')
                                        <span class='badge badge-success'>Returned</span>
                                    @else
                                        <span class='badge badge-danger'>Issued</span>
                                    @endif
                                </td>
                                <td class="edit">
                                    <a href="{{ route('emprunt.edit', $emprunt->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td class="delete">
                                    <form action="{{ route('emprunt.destroy', $emprunt) }}" method="post"
                                          class="form-hidden">
                                        <button class="btn btn-danger">Delete</button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">Pas d'emprunts en cours</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
