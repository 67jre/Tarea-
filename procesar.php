<?php
// Conexión directa a la base de datos
$conexion = new mysqli(
    "sql303.infinityfree.com",
    "if0_40460672",
    "UK2U57yQTyJC",
    "if0_40460672_practs"
);

// Verificar conexión
if ($conexion->connect_error) {
    die("❌ Error de conexión: " . $conexion->connect_error);
}

// Validar que llegaron los datos
if (
    !isset($_POST['nombre']) ||
    !isset($_POST['correo']) ||
    !isset($_POST['mensaje'])
) {
    die("Error: faltan datos.");
}

// Sanitizar
$nombre  = trim($_POST['nombre']);
$correo  = trim($_POST['correo']);
$mensaje = trim($_POST['mensaje']);

// Validaciones
if (strlen($nombre) < 3) die("Nombre demasiado corto.");
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) die("Correo inválido.");
if (strlen($mensaje) < 5) die("Mensaje demasiado corto.");

// Insertar en la BD
$sql = "INSERT INTO mensajes (nombre, correo, mensaje)
        VALUES ('$nombre', '$correo', '$mensaje')";

if (!$conexion->query($sql)) {
    die("Error al guardar: " . $conexion->error);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje enviado</title>
    <link rel="stylesheet" href="estylos.css">
</head>
<body class="confirm-body">

    <div class="confirm-card">
        <h1>✔ ¡Mensaje enviado y guardado!</h1>

        <p>Gracias <strong><?php echo htmlspecialchars($nombre); ?></strong>.</p>
        
        <a href="index.html" class="confirm-btn">Volver al inicio</a>
    </div>

</body>
</html>