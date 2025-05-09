<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Analyse symptômes - HealthTrack360</title>
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
                <a href="#" class="menu-item active"><i class="fas fa-stethoscope"></i> Analyse symptômes</a>
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
                <div class="welcome">Bonjour Jean, <span>analyser vos symptômes</span></div>
                <div class="actions">
                    <button class="btn btn-primary"><i class="fas fa-search"></i> Analyser</button>
                    <button class="btn btn-outline"><i class="fas fa-history"></i> Historique</button>
                </div>
            </div>

            <div class="symptom-card card">
                <div class="card-header">
                    <div class="card-title">Entrez vos symptômes</div>
                </div>
                <div class="symptom-form">
                    <div class="form-group">
                        <label class="form-label">Décrivez vos symptômes</label>
                        <textarea class="form-control" placeholder="Ex: J'ai mal à la tête et des vertiges depuis 2 jours..."></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Depuis quand ?</label>
                        <select class="form-control">
                            <option>Aujourd'hui</option>
                            <option selected>Depuis 2-3 jours</option>
                            <option>Une semaine</option>
                            <option>Plus longtemps</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" style="width: 100%;">
                        <i class="fas fa-search"></i> Analyser
                    </button>
                </div>
                <div class="symptom-result">
                    <div class="result-title">Analyse préliminaire</div>
                    <div class="result-text">
                        Vos symptômes peuvent correspondre à une migraine ou tension