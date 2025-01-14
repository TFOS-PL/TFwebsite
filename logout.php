<?php
session_start();
session_destroy();  // Zniszczenie sesji
header("Location: login.html");  // Przekierowanie na stronę logowania
exit();
?>
