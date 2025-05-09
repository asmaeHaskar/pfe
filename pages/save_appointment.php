<?php
session_start();

if (!isset($_SESSION['user'])) {
    die("Erreur : vous devez être connecté.");
}

$doctor = htmlspecialchars($_POST['doctor']);
$date = htmlspecialchars($_POST['date']);
$reason = htmlspecialchars($_POST['reason']);

// Exemple : Sauvegarder dans localStorage (ou en base de données plus tard)
$appointment = [
    'doctor' => $doctor,
    'date' => $date,
    'reason' => $reason,
];

// Stockage temporaire dans une session PHP
$_SESSION['appointments'][] = $appointment;

// Redirection vers confirmation
header("Location: appointment_confirmation.php");
exit;
?>