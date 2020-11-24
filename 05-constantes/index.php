<?php

// Constantes :Es un contenedor de información que no puede variar 
define('nombre','Javier');
define('Apellido','Aparicio');
echo '<h1>'.nombre.' '.Apellido.'</h1>';


// CONSTANTES PREDEFINIDAS

echo PHP_OS.'<br>'; // NOS DA LA INFORMACIÓN DEL SISTEMA OPERATIVO
echo PHP_VERSION.'<br>';; // NOS DICE LA VERSIÓN DE PHP QUE ESTAMOS USANDO
echo PHP_EXTENSION_DIR.'<br>';;
echo __LINE__.'<br>';;
echo __FILE__.'<br>';;

function hola(){
    echo __FUNCTION__;
}


hola();