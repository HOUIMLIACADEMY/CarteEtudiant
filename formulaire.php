<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
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
            height: 100vh;
           
        }

        /* En-tête */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 150px; /* Taille ajustable pour le logo */
        }

        /* Conteneur du formulaire */
        .form-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: left;
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

        input[type="text"], input[type="date"], input[type="file"] {
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
    
    <!-- En-tête avec le logo -->
    <div class="header">
        <img src="images/logo.png" alt="Logo IAHF">
        <h1>Institut Africain de Haute Formation</h1>
    </div>

    <!-- Conteneur du formulaire centré -->
    <div class="form-container">
        
        <h2 style="margin-top:200px;" >Formulaire d'inscription</h2>
        <form action="submit_form.php" method="post" enctype="multipart/form-data">
            <label for="name">Nom et Prénom :</label>
            <input type="text" id="name" name="name" required>

            <label for="dob">Date de Naissance :</label>
            <input type="date" id="dob" name="dob" required>

            <label for="id">Identifiant :</label>
            <input type="text" id="id" name="id" required>

            <label for="level">Niveau :</label>
            <input type="text" id="level" name="level" required>

            <label for="specialty">Spécialité :</label>
            <input type="text" id="specialty" name="specialty" required>

            <label for="nationality">Nationalité :</label>
            <input type="text" id="nationality" name="nationality" required>

            <label for="photo">Photo :</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

            <button type="submit" >Envoyer</button>
        </form>
        <br>
        <br>
        <br>
    </div>
    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
</body>
</html>
