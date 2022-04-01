@extends('layouts.app')
@section('content')

    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Auteur</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="#">Ajouter</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                        <th>No</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Editeur</th>
                        <th>ISBN</th>
                        <th>Langue</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
