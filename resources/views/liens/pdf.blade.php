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
            background-color: #6a0dad; /* Violet */
            color: #ffffff; /* Blanc */
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            color: #ffd700; /* Jaune */
        }
        .details p {
            margin: 5px 0;
        }
        .container {
            background-color: #4b0082; /* Violet foncé */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        a.btn-download {
            display: inline-block;
            background-color: #ffd700; /* Jaune */
            color: #6a0dad; /* Violet clair */
            padding: 10px 20px;
            border-radius: 50%;
            font-weight: bold;
            text-decoration: none;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }
        a.btn-download:hover {
            background-color: #ffeb3b; /* Jaune plus clair */
        }
        footer {
            margin-top: 20px;
            text-align: center;
            color: #ffffff; /* Blanc */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Réservation de Ticket</h1>
            <a href="" class="navbar-brand p-0">
                <h1 class="display-6 text-blue"><i class="fas fa-car-alt me-3"></i>Bienvenu à la Gare Routière Charles Légende</h1>
            </a>
            <p>Merci pour votre réservation !</p>
        </div>
        <a href="{{ route('telecharger.ticket', ['ticket_id' => $ticket->id]) }}" class="btn-download">Télécharger le PDF</a>
        <footer>
            <p>Présentez ce ticket à la gare avant votre départ.</p>
        </footer>
    </div>
</body>
</html>
