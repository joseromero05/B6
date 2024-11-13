<?php
session_start();

// Si el usuario ya está autenticado, redirigirlo al dashboard
if (isset($_SESSION['id'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome-container">
        <div class="welcome-box">
            <h1>Bienvenido a nuestro sistema</h1>
            <p>Elige una opción para comenzar:</p>
            
            <!-- Botones de acción -->
            <div class="action-buttons">
                <a href="login.php" class="button">Iniciar sesión</a>
                <a href="register.php" class="button">Registrarse</a>
            </div>
        </div>
    </div>
</body>
</html>
