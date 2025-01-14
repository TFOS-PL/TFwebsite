<?php
session_start();
$admin_password = "TF10"; // Wartość hasła

if (isset($_POST['password']) && $_POST['password'] == $admin_password) {
    $_SESSION['authenticated'] = true;
    header("Location: protected_page.php");
    exit();
} else {
    echo "<script>alert('Błędne hasło!'); window.location.href = 'login.html';</script>";
}
?>
