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
        <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="/" class="nav-item nav-link active">ACCUEIL</a>
                            <div class="nav-item">
                                <a href="{{ route('historique_index') }}" class="nav-link">HISTORIQUE</a>
                            </div>
                             <div class="nav-item">
                                <a href="{{ route('itineraire_index') }}" class="nav-link">ITINERAIRE ET TARIFS</a>
                            </div>
                            <div class="nav-item">
                                <a href="{{ route('regles_index') }}" class="nav-link">REGLES</a>
                            </div>
                            <div class="nav-item">
                                <a href="{{ route('conexion_index') }}" class="nav-link">RESERVATION</a>
                            </div>
                        </div>
                    </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <h1>Historique de la Gare Charlelegende</h1>
        
        <div class="section">
            <h2>Introduction</h2>
            <p>La <strong>Gare Charlelegende</strong> est un projet emblématique lancé dans la ville de <strong>Koudougou</strong>, au Burkina Faso, par <strong>Charles DABIRE</strong> et <strong>Julien Windehida BOUGMA</strong>. L'initiative est née de la volonté de ces deux visionnaires de contribuer au développement du secteur des transports dans la région et de relier efficacement Koudougou aux autres grandes villes du pays.</p>
        </div>

        <div class="section">
            <h2>Les Initiateurs du Projet</h2>
            <p><strong>Charles DABIRE</strong>, un ingénieur passionné par l'amélioration des infrastructures en Afrique de l'Ouest, et <strong>Julien Windehida BOUGMA</strong>, un entrepreneur dynamique, ont uni leurs forces pour créer une gare moderne, capable de répondre aux besoins croissants de la population locale et des voyageurs de passage.</p>
        </div>

        <div class="section">
            <h2>Le Début du Projet</h2>
            <p>Le projet a commencé en <strong>2010</strong> après plusieurs années de planification et de recherches. Les fondateurs ont mis l'accent sur la construction d'un espace à la fois fonctionnel et respectueux de l'environnement. La gare a été conçue pour accueillir une grande variété de services, y compris des lignes de bus et de trains, et est rapidement devenue un centre névralgique pour le transport régional.</p>
        </div>

        <div class="section">
            <h2>L'Ouverture de la Gare</h2>
            <p>La gare a ouvert ses portes en <strong>2015</strong>, et dès lors, elle a contribué à la modernisation de Koudougou, améliorant la connectivité et facilitant le commerce et les échanges entre les différentes régions du pays. Elle est devenue un symbole de progrès et de collaboration pour la communauté locale, accueillant chaque année des milliers de passagers.</p>
        </div>

        <div class="section">
            <h2>Impact de la Gare</h2>
            <p>Aujourd'hui, la Gare Charlelegende reste l'un des projets les plus importants jamais réalisés dans la région, un modèle de réussite pour l'Afrique de l'Ouest en matière d'infrastructure de transport.</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Gare Charles Légende. Tous droits réservés.
    </div>
</body>
</html>
