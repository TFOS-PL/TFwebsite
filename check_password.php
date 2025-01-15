<?php
session_start();
$admin_password = "TF10"; // Ustawione hasło

if (isset($_POST['password']) && $_POST['password'] == $admin_password) {
    $_SESSION['authenticated'] = true;
    header("Location: admin.html"); // Przekierowanie na stronę administratora
    exit();
} else {
    echo "<script>alert('Błędne hasło!'); window.location.href = 'index.html';</script>";
}
?>
