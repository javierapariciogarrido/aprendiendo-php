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

<br>
<hr>


<h1>LISTADO DE IMAGENES SUBIDAS AL SERVIDOR</h1>
<?php 
// AQUI AHORA RECORREREMOS EL DIRECTORIO IMAGES PARA IR CARGANDO CADA IMAGEN SI EXISTE EL 
//DIRECTORIO PARA ELLO LEEMOS EL DIRECTORIO IMAGES SI EXISTE Y VA MOSTRANDO EL CONTENIDO DEL 
//DIRECTORIO IMAGES


if(is_dir('images')): 
    $directorio=opendir('images'); // Metemos el directorio en variable
    
    while($image=readdir($directorio)): // El contenido de directorio lo metemos en image
        if($image!='.' && $image!='..'):
            echo "<img src='images/$image' width='200px'> <br>";
        endif;
    endwhile;
else:
    echo "<p>NO HAY NINGUNA IMAGEN</p>";
endif;


