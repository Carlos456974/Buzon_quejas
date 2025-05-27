<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}

echo "<h2>Panel de Quejas</h2>";
echo "<a href='logout.php'>Cerrar sesión</a><br><br>";

$archivo = "buzon.txt";
if (file_exists($archivo)) {
    echo "<pre>" . htmlspecialchars(file_get_contents($archivo)) . "</pre>";
} else {
    echo "Aún no hay quejas registradas.";
}
?>

