<?php

/* Ejercicio 2:
    Escribir un programa con PHP que añada valores a un array mientras que su longitud sea menor 
    a 120 y luego mostrarlo por pantalla.
 */

$coleccion = [];

for($indice=0;count($coleccion)<120;$indice++){
    array_push($coleccion,"Elemento".$indice);
}

echo "<h2>Array Mostrado por pantalla: </h2>";

foreach ($coleccion as $dato){
    echo "<h4>$dato</h4>";
}

