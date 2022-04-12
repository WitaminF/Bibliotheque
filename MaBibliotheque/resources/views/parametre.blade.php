@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Pramètres</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('parametre') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Nombre de jour d'emprunt max</label>
                            <input type="number" class="form-control" name="nb_jour_emprunt_max" value="{{ $data->nb_jour_emprunt_max }}"
                                   required>
                        </div>
                        <div class="form-group">
                            <label>Nombre d'emprunt max</label>
                            <input type="number" class="form-control" name="nb_emprunt_max" value="{{ $data->nb_emprunt_max }}" required>
                        </div>
                        <input type="submit" class="btn btn-danger" value="Sauvegarder" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
