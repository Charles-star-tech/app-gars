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

        /* Centering and styling for the header section */
        header {
            text-align: center;
            color: #F39C12;
            margin-bottom: 40px;
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


  <!-- Header with centered and yellow text -->
  <header>
    <h1>Les Règles de la Gare</h1>
    <p>Veuillez respecter les règles suivantes pour assurer votre sécurité et confort.</p>
  </header>

  <div class="container">
    <section>
      <h2>1. Respect des Horaires</h2>
      <p>Les horaires des trains sont strictement définis. Assurez-vous d'arriver à la gare au moins 20 minutes avant le départ de votre train.</p>
    </section>

    <section>
      <h2>2. Comportement à Bord</h2>
      <p>Respectez le calme et la tranquillité à bord. Il est interdit de parler fort ou d'utiliser des appareils bruyants sans écouteurs.</p>
    </section>

    <section>
      <h2>3. Sécurité et Accessibilité</h2>
      <p>Suivez toujours les indications de sécurité et ne bloquez pas les passages. Les quais doivent rester dégagés pour la sécurité de tous.</p>
    </section>

    <section>
      <h2>4. Contrôle des Billets</h2>
      <p>Les contrôles peuvent être effectués à tout moment. Assurez-vous d'avoir votre billet valide avec vous pendant toute la durée du voyage.</p>
    </section>

    <section>
      <h2>5. Comportement des Voyageurs</h2>
      <p>Tout comportement inapproprié ou perturbateur pourra entraîner l'expulsion du train ou de la gare, et pourrait être passible de sanctions.</p>
    </section>

    <section>
      <h2>6. Interdictions Spécifiques</h2>
      <ul class="rule-list">
        <li class="rule-item">Fumer est interdit à l'intérieur de la gare et des trains.</li>
        <li class="rule-item">Les animaux doivent être tenus en laisse et les animaux de grande taille sont interdits sans transport adapté.</li>
        <li class="rule-item">Les bagages volumineux doivent être laissés dans les zones désignées pour éviter de bloquer les couloirs.</li>
      </ul>
    </section>
  </div>

  <footer>
    <p>&copy; 2024 Gare de Charlelegende. Tous droits réservés.</p>
  </footer>

</body>
</html>
