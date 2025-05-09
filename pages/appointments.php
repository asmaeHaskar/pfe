<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Rendez-vous - HealthTrack360</title>
    <style>
        <!-- Coller ici tout le contenu du style depuis votre index.txt -->
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
                <a href="#" class="menu-item active"><i class="fas fa-calendar-alt"></i> Rendez-vous</a>
                <a href="health-indicators.html" class="menu-item"><i class="fas fa-chart-line"></i> Indicateurs santé</a>
                <a href="journal.html" class="menu-item"><i class="fas fa-book-medical"></i> Journal médical</a>
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
                <div class="welcome">Bonjour Jean, <span>vos rendez-vous</span></div>
                <div class="actions">
                    <button class="btn btn-primary"><i class="fas fa-plus"></i> Nouveau RDV</button>
                    <button class="btn btn-outline"><i class="fas fa-calendar-alt"></i> Calendrier</button>
                </div>
            </div>

            <div class="appointments-card card">
                <div class="card-header">
                    <div class="card-title">Prochains rendez-vous</div>
                    <a href="#" style="color: var(--primary); font-size: 14px; text-decoration: none;">Voir tous</a>
                </div>
                <div class="appointment-list">
                    <div class="appointment-item">
                        <div class="appointment-date">
                            <div class="date-day">15</div>
                            <div class="date-month">Mai</div>
                        </div>
                        <div class="appointment-details">
                            <div class="appointment-title">Contrôle annuel</div>
                            <div class="appointment-doctor">Dr. Sophie Martin - Médecin généraliste</div>
                        </div>
                        <div class="appointment-time">10:30</div>
                    </div>
                    <div class="appointment-item">
                        <div class="appointment-date">
                            <div class="date-day">22</div>
                            <div class="date-month">Mai</div>
                        </div>
                        <div class="appointment-details">
                            <div class="appointment-title">Examen dentaire</div>
                            <div class="appointment-doctor">Dr. Philippe Blanc - Dentiste</div>
                        </div>
                        <div class="appointment-time">14:15</div>
                    </div>
                    <div class="appointment-item">
                        <div class="appointment-date">
                            <div class="date-day">05</div>
                            <div class="date-month">Juin</div>
                        </div>
                        <div class="appointment-details">
                            <div class="appointment-title">Analyse de sang</div>
                            <div class="appointment-doctor">Centre d'analyses médicales</div>
                        </div>
                        <div class="appointment-time">08:00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>