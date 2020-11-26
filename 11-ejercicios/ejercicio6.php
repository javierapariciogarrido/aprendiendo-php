<?php

/* 
    Mostrar en una tabla de HTML con las tablas de multiplicar del 1 al 10 
 */


echo "<table border='1'>"; // Inicio de la tabla 
echo "<tr>";
for($cabecera=1;$cabecera<=10;$cabecera++){
    // Cabecera de la tabla
    echo "<th>";
    echo "Tabla del $cabecera";
    echo "</th>";
}
echo "</tr>"; // Fin cabecera


// Resto de la tabla se va completando creando la fila y luego rellenando toda la tabla x uno 
// luego toda la tabla por dos y asi.... Es decir se escribe fila por fila 
for($i=1;$i<=10;$i++){
    echo "<tr>"; // Inicio de cada fila de las tablas
    for($j=1;$j<=10;$j++){
        echo "<td>";   // Inicio de cada componente de la tabla de multiplicar
        echo $j.'x'.$i.'='.($i*$j);
        echo "</td>";  // Fin de cada componente de la tabla de multiplicar
    }
    echo "</tr>";  // Fin de cada fila de las tablas
}


echo"</table>";  // Fin de la tabla 


