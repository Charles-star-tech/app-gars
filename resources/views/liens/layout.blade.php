<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Ajouter ici vos liens CSS communs -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar commun -->
    <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-6 text-blue"><i class="fas fa-car-alt me-3"></i>Bienvenue à la Gare Routière Charles Légende</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">ACCUEIL</a>
                        <a href="{{ route('historique_index') }}" class="nav-item nav-link">HISTORIQUE</a>
                        <a href="{{ route('itineraire_index') }}" class="nav-item nav-link">ITINERAIRE</a>
                        <a href="{{ route('regles_index') }}" class="nav-item nav-link">REGLES</a>
                        <a href="{{ route('reservation_index') }}" class="nav-item nav-link">RESERVATION</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Contenu spécifique aux pages -->
    <main>
        @yield('content')
    </main>

    <!-- Ajouter ici vos scripts communs -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
