<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma Bibliotheque Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
@if (session('status'))
    <div class="modal" tabindex="-1" role="dialog" data-togle="modal" data-target="#exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ session('status') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif
<header>
    <h1 class="pageTitle">MaBibliotheque</h1>
    <nav class="navbar navbar-light justify-content-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('emprunt') }}">Emprunt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('client') }}">Client</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{route('livre')}}" >Livre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('editeur') }}">Editeur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auteur') }}">Auteur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categorie') }}">Catégorie</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('parametre') }}">Paramètre</a>
            </li>

        </ul>
    </nav>
</header>
<div class = "content">
@yield("content")
</div>
    <!--footer-->

    <div class="footer">
        <p>Florent Scheibler - Ecole des Arches - 2022</p>
    </div>
</body>
</html>

