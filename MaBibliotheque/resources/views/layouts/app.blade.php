<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ma Bibliotheque Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <h1 class="text-center">MaBibliotheque</h1>
    <nav class="navbar navbar-light bg-primary justify-content-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Livres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-dark" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-black-50 font-weight-bold" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Disabled</a>
            </li>
        </ul>
    </nav>
</header>
<h1>test css</h1>

@yield("content")


    <!--footer-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>

