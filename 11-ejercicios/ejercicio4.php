<?php

/* 
    Ejercicio 4: Recoger dos numeros por parametro get y hacer las 4 operaciones básicas (
 *  (Suma.Resta,division y multiplicación)
 */

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1= $_GET['numero1'];
    $numero2=$_GET['numero2'];
    
    echo "<h1>CALCULADORA</h1>";
    echo "<hr>";
    echo "Suma: ".($numero1 + $numero2).'<br>';
    echo "Resta: ".($numero1-$numero2).'<br>';
    echo "Multiplicación: ".$numero1*$numero2.'<br>';
    echo "División: ".($numero1/$numero2).'<br>';
}else{
    echo "<h2>Te falta un numero por parámetro GET</h2>";
}


