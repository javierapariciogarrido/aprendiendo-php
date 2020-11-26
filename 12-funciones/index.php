<?php

/* 
    FUNCIONES : Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto y que 
    pueden reutilizarse solamente invocando a la función tantas veces como queramos.
 */

//Ejemplo 1
 function muestranombres(){
    echo "Victor Robles <br>";
    echo "Javi<br>";
    echo "Juan<br>";
    echo "Pablo<br>";
    echo "<hr>";
}

//Invocar funcion 

muestranombres();
muestranombres();
muestranombres();

// Ejemplo 2 

function tabla($numero){
    echo "<h3>Tabla de multiplicar del número $numero</h3>";
    echo "<hr>";
    for($i=0;$i<=10;$i++){
        echo "$numero x $i = ".($numero*$i).'<br>'; 
    }
    echo "<hr>";
}

/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay número para sacar la tabla";
}
*/

for($i=1;$i<=10;$i++){
    tabla($i);
}

//Ejemplo 3

function calculadora($numero1,$numero2,$negrita=false){
    $cadena_texto="";
    if($negrita){
        $cadena_texto.="<h1>";
    }
    $cadena_texto.="Suma: ".($numero1+$numero2)."<br>";
    $cadena_texto.="Resta: ".($numero1-$numero2)."<br>";
    $cadena_texto.="Multiplicación: ".($numero1*$numero2)."<br>";
    $cadena_texto.="División: ".($numero1/$numero2)."<br>";
    if($negrita){
        $cadena_texto.="</h1>";
    }
    $cadena_texto.="<hr>";
return $cadena_texto;
}

echo calculadora(10,30);
echo calculadora(10,30,true);
echo calculadora(10,30);


// Ejemplo 4

function getNombre($nombre){
    $texto= "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos){
    $texto=" y los apellidos son: $apellidos";
return $texto;    
}



function devuelveElNombre($nombre,$apellidos){
    $texto=getNombre($nombre).getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre('Juan','Perez');

