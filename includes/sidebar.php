<!-- includes/sidebar.php -->
<div class="sidebar">
    <div class="logo">
        <div class="logo-icon"><i class="fas fa-heartbeat"></i></div>
        <div class="logo-text">Health<span>Track360</span></div>
    </div>

    <div class="menu">
        <a href="index.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
            <i class="fas fa-home"></i> Tableau de bord
        </a>
        <a href="dashboard/appointments.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'appointments.php' ? 'active' : '' ?>">
            <i class="fas fa-calendar-alt"></i> Rendez-vous
        </a>
        <a href="dashboard/health-indicators.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'health-indicators.php' ? 'active' : '' ?>">
            <i class="fas fa-chart-line"></i> Indicateurs santé
        </a>
        <a href="dashboard/journal.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'journal.php' ? 'active' : '' ?>">
            <i class="fas fa-book-medical"></i> Journal médical
        </a>
        <a href="dashboard/documents.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'documents.php' ? 'active' : '' ?>">
            <i class="fas fa-file-medical"></i> Documents
        </a>
        <a href="dashboard/symptoms.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'symptoms.php' ? 'active' : '' ?>">
            <i class="fas fa-stethoscope"></i> Analyse symptômes
        </a>
        <a href="dashboard/doctors.php" class="menu-item <?= basename($_SERVER['PHP_SELF']) == 'doctors.php' ? 'active' : '' ?>">
            <i class="fas fa-user-md"></i> Mes médecins
        </a>
    </div>

    <div class="user-info">
        <div class="user-avatar"><?= $_SESSION['user_avatar'] ?? 'JD' ?></div>
        <div class="user-details">
            <div class="user-name"><?= $_SESSION['user_name'] ?? 'Jean Dupont' ?></div>
            <div class="user-role">Patient</div>
        </div>
        <div class="logout-btn">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </div>
    </div>
</div>