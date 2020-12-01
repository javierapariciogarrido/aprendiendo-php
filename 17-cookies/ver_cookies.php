<?php

/* 
    PARA MOSTRAR EL VALOR DE LAS COOKIES, TENGO QUE USAR $_COOKIE, QUE ES UNA VARIABLE SUPERGLOBAL
    DISPONIBLES EN TODAS LAS`PÁGINAS DEL PROYECTO DE PHP Y ES UN ARRAY ASOCIATIVO COMO $_GET,$_POST,
    $_SESSION.
 */

// Comporbamos si existe la cookie:
if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
    
}else {
    echo "<h2>NO EXISTE LA COOKIE</h2>";
}

if(isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "<h2>NO EXISTE LA COOKIE</h2>";
}

?>


<a href="crear_cookies.php">Crear mis galetas</a><br>
<a href="borrar_cookies.php">Borrar mis galletas</a>