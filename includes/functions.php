<?php
session_start();

require_once 'db.php';

function is_logged_in() {
    return isset($_SESSION['user_id']);
}

function redirect_to_login() {
    if (!is_logged_in()) {
        header("Location: ../login.php");
        exit();
    }
}

function get_user($pdo, $user_id) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>