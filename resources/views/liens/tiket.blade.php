<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation de Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6a0dad; /* Violet */
            color: yellow; /* Jaune */
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 600px;
            background: #4b0082; /* Violet foncé */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: yellow;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: yellow;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #6a0dad;
            color: yellow;
        }
        .btn-submit {
            background-color: yellow;
            color: #6a0dad;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
        }
        .btn-submit:hover {
            background-color: #fce303; /* Jaune plus clair */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulaire de Réservation de Ticket</h1>
        <form method="POST" action="{{ route('tiket_action') }}">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" value="{{ Auth::user()->nom }}" name="nom" id="nom" placeholder="Entrez votre nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" value="{{ Auth::user()->prenom }}" name="prenom" id="prenom" placeholder="Entrez votre prénom" required>
            </div>
            <div class="form-group">
                <label for="sexe">Sexe :</label>
                <select name="sexe" id="sexe" required>
                    <option value="">--Sélectionnez--</option>
                    <option value="Homme">Homme</option>
                    <option value="Femme">Femme</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="telephone">Numéro de téléphone :</label>
                <input type="tel" value="{{ Auth::user()->telephone }}" name="telephone" id="telephone" placeholder="Entrez votre numéro" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination :</label>
                <select name="destination" id="destination" required>
                    <option value="">--Sélectionnez une destination--</option>
                    <option value="Ouagadougou">Ouagadougou</option>
                    <option value="Bobo-Dioulasso">Bobo-Dioulasso</option>
                    <option value="Banfora">Banfora</option>
                    <option value="Ouahigouya">Ouahigouya</option>
                    <option value="Dédougou">Dédougou</option>
                    <option value="Boromo">Boromo</option>
                    <option value="Kombissiri">Kombissiri</option>
                    <option value="Kaya">Kaya</option>
                    <option value="Fada N'Gourma">Fada N'Gourma</option>
                    <option value="Tenkodogo">Tenkodogo</option>
                    <option value="Ziniaré">Ziniaré</option>
                    <option value="Manga">Manga</option>
                </select>
            </div>
            <div class="form-group">
                <label for="heure">Heure de départ :</label>
                <select name="heure" id="heure" required>
                    <option value="">--Sélectionnez une heure--</option>
                    <option value="6H">6H</option>
                    <option value="8H">8H</option>
                    <option value="10H">10H</option>
                    <option value="12H">12H</option>
                    <option value="14H">14H</option>
                    <option value="16H">16H</option>
                    <option value="18H">18H</option>
                    <option value="20H">20H</option>
                    <option value="22H">22H</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tickets">Nombre de tickets :</label>
                <input type="number" name="tickets" id="tickets" min="1" max="60" placeholder="Entrez le nombre de tickets" required>
            </div>
            <div class="form-group">
                <label for="date">Date de départ :</label>
                <input type="date" name="date" id="date" required>
            </div>
            <button type="submit" class="btn-submit">Réserver</button>
        </form>
    </div>
    <script>
        // JavaScript pour configurer la date minimale et par défaut
        document.addEventListener('DOMContentLoaded', function () {
            const today = new Date();
            const year2025 = new Date(today.getFullYear() < 2025 ? 2025 : today.getFullYear(), today.getMonth(), today.getDate());
            const formattedDate = year2025.toISOString().split('T')[0];
            const dateInput = document.getElementById('date');
            dateInput.min = formattedDate;
            dateInput.value = formattedDate;
        });
    </script>
</body>
</html>
