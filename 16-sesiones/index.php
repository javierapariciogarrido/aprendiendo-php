<?php

/* 
    Sesiones: Una manera de Almacenar y persistir datos del usuario mientras que navega en un
 *  sitio web hasta que cierra sesión o se cierra el navegador.
    Ventajas : Puede almacenar gran cantidad de información además de ser muy seguras ya que 
 *  la información se aloja en el servidor web y el cliente no tiene acceso a manipularla.
 *  Desventaja:Se pierde la información al cerrar el navegador.
 *  */


// Iniciar la sesión
session_start();

//Variable local 
$variable_normal="soy una cadena de texto";

// Variable de sesión
$_SESSION['variable_persistente']="HOLA SOY UNA SESIÓN ACTIVA";

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'];

