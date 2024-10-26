<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit();
}

// Vérifie si le nom du fichier est spécifié dans l'URL
if (isset($_GET['file'])) {
    $file = basename($_GET['file']);  // On utilise basename pour éviter la manipulation de chemin
    $filePath = 'pdfs/' . $file;

    // Vérifie si le fichier existe avant de le supprimer
    if (file_exists($filePath)) {
        unlink($filePath);  // Supprime le fichier
        echo "Le fichier $file a été supprimé avec succès.";
    } else {
        echo "Le fichier n'existe pas.";
    }
} else {
    echo "Aucun fichier spécifié.";
}

// Redirection vers le tableau de bord après la suppression
header("Location: dashboard.php");
exit();
?>
