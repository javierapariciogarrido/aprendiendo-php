<?php

/* Ejercicio 1: Crear una sesión que aumente su valor en 1 o disminuya en 1 en función de si el
 * parametro get counter está a uno o a 0.
 * 
 */
//Iniciamos sesión
session_start();

// Si la variable de sesión con indice variable no existe la inicializamos a 0
if(!isset($_SESSION['variable'])){
    $_SESSION['variable']=0;
}

// Si el parametro get se lo pasamos y vale 0 decrementamos la variable de sesión variable
if(isset($_GET['counter']) &&  $_GET['counter']==0){
    $_SESSION['variable']--;
}

// Si el parametro get se lo pasamos y vale 1 incrementamos la variable de sesión variable
if(isset($_GET['counter']) && $_GET['counter']==1){
    $_SESSION['variable']++;
}

echo "<h1>".$_SESSION['variable']."</h1>";
echo "<a href='ejercicio1.php?counter=1'>Aumentar</a><br>";
echo "<a href='ejercicio1.php?counter=0'>Disminuir</a>";
?>


