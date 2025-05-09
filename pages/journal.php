<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Journal médical - HealthTrack360</title>
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
                <a href="#" class="menu-item active"><i class="fas fa-book-medical"></i> Journal médical</a>
                <a href="documents.html" class="menu-item"><i class="fas fa-file-medical"></i> Documents</a>
                <a href="symptoms.html" class="menu-item"><i class="fas fa-stethoscope"></i> Analyse symptômes</a>
                <a href="doctors.html" class="menu-item"><i class="fas fa-user-md"></i> Mes médecins</a>
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
                <div class="welcome">Bonjour Jean, <span>votre journal médical</span></div>
                <div class="actions">
                    <button class="btn btn-primary journal-btn"><i class="fas fa-plus"></i> Nouvelle entrée</button>
                    <button class="btn btn-outline"><i class="fas fa-download"></i> Exporter journal</button>
                </div>
            </div>

            <div class="journal-card card">
                <div class="card-header">
                    <div class="card-title">Journal médical</div>
                    <button class="btn btn-primary journal-btn"><i class="fas fa-plus"></i> Ajouter</button>
                </div>
                <div class="journal-entry">
                    <div class="journal-date">Aujourd'hui, 08:30</div>
                    <div class="journal-text">
                        Légère fatigue ce matin, difficulté à me concentrer. Possible lien avec le mauvais sommeil de cette nuit (réveillé plusieurs fois). Maux de tête légers qui persistent depuis hier soir.
                    </div>
                    <div class="journal-actions">
                        <button class="btn btn-outline journal-btn"><i class="fas fa-pen"></i> Modifier</button>
                        <button class="btn btn-outline journal-btn"><i class="fas fa-download"></i> PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>