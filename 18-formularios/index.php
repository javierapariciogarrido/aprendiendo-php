<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <p>
                <input type="text" name="nombre">
            </p>
            
            <label for="apellido">Apellido:</label>
            <p>
                <input type="text" name="apellido" value="Mete tu Apellido...">
            </p>
            
            
            <label for="boton">Boton:</label>
            <p>
                <input type="button" name="boton" value="Mete tu Apellido...">
            </p>
            
            
            <label for="sexo">Sexo:</label>
            <p>
                Hombre<input type="checkbox" name="sexo" value="Hombre" checked="checked">
                Mujer<input type="checkbox" name="sexo" value="Mujer">
            </p>
            <label for="apellido">Apellido:</label>
            <p>
                <input type="text" name="apellido" value="Mete tu Apellido...">
            </p>
            <label for="apellido">Apellido:</label>
            <p>
                <input type="text" name="apellido" value="Mete tu Apellido...">
            </p>
            <label for="apellido">Apellido:</label>
            <p>
                <input type="text" name="apellido" value="Mete tu Apellido...">
            </p>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>