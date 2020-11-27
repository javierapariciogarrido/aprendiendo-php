<?php


$cantantes=array('2pack','Jennifer Lopez','Drake','Alfredo');
$numeros=[2,5,2,8,1];


//FUNCIONES DE ARRAYS 
//ORDENAR ARRAYS POR ORDEN ALFABETICO: asort(array)

asort($cantantes);

foreach ($cantantes as $cantante){
    echo $cantante.'<br>';
}

// ORDENAR EN ORDEN INVERSO: arsort(array)

arsort($cantantes);
var_dump($cantantes);

// ORDENAR ALFABETICAMENTE EL VALOR Y EL INDICE DEL ARRAY A LA VEZ: sort(array)
sort($cantantes);
var_dump($cantantes);

// AÑADIR ELEMENTOS A UN ARRAY
$cantantes[]="NAtos";
var_dump($cantantes);

// OTRA FORMA DE AÑADIR ELEMENTO A ARRAY
array_push($cantantes, "Waor");
var_dump($cantantes);


//ELIMINAR DE UN ARRAY EL ULTIMO ELEMENTO QUE HAYA
array_pop($cantantes);
var_dump($cantantes);

//ELIMINAR UN INDICE CONCRETO DE UN ARRAY
unset($cantantes[2]);

var_dump($cantantes);

//OBTENER UN INDICE ALEATORIO DE UN ARRAY 

$indice=array_rand($cantantes);
echo $cantantes[$indice];

// DAR LA VUELTA A UN ARRAY
var_dump(array_reverse($cantantes));

// BUSCAR DENTRO DE UN ARRAY(SI LO QUE BUSCAMOS NO ESTA NOS DEVUELVE FALSE)
$resultado=array_search('Alfredo', $cantantes);
var_dump($resultado);

//CONTAR NUMERO DE ELEMENTOS DE UN ARRAY 
echo count($cantantes);

//OTRA FORMA DE CONTAR ELEMENTOS DE ARRAY 
echo sizeof($cantantes);

