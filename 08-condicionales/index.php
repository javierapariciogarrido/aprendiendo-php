<?php

/* 
 CONDICIONALES : if(condicion){
                    instrucciones
                 }else{
                    otras instrucciones
                 }
 * 
 * 
 * OPERADORES DE COMPARACIÓN : 
 * == EXACTAMENTE IGUAL
 * === IDENTICO
 * != DISTINTO
 * <>DIFERENTE
 * !== NO IDENTICO
 * < MENOR QUE 
 * > MAYOR QUE 
 * <= MENOR O IGUAL QUE 
 * >= MAYOR O IGUAL QUE 
 * 
 * 
 * OPERADORES LÓGICOS:PARA HACER VARIAS COMPARACIONES SEGUIDAS
 * && AND: Y
 * || OR :O
 * ! NOT :NO
 * 
 * 
 * 
 * 
 * 
 */

//Ejemplo 1 
$color = "rojo";

if($color=="verde"){
    echo "El color es rojo";
}else{
    echo "El color no es rojo";
}
echo "<br>";

//Ejemplo 2
$year =2019;

if($year>=2019){
    echo "Estamos de 2019 en adelante";
}else{
    echo "Es un año anterior a 2019";
}


//Ejemplo 3
$nombre="David Extremadura";
$edad=49;
$mayoria_edad=18;
$ciudad = "Madrid";
$continente = "Asia";

if($edad>=$mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
    if($continente == "Europa"){
        echo "<h2>Y es de $ciudad</h2>";
    }else{
        echo "No es de Europa";
    }    
        
    }else{
    echo "<h1>$nombre es menor de edad</h1>";
}

echo "<hr>";
// Ejemplo 4


$dia=2;

/*
if($dia==1){
    echo "Es lunes";
}else{
    if($dia==2){
        echo "Es martes";
    }else{
        if($dia==3){
            echo "Es miercoles";
        }else{
            if($dia==4){
                echo "Es jueves";
            }else{
                if($dia==5){
                    echo "Es viernes";
                }else{
                    echo "Es fin de semana";
                }
            }
        }
    }
}
*/

if($dia==1){
    echo "Es lunes";
}elseif($dia==2){
    echo "Es martes";
}elseif($dia==3){
    echo "Es miercoles";
}elseif($dia==4){
    echo "Es jueves";
}elseif($dia==5){
    echo "Es viernes";
}else{
    echo "Es finde";
}

echo "<hr>";
// SWITCH
$dia=7;
switch($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
}





echo "<hr>";
//EJEMPLO 5 

$edad1=18;
$edad2=64;
$edad_oficial=17;

if($edad_oficial>=$edad1 && $edad_oficial<=$edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "No puede trabajar";
    
}

echo "<hr>";

$pais="Francia";
if($pais=="Mexico" || $pais=="España"|| $pais== "Colombia"){
    echo "en este pais se habla español";
}else{
    echo "No se habla Español";
}

// GOTO : SE USA PARA DAR UN SALTO DE UNA PARTE DEL CÓDIGO A OTRO SALTANDOSE EL ORDEN SECUENCIAL
// DEL FLUJO NORMAL DEL PROGRAMA



echo "<h3>Intrucción 1</h3>";
goto marca;
echo "<h3>Intrucción 2</h3>";
echo "<h3>Intrucción 3</h3>";
echo "<h3>Intrucción 4</h3>";

marca:
    echo "<h1>Me he saltado el flujo del programa</h1>";