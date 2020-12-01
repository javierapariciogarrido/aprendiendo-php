<?php

/* 
    Ejercicio 5: Crear un array con el contenido de:
 * 
 * ACCION    AVENTURA                   DEPORTES
 * GTA       ASSASINS                   FIFA 19 
 * COD       CRASH                      PES 19 
 * PUG       PRINCE OF PERSIA           MOTO GP 19
 * 
 * Cada fila debe ir en un fichero separado
 */

$tabla = [
            'ACCIÓN'=>['GTA','COD','PUG'],
            'AVENTURA'=>['ASSASINS','CRASH','PRINCE OF PERSIA'],
            'DEPORTES'=>['FIFA 19','PES 19','MOTO GP']
        ];

//Almacenar en un array los indices principales del array tabla con función array_keys($tabla)
$categorias= array_keys($tabla); 


    
// Impresión de la tabla separado en archivos por cabecera y filas
    require_once 'includes/encabezados.php';
    require_once 'includes/fila1.php'; 
    require_once 'includes/fila2.php'; 
    require_once 'includes/fila3.php'; 
    
    

 











