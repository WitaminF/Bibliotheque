<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma Bibliotheque Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <h1 class="pageTitle">MaBibliotheque</h1>
    <nav class="navbar navbar-light justify-content-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('livre') }} ">Livre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Editeur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auteur') }}">Auteur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Catégorie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Emprunt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Client</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Paramètre</a>
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
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>

