@extends('layouts.app')
@section('content')
    @if (session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
    @endif
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Emprunts</h2>
                </div>
                <div class="offset-md-6 col-md-3">
                    <a class="add-new" href="{{ route('emprunt.create') }}">Nouvel emprunt</a>
                </div>
            </div>
            <div class="row" id="display-table">
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
                                        <span class='badge badge-success'>Retourné</span>
                                    @else
                                        <span class='badge badge-danger'>Emprunté</span>
                                    @endif
                                </td>
                                <td class="edit">
                                    <a href="{{ route('emprunt.edit', $emprunt->id) }}" class="btn btn-success">Retour</a>
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
