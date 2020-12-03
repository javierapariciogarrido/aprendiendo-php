<?php


$archivo=$_FILES['archivo'];


$nombre = $archivo['name']; // Nos sirve para guardar la imagen con el nombre original 
$tipo=$archivo['type']; //Para comrobar si el archivo  subido es una imagen 


if($tipo == "image/jpg" || $tipo== "image/jpeg" || $tipo=="image/png" || $tipo=="image/gif"){
    //Crear del directorio donde voy a subir mis imagenes sino existe
    //lo creo 
    if(!is_dir('images')){
        mkdir('images',0777);
    }
    // PASO LA IMAGEN DE LA CARPETA TEMPORAL A MI CARPETA CREADA
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre );
    
    // MOSTRAMOS MENSAJE DE SUBIDA CORRECTA Y REDIRIGIMOS TRAS 5 SEGUNDOS
    header('Refresh: 5;URL=index.php');
    echo "<h1>IMAGEN SUBIDA CORRECTAMENTE</h1>";
    
}else{
    // REDIRECCIÓN DESPUES DE ESPERAR 3 SEGUNDOS
    header('Refresh: 5;URL=index.php');
    echo '<h3>SUBE UNA IMAGEN CON UN FORMATO CORRECTO , POR FAVOR ...</h3>';
}
