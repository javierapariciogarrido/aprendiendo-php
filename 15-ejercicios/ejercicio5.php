<?php

/* 
    Ejercicio 5: Crear un array con el contenido de:
 * 
 * ACCION    AVENTURA                   DEPORTES
 * GTA       ASSASINS                   FIFA 19 
 * COD       CRASH                      PES 19 
 * PUG       PRINCE OF PERSIA           MOTO GP 19
 * 
 * Cada columna debe ir en un fichero separado
 */

$tabla = [
            'ACCIÓN'=>['GTA','COD','PUG'],
            'AVENTURA'=>['ASSASINS','CRASH','PRINCE OF PERSIA'],
            'DEPORTES'=>['FIFA 19','PES 19','MOTO GP']
        ];

$categorias= array_keys($tabla); 
?>
      


<table border="1">
    <tr>
        <?php foreach ($categorias as $categoria){?>
            <th>
               <?php $categoria; ?> 
            </th>
        <?php}?>
        
            
    </tr>
</table>
 











