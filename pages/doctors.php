<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes médecins - HealthTrack360</title>
    <style>
        <!-- Coller ici tout le style -->
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css ">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <div class="logo-icon"><i class="fas fa-heartbeat"></i></div>
                <div class="logo-text">Health<span>Track360</span></div>
            </div>
            <div class="menu">
                <a href="index.html" class="menu-item"><i class="fas fa-home"></i> Tableau de bord</a>
                <a href="appointments.html" class="menu-item"><i class="fas fa-calendar-alt"></i> Rendez-vous</a>
                <a href="health-indicators.html" class="menu-item"><i class="fas fa-chart-line"></i> Indicateurs santé</a>
                <a href="journal.html" class="menu-item"><i class="fas fa-book-medical"></i> Journal médical</a>
                <a href="documents.html" class="menu-item"><i class="fas fa-file-medical"></i> Documents</a>
                <a href="symptoms.html" class="menu-item"><i class="fas fa-stethoscope"></i> Analyse symptômes</a>
                <a href="#" class="menu-item active"><i class="fas fa-user-md"></i> Mes médecins</a>
            </div>
            <div class="user-info">
                <div class="user-avatar">JD</div>
                <div class="user-details">
                    <div class="user-name">Jean Dupont</div>
                    <div class="user-role">Patient</div>
                </div>
                <div class="logout-btn"><i class="fas fa-sign-out-alt"></i></div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <div class="welcome">Bonjour Jean, <span>vos médecins référents</span></div>
                <div class="actions">
                    <button class="btn btn-primary"><i class="fas fa-user-md"></i> Ajouter médecin</button>
                    <button class="btn btn-outline"><i class="fas fa-address-book"></i> Carnet de contact</button>
                </div>
            </div>

            <h2>Liste de vos médecins</h2>
            <p>Vous pouvez gérer ici vos médecins, spécialistes, hôpitaux et contacts médicaux.</p>
        </div>
    </div>
</body>
</html>