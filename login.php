<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <style>
        /* Style de la page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        /* Conteneur principal pour l'en-tête et le formulaire */
        .main-container {
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        /* En-tête */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 150px; /* Taille ajustable pour le logo */
            margin-bottom: 10px;
        }

        .header h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }

        /* Conteneur du formulaire de connexion */
        .form-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 400px;
            margin: auto;
        }

        /* Style du formulaire */
        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            font-weight: bold;
            margin: 15px 0 5px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #0a7d8c; /* Couleur du bouton */
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #095d6c; /* Couleur du bouton au survol */
        }
    </style>
</head>
<body>

    <div class="main-container">
        <!-- En-tête avec le logo -->
        <div class="header">
            <img src="images/logo.png" alt="Logo IAHF">
            <h1>Institut Africain de Haute Formation</h1>
        </div>

        <!-- Conteneur du formulaire de connexion centré -->
        <div class="form-container">
            <h2>Connexion</h2>
            <form action="dashboard.php" method="post">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>

</body>
</html>
