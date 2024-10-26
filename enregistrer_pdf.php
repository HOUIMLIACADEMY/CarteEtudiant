<?php
session_start();
require('fpdf/fpdf.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $id = $_POST['id'];
    $level = $_POST['level'];
    $specialty = $_POST['specialty'];
    $nationality = $_POST['nationality'];

    // Nom du fichier PDF basé sur le nom de l'étudiant
    $filename = "pdfs/" . strtoupper($name) . ".pdf";

    // Création du PDF
    $pdf = new FPDF('L', 'mm', array(210, 120));
    $pdf->AddPage();
    
    // Couleur d'arrière-plan
    $pdf->SetFillColor(240, 240, 240);
    $pdf->Rect(0, 0, 210, 120, 'F');

    // Logo et Drapeau
    $pdf->Image('images/logo.png', 10, 10, 30);
    $pdf->Image('images/flag_tunisia.png', 185, 10, 15);
    
    // Titre principal
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->SetXY(70, 15);
    $pdf->Cell(90, 8, 'INSTITUT AFRICAIN DE HAUTE FORMATION', 0, 1, 'C');
    
    // "Carte étudiant" avec fond vert
    $pdf->SetFillColor(14,127,80);
    $pdf->Rect(85, 35, 50, 9, 'F');
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetTextColor(255, 255, 255);
    $pdf->SetXY(90, 35);
    $pdf->Cell(100, 8, 'CARTE ETUDIANT', 0, 1, 'L');

    // Session
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetXY(90, 42);
    $pdf->Cell(100, 8, 'Session Mars 2024/2025', 0, 1, 'L');

    // Photo de l'étudiant
    $pdf->Image($photoPath, 15, 55, 40, 30);

    // Informations étudiant
    $pdf->SetXY(75, 50);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(40, 8, 'Nom et Prenom : ', 0, 0);
    $pdf->Cell(40, 8, strtoupper($name), 0, 1);

    // Plus de détails sur l'étudiant
    $pdf->SetXY(75, 85);
    $pdf->Cell(40, 8, 'Nationalite : ', 0, 0);
    $pdf->Cell(40, 8, strtoupper($nationality), 0, 1);

    // Deuxième page pour verso
    $pdf->AddPage();
    $pdf->Image('images/verso.png', 0, 0, 210, 120);

    // Sauvegarde du PDF
    $pdf->Output('F', $filename);
    echo "Inscription réussie. Le PDF a été enregistré.";
}
?>
