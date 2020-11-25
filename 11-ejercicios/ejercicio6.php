<?php

/* 
    Mostrar en una tabla de HTML con las tablas de multiplicar del 1 al 10 
 */


echo "<table border='1'>"; // Inicio de la tabla 
echo "<tr>";
for($i=1;$i<=10;$i++){
    // Cabecera
    echo "<th>";
    echo "Tabla del $i";
    echo "</th>";
    
    
}
echo "</tr>"; // Fin cabecera

// Inicio de otra fila 
for($i=1;$i<=10;$i++){
    echo "<tr>"; // Inicio de cada fila de las tablas
    for($j=1;$j<=10;$j++){
        echo "<td>";
        echo $j.'x'.$i.'='.($i*$j);
        echo "</td>";
    }
    echo "</tr>";
}


echo"</table>";  // Fin de la tabla 


/*
<table>
    <th>
        Tabla del 1 
    </th>
    <th>
        Tabla del 2
    </th>
</table>


for($i=1;$i<=10;$i++){
    for($j=1;$j<=10;$j++){
        
    }
}
*/