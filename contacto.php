<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="estylos.css">
</head>
<body>

    <div class="form-container">
        <h1>Formulario de Contacto</h1>

        <form action="procesar.php" method="POST">

            <label>Nombre:</label>
            <input type="text" name="nombre" 
                   required minlength="3" maxlength="50"
                   pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ ]+">

            <label>Correo electrónico:</label>
            <input type="email" name="correo" required maxlength="150">

            <label>Mensaje:</label>
            <textarea name="mensaje" required minlength="5" maxlength="500"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
