<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Gare Routière</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(101, 38, 136);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 600px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>      
    <div class="container">
        <h2>Créer un compte</h2>
        <form method="POST" action="{{ route('reservation_inscription') }}">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom(s)</label>
                <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" required>
            </div>
            <div class="form-group">
                <label for="telephone">Numéro de téléphone</label>
                <input type="tel" name="telephone" id="telephone" placeholder="Entrez votre numéro de téléphone" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Entrez votre email" required>
            </div>
            <div class="form-group">
                <label for="motdepasse">Mot de passe</label>
                <input type="password" name="password" id="motdepasse" placeholder="Entrez un mot de passe" required>
            </div>
            <div class="form-group">
                <label for="motdepasse_confirmation">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="motdepasse_confirmation" placeholder="Confirmez votre mot de passe" required>
            </div>
            <button type="submit" class="btn-submit">Créer un compte</button>
        </form>
        @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
        @endif
    </div>
</body>
</html>
