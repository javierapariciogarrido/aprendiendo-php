<?php

/* 
    Ejercicio 5: Hacer un programa que muestre todos los números entre dos numeros que nos lleguen 
    por get 
 */


if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
       
    $numero1 = ($_GET['numero1']);
    $numero2 = ($_GET['numero2']);
    
    
    if($numero1<$numero2){
        echo "<h3>Los numeros que hay entre el $numero1 y el $numero2, son: </h3>";
        for($contador=$numero1;$contador<=$numero2;$contador++){
            echo "<p>$contador</p>";
        }
    }else{
        echo "<h2>ERROR EL PRIMER NÚMERO NO PUEDE SER MAYOR QUE EL SEGUNDO</h2>";
    }
}else{
    echo "<h2>Faltan numeros por GET</h2>";
}



