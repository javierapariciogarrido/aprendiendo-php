<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Subir archivos en PHP</title>
    </head>
    
    <body>
        <h1>Subir imagenes con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="archivo">Subir archivo</label><br>
            <input type="file" name="archivo"><br>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
    
</html>