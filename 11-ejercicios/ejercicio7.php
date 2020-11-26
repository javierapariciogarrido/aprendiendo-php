<?php

/* 
  
    Ejercicio 5: Hacer un programa que muestre todos los números IMPARES entre dos numeros que
    nos lleguen por get 
 
 */


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];
    if($numero1>$numero2){
        echo "EL PRIMER NUMERO NO PUEDE SER MAYOR QUE EL SEGUNDO";
    }else{
        echo "<h1>LOS NUMEROS IMPARES ENTRE EL $numero1 Y EL $numero2 SON: </h1>";
        for($contador=$numero1;$contador<=$numero2;$contador++){
            if($contador%2!=0){
                echo "<h2>$contador ES IMPAR</h2>";
            }else{
                echo "<h2>$contador ES PAR</h2>";
            }
        }
    }
}else {
    echo "<h2>FALTA QUE INTRODUZCAS ALGUN NÚMERO POR LA URL</h2>";
}
