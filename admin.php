<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Datos de acceso
    if ($usuario == 'admin' && $clave == '1234') {
        $_SESSION['admin'] = true;
        header("Location: panel.php");
        exit();
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>
<form method="POST">
    <h2>Acceso Administrador</h2>
    <input type="text" name="usuario" placeholder="Usuario" required><br><br>
    <input type="password" name="clave" placeholder="Contraseña" required><br><br>
    <input type="submit" value="Entrar">
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</form>

