<?php

/* 
 BUCLE WHILE:ESTRUCTURA DE CONTROL QUE ITERA O REPITE LA EJECUCIÓN DE UNA SERIE DE INSTRUCCIONES
 * QUE CONTIENE DENTRO Y SE REPETIRAN ESAS INSTRUCCIONES MIENTRAS QUE LA CONDICIÓN PRINCIPAL DEL 
 * BUCLE SE CUMPLA
    while(condicion){
        instrucciones
       instrucciones
       
    }             
 *  */

$numero = 1;
while ($numero<=100){
    echo $numero;
    if($numero!=100){
        echo ", ";
    }
    $numero++;
}
    
echo "<hr>";

//Ejemplo


if(isset($_GET['numero'])){
    $numero=$_GET['numero'];
    echo "<h2>Tabla de multiplicar del numero $numero </h2>";
    $iteracion=0;
    while ($iteracion<=10){
        echo "<p>$numero x $iteracion = ".($numero*$iteracion).'</p>';
        $iteracion++;
    }
    
}else{
    echo "NO HAS INTRODUCIDO PARÁMETRO GET";
}


// DO WHILE : EJECUTA BLOQUE DE INSTRUCCIONES AL MENOS UNA VEZ Y LUEGO EVALUA LA CONDICIÓN,
// SI LA CONDICIÓN SE CUMPLE ENTRA EN EL BUCLE POR SEGUNDA VEZ,SINO SALE PERO MINIMO SE EJECUTAN
//LAS INSTRUCCIONES UNA VEZ 
echo "<hr>";
$edad = 18;
$contador=1;
do{
    echo "<h2>tienes acceso al local privado $contador</h2>";
    $contador++;
}while($edad>=18 && $contador <=10);
