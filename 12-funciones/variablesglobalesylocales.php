<?php

/* 
    Variables locales:Variables que se definen dentro de una función y no pueden ser usadas 
    fuera de la función , solo están disponibles dentro(A no ser que hagamos un return)
 
    Variables Globales:Se declaran fuera de una función y están disponibles dentro y fuera de las 
    funciones.
 */

//Variable Global
$frase = "Ni los genios son tan genios , ni los mediocres tan mediocres";

echo $frase;

function holaMundo(){
    global $frase;
    
    echo "<h1> $frase </h1>";
    $year = 2019;
    echo "<h1>$year</h1>";
return $year;
}



echo holaMundo();


//Funciones variables (Meter el nombre de una función en una variable)

function buenasDias(){
    return "<h1>Hola ! Buenos días</h1>";
}

function buenasTardes(){
    return "<h1>Hey que tal ha ido la comida</h1>";
}

function buenasNoches(){
    return "<h1>Te vas a dormir ya?,Buenas noches!!</h1>";
}

$horario="Noches";

$mifuncion = "buenas".$horario;
echo $mifuncion();
