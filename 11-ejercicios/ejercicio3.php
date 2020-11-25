<?php

/* 
 Ejercicio 3: Escribir programa que imprima por pantalla los cuadrados de los 40 primeros numeros 
 * naturales.
 * PD:Utilizar bucle while 
 */


$contador = 0;
while($contador<=40){
    $cuadrado = ($contador*$contador);
    echo "<h2>El cuadrado del numero $contador es: $cuadrado </h2>";
    $contador++;
}

// Con el bucle for:

for($contador=0;$contador<=40;$contador++){
    $cuadrado=($contador*$contador);
    echo "<h2>El cuadrado del numero $contador es $cuadrado</h2>";
}

