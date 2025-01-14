<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historique de la Gare Charlelegende</title>
    <style>
        /* Style global de la page */
        body {
            font-family: Arial, sans-serif;
            background-color: #2C3E50;
            color: white;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Topbar styles */
        .topbar {
            background-color: #6C3483;
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }

        .topbar a:last-child {
            margin-right: 0;
        }

        /* Navbar styles */
        nav {
            background-color: #007bff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        nav .navbar-brand h1 {
            color: white;
            font-size: 24px;
            margin: 0;
        }

        nav .navbar-nav {
            display: flex;
            gap: 15px;
        }

        nav .navbar-nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav .navbar-nav a:hover,
        nav .navbar-nav a.active {
            background-color: #0056b3;
        }

        /* Main container styles */
        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #34495E;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        h1, h2 {
            color: #F39C12;
            text-align: center;
        }

        p {
            margin-bottom: 20px;
            font-size: 1.1em;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        .list-item {
            background-color: #3B5998;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.2s ease, background-color 0.3s ease;
        }

        .list-item:hover {
            background-color: #4C70BA;
            transform: scale(1.02);
        }

        .list-item span {
            color: #F1C40F;
            font-weight: bold;
        }

        /* Footer styles */
        .footer {
            text-align: center;
            margin-top: 30px;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Topbar -->
    <div class="topbar">
        <div>
            <a href="tel:+22607035578"><i class="fas fa-phone-alt"></i> +22607035578</a>
            <a href="mailto:charleslegende@gmail.com"><i class="fas fa-envelope"></i> charleslegende@gmail.com</a>
        </div>
        <div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

    <!-- Navbar -->
    <nav>
        <div class="navbar-brand">
            <h1>Gare Charles Légende</h1>
        </div>
        <div class="navbar-nav">
            <a href="/" class="nav-item nav-link active">ACCUEIL</a>
            <a href="{{ route('historique_index') }}">HISTORIQUE</a>
            <a href="{{ route('itineraire_index') }}">ITINERAIRE ET TARIFS</a>
            <a href="{{ route('regles_index') }}">REGLES</a>
            <a href="{{ route('conexion_index') }}">RESERVATION</a>
        </div>
    </nav>

    <!-- Main container with list of routes and prices -->
    <div class="container">
        <h2>Itinéraires et Tarifs</h2>
        <ul>
            <li class="list-item">Koudougou-Ouagadougou : environ 91 km <span>Prix : 2 500 FCFA</span></li>
            <li class="list-item">Koudougou-Bobo-Dioulasso : environ 240 km <span>Prix : 7 000 FCFA</span></li>
            <li class="list-item">Koudougou-Banfora : environ 316 km <span>Prix : 9 500 FCFA</span></li>
            <li class="list-item">Koudougou-Ouahigouya : environ 166 km <span>Prix : 5 000 FCFA</span></li>
            <li class="list-item">Koudougou-Dédougou : environ 133 km <span>Prix : 4 000 FCFA</span></li>
            <li class="list-item">Koudougou-Boromo : environ 83 km <span>Prix : 2 000 FCFA</span></li>
            <li class="list-item">Koudougou-Kombissiri : environ 114 km <span>Prix : 3 500 FCFA</span></li>
            <li class="list-item">Koudougou-Kaya : environ 180 km <span>Prix : 5 500 FCFA</span></li>
            <li class="list-item">Koudougou-Fada N'Gourma : environ 300 km <span>Prix : 9 000 FCFA</span></li>
            <li class="list-item">Koudougou-Tenkodogo : environ 200 km <span>Prix : 6 000 FCFA</span></li>
            <li class="list-item">Koudougou-Ziniaré : environ 120 km <span>Prix : 3 800 FCFA</span></li>
            <li class="list-item">Koudougou-Manga : environ 150 km <span>Prix : 4 800 FCFA</span></li>
        </ul>
    </div>
</body>
</html>
