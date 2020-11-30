<?php

/* 
    Ejercicio 4: Crear un script de php que tenga 4 variables, una de tipo array otra de tipo 
 * string otra int y otra booleana y que imprima un mensaje según el tipo de variable que sea.
 */

$datoarray = [0,3,5,6,77,75,3,1];
$datostring="Hola esta es la variable string";
$datoint=34;
$variableboleana=false;

if (is_array($datoarray)){
    echo "<h3>La variable es un array</h3>";
}

if(is_string($datostring)){
    echo "<h3>$datostring</h3>";
}
if(is_int($datoint)){
    echo "<h3>$datoint</h3>";
}

if (is_bool($variableboleana)){
    echo "<h3>El Booleano es falso</h3>";
}




