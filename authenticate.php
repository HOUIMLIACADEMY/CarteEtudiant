<?php
session_start();

// Identifiants d'authentification
$valid_email = "secretairegeneral.iahf@gmail.com";
$valid_password = "root";

// Vérifie les informations de connexion
if ($_POST['email'] === $valid_email && $_POST['password'] === $valid_password) {
    $_SESSION['authenticated'] = true;
    header("Location: dashboard.php");
    exit();
} else {
    echo "Identifiants incorrects. <a href='login.php'>Réessayer</a>";
}
?>
