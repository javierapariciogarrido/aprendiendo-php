<?php

// DIRECTORIOS 

// CREAR DIRECTORIO
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta',0777) or die('No se puede crear la carpeta');
}else{
    echo "<h3>LA CARPETA YA EXISTE</h3>";
} 

// BORRAR DIRECTORIO
//rmdir('mi_carpeta');

// RECORRER TODO EL CONTENIDO DE EL DIRECTORIO

echo '<hr> <h1>CONTENIDO DE CARPETA</H1>';

$gestor=opendir('mi_carpeta');
//if($gestor = opendir('./mi_carpeta')){
    
    while(false !==($archivo=readdir($gestor))){
        if($archivo !='.' && $archivo!='..'){
            echo $archivo.'<br>';
        }
    }
//}




