<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Indicateurs santé - HealthTrack360</title>
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
                <a href="#" class="menu-item active"><i class="fas fa-chart-line"></i> Indicateurs santé</a>
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
                <div class="welcome">Bonjour Jean, <span>vos indicateurs santé</span></div>
                <div class="actions">
                    <button class="btn btn-primary"><i class="fas fa-chart-line"></i> Ajouter mesure</button>
                    <button class="btn btn-outline"><i class="fas fa-download"></i> Exporter PDF</button>
                </div>
            </div>

            <div class="dashboard-grid">
                <div class="card stats-card">
                    <div class="card-header">
                        <div class="card-title">Poids</div>
                        <div class="card-icon icon-blue"><i class="fas fa-weight"></i></div>
                    </div>
                    <div class="stats-value">78.5 kg</div>
                    <div class="stats-label">+0.5 kg cette semaine</div>
                </div>
                <div class="card stats-card">
                    <div class="card-header">
                        <div class="card-title">Tension</div>
                        <div class="card-icon icon-green"><i class="fas fa-heart"></i></div>
                    </div>
                    <div class="stats-value">120/80</div>
                    <div class="stats-label">Normale</div>
                </div>
                <div class="card chart-card">
                    <div class="card-header">
                        <div class="card-title">Évolution des indicateurs</div>
                        <select class="form-control" style="width: 120px;">
                            <option>1 semaine</option>
                            <option selected>1 mois</option>
                            <option>3 mois</option>
                            <option>1 an</option>
                        </select>
                    </div>
                    <div class="chart-container">
                        <img src="/api/placeholder/600/300" alt="Graphique d'évolution des indicateurs de santé" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-color color-blue"></div>
                            <span>Poids (kg)</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color color-green"></div>
                            <span>Tension (systolique)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>