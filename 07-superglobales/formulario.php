<!DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Formulario en PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form action="recibir.php" method="POST">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
            </p>
            
            <input type="submit" value="Enviar">
                   
        </form>
    </body>
    
</html>
