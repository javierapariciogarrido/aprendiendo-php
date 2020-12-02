<?php
    $error = 'faltan_valores';
    // COMPROBAR QUE LLEGAN POR POST TODOS LOS CAMPOS DEL FORMULARIO RELLENADO
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) &&   
       !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass']) ){
        $error='ok';
        
        $nombre = $_POST['nombre'];
        $apellidos= $_POST['apellidos'];
        $edad = (int)$_POST['edad'];// TENGO QUE CASTEAR LA EDAD A ENTERO XQ VIENE DE POST EN STRING
        $email=$_POST['email'];
        $password=$_POST['pass'];
        
        
        // Validamos si nombre solo sean letras sino da error 
        if(preg_match('/[0-9]+/',$nombre)){
            $error='nombre';
        }
        
        //// Validamos si apellidos solo sean letras sino da error 
        if(preg_match('/[0-9]+/',$apellidos)){
            $error='apellidos';
        }
        
        // Validamos si edad es tipo numerico sino da error 
        if(!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)){
            $error='edad';
        }
        
        // Validamos si email es tipo email sino da error 
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error='email';
        }
        
        // Validamos si password es menor de 5 caracteres da error 
        if(strlen($password)<5){
            $error='password';
        }
        
        
    }else{
        $error = 'faltan_valores';
    }
    
    //SI AL FINAL DE VALIDACIÓN HAY ALGÚN ERROR REDIRECCIONAMOS AL FORMULARIO CON EL ERROR POR GET 
    if($error !='ok'){
        header("Location:index.php?error=$error");    
    }

?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validación de Formularios con PHP</title>
    </head>
    <body>
        <?php  if($error == 'ok'):?>
        <h1>DATOS VALIDADOS CORRECTAMENTE</h1>
            <p><?=$nombre?></p>
            <p><?=$apellidos?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
            
        <?php endif; ?>
    </body>
</html>