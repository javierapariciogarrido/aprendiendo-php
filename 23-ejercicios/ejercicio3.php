<?php

/* 
    Ejercicio 3: Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones,
 *  uno para sumar otro para restar otro para dividir y otro para multiplicar y que nos muestre 
 * el resultado por pantalla.
 */

$resultado = false;
if(isset($_POST['numero1']) && isset($_POST['numero2'])){
    if(isset($_POST['sumar'])){
        $resultado=($_POST['numero1']+ $_POST['numero2']);
    }
    if(isset($_POST['restar'])){
        $resultado=($_POST['numero1']- $_POST['numero2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado=($_POST['numero1']* $_POST['numero2']);
    }
    if(isset($_POST['dividir'])){
        $resultado=($_POST['numero1']/ $_POST['numero2']);
    }
}


?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Calculadora intelJAvi</title>
    </head>
    <body>
        <h1>CALCULADORA</h1>
        <hr>
        <form action="" method="POST">
            <label for="numero1">NUMERO 1:</label>
            <input type="number" name="numero1">
            <br>
            <label for="numero2">NUMERO 2:</label>
            <input type="number" name="numero2">
            <br>
            
            <input type="submit" value="SUMAR" name="sumar">
            <input type="submit" value="RESTAR" name="restar">
            <br>
            <input type="submit" value="MULTIPLICAR" name="multiplicar">
            <input type="submit" value="DIVIDIR" name="dividir">
            <br>
            <br>
            <br>
            <hr>
            
            
        </form>
        
        <br>
        <br>
        <br>
        <hr>
        <h1>RESULTADO:</h1>
        <?php
        
            if($resultado!=false || $resultado==0):
                echo "<h2>$resultado</h2>";
            endif;
        ?>
        
    </body>
</html>

