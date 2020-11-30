<?php

/* 
    Ejercicio 3: Hacer un programa que compruebe si una variable está vacia y si está vacía 
    rellenarla con texto en minusculas y mostrarlo en mayusculas y en negrita.
 */

$dato ="";

if (empty($dato)){
    $dato="Hola que tal";
    $datominusculas=strtolower($dato);
    echo '<strong>'.strtoupper($datominusculas).'</strong>';
}else{
    echo "<h2>La variable no está vacía.</h2>";
}



