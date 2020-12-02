<?php

/* 
    SISTEMA DE ARCHIVOS EN PHP
 */

//Abrir archivo: fopen(nombre fichero,modo)
//El modo puede ser:solo lectura('r'), solo escritura('w'),solo ejecucion('x'),lectura+escritura(a+)
/*
$archivo=  fopen('fichero_texto.txt','a+');

// Leer contenido archivo(Lo metemos en bucle para que mientras no se termine el fichero 
// vaya cargando line a linea)
while(!feof($archivo)){
    $contenido= fgets($archivo);//Carga una linea del archivo
    echo $contenido.'<br>';
}


// Escribir en un archivo
fwrite($archivo,'**Soy un texto metido desde PHP**');



//Cerrar archivo
fclose($archivo);

*/

// COPIAR FICHERO 
//copy('fichero_texto.txt','fichero_copiado.txt') or die("Error al copiar");

//RENOMBRAR UN FICHERO
//rename('fichero_copiado.txt','archivito_recopiadito.txt');


//ELIMINAR UN FICHERO
//unlink('archivito_recopiadito.txt') or die("Error al borrar");

// COMPROBAR SI UN FICHERO EXISTE (file_exists)

if(file_exists('fichero_texto1.txt')){
    echo "<h3>EL FICHERO EXISTE</h3>";
}else{
    echo "<h3>EL FICHERO NO EXISTE </h3>";
}