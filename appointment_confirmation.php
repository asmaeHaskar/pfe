<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}

// Récupère les données du rendez-vous depuis POST ou simule des données temporaires
$doctor = isset($_POST['doctor']) ? htmlspecialchars($_POST['doctor']) : 'Dr. Sophie Martin';
$date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '2025-05-15T10:30';
$reason = isset($_POST['reason']) ? htmlspecialchars($_POST['reason']) : 'Contrôle annuel';

// Formate la date pour une meilleure lisibilité
$dateFormatted = new DateTime($date);
$dateOnly = $dateFormatted->format('d/m/Y');
$timeOnly = $dateFormatted->format('H:i');

// Sauvegarde le RDV dans la session (ou dans une base de données)
$_SESSION['appointments'][] = [
    'doctor' => $doctor,
    'date' => $date,
    'reason' => $reason,
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Confirmation RDV - HealthTrack360</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css "/>
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .confirmation-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 450px;
            width: 100%;
        }
        .confirmation-box i {
            font-size: 50px;
            color: #2c7be5;
            margin-bottom: 20px;
        }
        .confirmation-box h2 {
            color: #2c7be5;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .details {
            text-align: left;
            margin: 20px 0;
        }
        .details div {
            margin: 10px 0;
            font-size: 16px;
        }
        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            background-color: #2c7be5;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            margin-right: 10px;
        }
        .btn:hover {
            background-color: #1a68d1;
        }
        .btn-outline {
            background-color: transparent;
            border: 2px solid #2c7be5;
            color: #2c7be5;
        }
        .btn-outline:hover {
            background-color: #2c7be5;
            color: white;
        }
    </style>
</head>
<body>

<div class="confirmation-box">
    <!-- Icône de confirmation -->
    <i class="fas fa-calendar-check"></i>

    <!-- Message de confirmation -->
    <h2>Rendez-vous confirmé !</h2>

    <!-- Détails du rendez-vous -->
    <div class="details">
        <div><strong>Médecin :</strong> <?= $doctor ?></div>
        <div><strong>Date :</strong> <?= $dateOnly ?></div>
        <div><strong>Heure :</strong> <?= $timeOnly ?></div>
        <div><strong>Motif :</strong> <?= $reason ?></div>
    </div>

    <!-- Boutons d'action -->
    <a href="dashboard.php" class="btn"><i class="fas fa-arrow-left"></i> Retour au tableau de bord</a>
    <a href="appointments.html" class="btn btn-outline"><i class="fas fa-calendar-alt"></i> Voir mes RDVs</a>
</div>

</body>
</html>