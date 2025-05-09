<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Documents - HealthTrack360</title>
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
                <a href="#" class="menu-item active"><i class="fas fa-file-medical"></i> Documents</a>
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
                <div class="welcome">Bonjour Jean, <span>vos documents médicaux</span></div>
                <div class="actions">
                    <button class="btn btn-primary"><i class="fas fa-upload"></i> Importer document</button>
                    <button class="btn btn-outline"><i class="fas fa-search"></i> Rechercher</button>
                </div>
            </div>

            <div class="documents-card card">
                <div class="card-header">
                    <div class="card-title">Documents récents</div>
                    <button class="btn btn-primary journal-btn"><i class="fas fa-upload"></i> Importer</button>
                </div>
                <div class="doc-item">
                    <div class="doc-icon"><i class="fas fa-file-pdf"></i></div>
                    <div class="doc-details">
                        <div class="doc-title">Résultats analyse sang</div>
                        <div class="doc-info">PDF · 2.4 Mo · Ajouté le 02/05/2025</div>
                    </div>
                    <div class="doc-actions">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-download"></i></a>
                    </div>
                </div>
                <div class="doc-item">
                    <div class="doc-icon"><i class="fas fa-file-image"></i></div>
                    <div class="doc-details">
                        <div class="doc-title">Radiographie épaule</div>
                        <div class="doc-info">JPG · 3.1 Mo · Ajouté le 15/04/2025</div>
                    </div>
                    <div class="doc-actions">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>