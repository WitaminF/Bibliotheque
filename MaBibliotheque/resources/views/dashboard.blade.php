@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Dashboard</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $auteurs }}</p>
                            <h5 class="card-title mb-3">Auteurs</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $editeurs }}</p>
                            <h5 class="card-title mb-3">Editeurs</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $categories }}</p>
                            <h5 class="card-title mb-3">Categories</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $livres }}</p>
                            <h5 class="card-title mb-3">Livres</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $clients }}</p>
                            <h5 class="card-title mb-3">Clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $emprunts }}</p>
                            <h5 class="card-title mb-3">Emprunts</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
