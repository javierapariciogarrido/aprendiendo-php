<?php

/* 
    Ejercicio1: 
 * HACER UN PROGRAMA EN PHP QUE TENGA UN ARRAY CON 8 NUMEROS ENTEROS Y QUE HAGA LO SIGUIENTE:
 * 1) RECORRER ARRAY YMOSTRARLO 
 * 2) ORDENARLO Y MOSTRARLO
 * 3)MOSTRAR SU LONGITUD 
 * 4)BUSCAR ALGUN ELEMENTO DENTRO DEL ARRAY
 */

// FUNCION MOSTRARARRAY
function mostrarArray($numeros){
    $result="";
    $result.="<ul>";
    foreach ($numeros as $numero){
        $result.="<li> $numero </li>";
    }
    $result.="</ul>";
    
    
return  $result;  
}



//Creamos el array 
$numeros= [11,44,55,77,23,9,97,67];

// 1) Recorrer array y mostrarlo
echo "<h2>Array original</h2>";
echo mostrarArray($numeros);

// 2) Ordenarlo y mostrarlo
sort($numeros);
echo "<h2>Array ordenado</h2>";
echo mostrarArray($numeros);

//3) MOSTRAR SU LONGITUD
echo "<h3>Longitud del array: </h3>";
echo count($numeros);

// 4)BUSCAR ELEMENTO DENTRO DEL ARRAY 



if(isset($_GET['numero'])){
    $busqueda=$_GET['numero'];
    $resultado= array_search($busqueda,$numeros);

    echo "<h1>BUSQUEDA DEL NUMERO $busqueda</h1>";
    switch(gettype($resultado)){
        case 'integer': echo "<h2>EL RESULTADO BUSCADO ESTÁ EN LA POSICIÓN : $resultado</h2>";
                        break;
        case 'boolean': echo "<h2>NO SE HA ENCONTRADO RESULTADO PARA EL NÚMERO BUSCADO</h2>";
                        break;
    }

}else{
    echo "<h2>NO HAS INTRODUCIDO NINGÚN NÚMERO POR GET</h2>";
}





