<?php

/* 
    COOKIES: ES UN FICHERO QUE SE ALMACENA EN EL ORDENADOR DEL USUARIO QUE VISITA LA WEB, CON EL FIN
 * DE RECORDAR DATOS O RASTREAR EL COMPORTAMIENTO DEL MISMO EN LA WEB.
 * EN EL SERVIDOR SE GUARDA UNA PEQUEÑA REFERENCIA DE LA COOKIE PERO MAYORMENTE LA INFORMACIÓN SE 
 * ALOJA EN EL EQUIPO DEL CLIENTE 
 * VENTAJAS:PERSISTE LA INFORMACIÓN DURANTE EL TIEMPO QUE LAS COOKIES ESTÉN ALMACENADAS ,
 * PODEMOS SABER COMPORTAMIENTO DEL USUARIO QUE VISITA LA WEB PERO COMO 
 * DESVENTAJA ESTA QUE EL CLIENTE PUEDE MANIPULAR ESAS COOKIES  ,BORRARLAS ETC.
 */

//Crear cookie
// Estructura:setcookie('nombre','valor que solo puede ser texto',caducidad,ruta,dominio);

//Cokkie básica
setcookie('micookie',"valor de mi galleta");

//Cookie con expiración(caducidad) de un año 
setcookie('unyear','valor de mi cookie de 365 dias',time()+(60*60*24*365));



//Redirección a traves de PHP por la función header
header('Location:ver_cookies.php');