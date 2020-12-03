<?php

/* 
    Ejercicio 2:
 * 1. Una función 
 * 2. Validar un email con FILTER_VAR y devolver resultado
 * 3.REcoger una variable por get y validarla
 * 4.Mostrar el resultado
 */

function ValidaEmail($email){
    $status = 'ko';
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status='ok';
    }
return $status;    
}



if(isset($_GET['email'])){
    $resultado=ValidaEmail($_GET['email']);
    if($resultado=='ok'){
        echo "<p style='color:green;'>EL EMAIL ".$_GET['email']." ES CORRECTO</p>";
    }else{
        echo "<p style='color:red;'>EL EMAIL ".$_GET['email']." ES INCORRECTO</p>";
    }
}else{
    echo "<h1>INTRODUCE VARIABLE EMAIL POR GET </h1>";
}

