<?php

/* 
    ARRAYS : Es un tipo de dato que contiene una colección de datos/valores dentro.
  Para sacar un elemento del array hay que poner el nombre del array y entre corchetes el valor 
 * de su indice.El primer elemento del array tiene indice 0,el segundo indice 2 y asi sucesivamente.   
  Para acceder a esos valores podemos usar un índice numerico o alfanumerico
 
 */

$peliculas = ['Batman','Spiderman','El señor de los anillos'];

$cantantes=array('2pack','Jennifer Lopez','Drake');

//Array asociativo;
$personas=[
    'nombre'=>'Javier',
    'apellidos'=>'Aparicio',
    'web'=>'webjavier.com'
];

echo ($personas['apellidos']);

echo $peliculas[0];
echo "<br>";
echo $cantantes[1];

//Recorrer array con for
echo "<h2>LISTADO DE PELICULAS</h2>";
echo "<hr>";
for($indice=0;$indice<count($peliculas);$indice++){
    echo "<h4>$peliculas[$indice]</h4>";
}

// REcorrer array con foreach : Estructura : 
// foreach(array as variable donde se almacena contenido del elemento del array)
foreach($peliculas as $pelicula){
    echo $pelicula.'<br>';
}

//ARRAY MULTIDIMENSIONAL

$personas = [
                ['nombre'=>'Javier',
                 'email'=>'javiapaga@hotmail.com'
                ],
                ['nombre'=>'Antonio',
                 'email'=>'antonio@antonio.com'   
                ],
                ['nombre'=>'Paco',
                 'email'=>'paco@paco.com'   
                ]
    
            ];

var_dump($personas);

echo $personas[2]['email'];

echo '<hr>';

foreach($personas as $persona){
    echo "<h3>".$persona['nombre']."</h3>"; 
    echo "<h3>".$persona['email']."</h3>";
    echo '<br>';
}