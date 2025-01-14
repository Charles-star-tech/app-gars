<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.5;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Réservation de Ticket</h1>
        <p>Merci pour votre réservation !</p>
    </div>
    <div class="details">
        <p><strong>Nom :</strong> {{ $nom }}</p>
        <p><strong>Prénom :</strong> {{ $prenom }}</p>
        <p><strong>Destination :</strong> {{ $destination }}</p>
        <p><strong>Heure :</strong> {{ $heure }}</p>
        <p><strong>Nombre de tickets :</strong> {{ $nombre_tickets }}</p>
    </div>
    <footer>
        <p>Présentez ce ticket à la gare avant votre départ.</p>
    </footer>
</body>
</html>
