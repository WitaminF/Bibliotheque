@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Add Book Issue</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('emprunt') }}">All Issue List</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('emprunt.create') }}" method="post"
                          autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Student Name</label>
                            <select class="form-control" name="client_id" required>
                                <option value="">Select Name</option>
                                @foreach ($clients as $client)
                                    <option value='{{ $client->id }}'>{{ $client->nom }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Book Name</label>
                            <select class="form-control" name="livre_id" required>
                                <option value="">Select Name</option>
                                @foreach ($livres as $livre)
                                    <option value='{{ $livre->id }}'>{{ $livre->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="save">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
