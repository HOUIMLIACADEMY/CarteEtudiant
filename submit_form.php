<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation d'inscription</title>
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

        /* Conteneur principal pour l'en-tête et le message */
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

        /* Conteneur du message */
        .message-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            margin: auto;
        }

        /* Style du message */
        h2 {
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
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

        <!-- Conteneur du message de confirmation -->
        <div class="message-container">
            <h2>Bravo, vous avez terminé.</h2>
            <p>Allez à l'administration pour récupérer votre carte étudiant.</p>
        </div>
    </div>

</body>
</html>
