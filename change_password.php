 <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $admin_password = "TF10"; // Obecne hasło

    if ($current_password == $admin_password) {
        // Tutaj zapisujemy nowe hasło (np. do pliku lub bazy danych)
        echo "<script>alert('Hasło zostało zmienione!'); window.location.href = 'admin.html';</script>";
    } else {
        echo "<script>alert('Niepoprawne aktualne hasło!'); window.location.href = 'change_password.php';</script>";
    }
} else {
    echo "<script>window.location.href = 'admin.html';</script>";
}
?>
