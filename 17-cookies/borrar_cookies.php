<?php

/* 
    BORRAR COOKIES
 */

if(isset($_COOKIE['micookie'])){
    setcookie('micookie','',time()-100);
}


//Redirección a traves de PHP por la función header
header('Location:ver_cookies.php');
