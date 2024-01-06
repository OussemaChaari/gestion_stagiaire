<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=gestion_stag","root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if (isset($_GET['ids'])) {
    $ids = $_GET['ids'];
} else {
    $ids = 0;
}

$identite_stagiaire = $pdo->query("SELECT * FROM stagiaire WHERE idStagiaire=$ids");
$stagiaire = $identite_stagiaire->fetch();

$nom = strtoupper($stagiaire['nom']);
$prenom = strtoupper($stagiaire['prenom']);

require('fpdf.php');

$pdf = new FPDF('P', 'mm', 'A5');
$pdf->AddPage();


$pdf->Ln(18);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'ATTESTATION DE SCOLARITE', 'TB', 1, 'C');

$pdf->Ln(5);

$pdf->SetFont('Arial', '', 10);
$h = 7;
$retrait = "      ";

$pdf->Write($h, "Je soussigné, Directeur de l'établissement Oussema School Certifie que : \n");

$pdf->Write($h, $retrait . "L'élève : ");
$pdf->SetFont('', 'BIU');
$pdf->Write($h, $nom . " " . $prenom . "\n");
$pdf->SetFont('', '');


$pdf->Output('', '', true);
?>