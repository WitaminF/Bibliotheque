@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Retourner un livre</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div class="yourform">
                        <table>
                            <tr>
                                <td>Nom du client </td>
                                <td><b>{{ $livre->client->nom }}</b></td>
                            </tr>
                            <tr>
                                <td>Book Name : </td>
                                <td><b>{{ $livre->livre->nom }}</b></td>
                            </tr>
                            <tr>
                                <td>Phone : </td>
                                <td><b>{{ $livre->client->telephone }}</b></td>
                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td><b>{{ $livre->client->email }}</b></td>
                            </tr>
                            <tr>
                                <td>Issue Date : </td>
                                <td><b>{{ $livre->date_emprunt->format('d M, Y') }}</b></td>
                            </tr>
                            <tr>
                                <td>Return Date : </td>
                                <td><b>{{ $livre->date_retour->format('d M, Y') }}</b></td>
                            </tr>
                            @if ($livre->statut_emprunt == 'Y')
                                <tr>
                                    <td>Status</td>
                                    <td><b>Returned</b></td>
                                </tr>
                                <tr>
                                    <td>Returned On</td>
                                    <td><b>{{ $livre->jour_retour->format('d M, Y') }}</b></td>s
                                </tr>
                            @else
                                @if (date('Y-m-d') > $livre->date_retour->format('d-m-Y') && !0)
                                    <tr>
                                        <td>Nombre de jour en retard</td>
                                        <td>{{ $jour_retard }}</td>
                                    </tr>
                                @endif
                            @endif
                        </table>
                        @if ($livre->statut_emprunt == 'N')
                            <form action="{{ route('emprunt.update', $livre->id) }}" method="post" autocomplete="off">
                                @csrf
                                <input type='submit' class='btn btn-danger' name='save' value='Retourner livre'>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
