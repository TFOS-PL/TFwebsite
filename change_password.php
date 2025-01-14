<?php
session_start();
$admin_password = "TF10"; // Wartość aktualnego hasła

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];

    if ($current_password == $admin_password) {
        // Zmieniamy hasło (w tym przypadku zapisujemy je w zmiennej, ale można zapisać w pliku lub bazie danych)
        $admin_password = $new_password;
        echo "<script>alert('Hasło zostało zmienione!'); window.location.href = 'protected_page.php';</script>";
    } else {
        echo "<script>alert('Aktualne hasło jest niepoprawne!'); window.location.href = 'change_password.html';</script>";
    }
}
?>
