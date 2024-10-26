<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit();
}

// Affichage des fichiers PDF
$directory = 'pdfs/';
$pdf_files = glob($directory . "*.pdf");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - IAHF</title>
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

        /* Conteneur principal pour l'en-tête et le contenu du tableau de bord */
        .main-container {
            width: 100%;
            max-width: 800px;
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

        /* Conteneur du tableau de bord */
        .dashboard-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 700px;
            margin: auto;
        }

        /* Style du tableau de bord */
        h2 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
        }

        a.pdf-link {
            color: #0a7d8c;
            text-decoration: none;
            font-weight: bold;
        }

        a.pdf-link:hover {
            color: #095d6c;
        }

        /* Lien pour supprimer */
        a.delete-link {
            color: #d9534f;
            margin-left: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        a.delete-link:hover {
            color: #c9302c;
        }

        /* Bouton de déconnexion */
        .logout-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #0a7d8c;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        .logout-button:hover {
            background-color: #095d6c;
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

        <!-- Conteneur du tableau de bord centré -->
        <div class="dashboard-container">
            <h2>Liste des PDF des étudiants</h2>
            <ul>
                <?php foreach ($pdf_files as $file): ?>
                    <li>
                        <a href="<?php echo $file; ?>" target="_blank" class="pdf-link"><?php echo basename($file); ?></a>
                        <!-- Lien pour supprimer le fichier PDF -->
                        <a href="delete_pdf.php?file=<?php echo urlencode(basename($file)); ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce fichier ?');" class="delete-link">Supprimer</a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- Bouton de déconnexion -->
            <form action="logout.php" method="post">
                <button type="submit" class="logout-button">Se Déconnecter</button>
            </form>
        </div>
    </div>

</body>
</html>
