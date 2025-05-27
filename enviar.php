<?php
$nombre = trim($_POST['nombre']) ?: "Anónimo";
$mensaje = trim($_POST['mensaje']);
$fecha = date("Y-m-d H:i:s");

$registro = "[$fecha] [$nombre]\n$mensaje\n\n";
file_put_contents("buzon.txt", $registro, FILE_APPEND);

echo "Queja enviada con éxito. <a href='index.php'>Volver</a>";
?>

