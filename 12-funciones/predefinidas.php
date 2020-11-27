<?php


/* 
 FUNCIONES PREDEFINIDAS:Funciones que trae ya el lenguaje PHP, por ejemplo:
 */


$nombre= "Javier";


var_dump($nombre); //Debuggear, Nos dice el contenido que tiene la variable.

//Funciones de fecha:
//date(d-m-Y): Nos da la fecha en el formato que le hemos pasado entre paréntesis
echo date('d-m-Y').'<br>';

//date('H:i:s'): Nos da la hora actual en formato horas(H),minutos(i) y segundos(s)
echo date('H:i:s').'<br>';

// time():Fecha en formato Unix, nunca se repite.Es una cifra numérica.

echo time().'<br>';

// FUNCIONES MATEMÁTICAS :
echo "Raiz cuadrada del número 10: ".sqrt(10).'<br>';

// NÚMERO ALEATORIO: POR EJEMPLO ENTRE 10 Y 40 EL NÚMERO
echo "Número aleatorio entre 10 y 40: ".rand(10,40);

echo '<br>';

// SACAR NUMERO PI
echo "Número pi: ".pi();

echo "<br>";

//REDONDEO 
echo "Redondear: ".round(7.891234).'<br>'; // HAce un redondeo sin decimales.
echo "Redondear: ".round(7.891234,1).'<br>'; //Hace redondeo con un decimal ,es decir el segundo
                                      //parámetro que pasamos son los decimales que quiero


//MAS FUNCIONES GENERALES : 
//gettype($nombre): Nos da el tipo de dato de una variable

echo gettype($nombre).'<br>'; 

// FUNCION PARA COMPROBAR SI UNA VARIABLE ES DE UN TIPO DETERMINADO : 
// POR EJEMPLO SI QUEREMOS SABER SI ES STRING
if (is_string($nombre)){
    echo "La variable es de tipo string";
}else{
    echo "La variable no es de tipo string";
}

echo '<br>';

// FUNCION PARA COMPROBAR SI VARIABLE EXISTE EN PROGRAMA Y ESTA DEFINIDA:
if (isset($nombre)){
    echo "LA variable existe";
}else{
    echo "La variable no existe";
}


echo '<br>';


//FUNCION trim(variable): Nos limpia el contenido de la variable y nos quita espacios en blanco

$frase = "              mi contenido            ";

var_dump($frase);
var_dump(trim($frase));

echo "<br>";


// ELIMINAR VARIABLES O INDICES DE ARRAYS
$year=2020;
if(isset($year)){
    echo "existe year";
}else {
    echo "No existe year";
}
unset($year);
echo "<br>";
if(isset($year)){
    echo "existe year";
}else {
    echo "No existe year";
}

echo "<br>";

// COMPROBAR VARIABLE VACIA ( empty(variable)

$texto = "";

if(empty($texto)){
    echo "La variable texto está vacía";
    
}else{
    echo "La variable texto tiene contenido";
}


echo "<br>";


// CONTAR CARACTERES DE UN STRING:
$cadena = "12345";

echo strlen($cadena);

echo "<br>";

// Encontrar caracter o palabra dentro de un string : strpos(variable,palabra a buscar)
$frase= "La vida es bella";

echo strpos($frase,'vida'); //Devuelve la posicion a partir de la cual encuentra lo buscado 
// Si no lo encuentra devuelve false

echo '<br>';
//  Reemplazar palabras dado un string:
$frase= str_replace('vida','moto',$frase);
echo $frase;

echo '<br>';
// convertir a mayusculas y a minusculas
echo strtolower($frase).'<br>';
echo strtoupper($frase).'<br>';