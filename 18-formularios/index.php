<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <p>
                <input type="text" name="nombre">
            </p>
            
            <label for="apellido">Apellido:</label>
            <p>
                <input type="text" name="apellido" value="Mete tu Apellido...">
            </p>
            
            
            <label for="boton">Boton:</label>
            <p>
                <input type="button" name="boton" value="Mete tu Apellido...">
            </p>
            
            
            <label for="sexo">Sexo:</label>
            <p>
                Hombre<input type="checkbox" name="sexo" value="Hombre" checked="checked">
                Mujer<input type="checkbox" name="sexo" value="Mujer">
            </p>
            
            <label for="color">Color:</label>
            <p>
                <input type="color" name="color">
            </p>
            
            <label for="fecha">Fecha:</label>
            <p>
                <input type="date" name="fecha">
            </p>
            
            <label for="correo">Email:</label>
            <p>
                <input type="email" name="correo">
            </p>
            
            <label for="archivo">Archivo:</label>
            <p>
                <input type="file" name="archivo" multiple="multiple">
            </p>
            
            <label for="oculto">Oculto:</label>
            <p>
                <input type="hidden" name="oculto" value="heyyy">
            </p>
            
            <label for="numero">Número:</label>
            <p>
                <input type="number" name="numero">
            </p>
            
            <label for="pass">Contraseña:</label>
            <p>
                <input type="password" name="pass">
            </p>
            
            <label for="continente">Continente:</label>
            <p>
                América Latina<input type="radio" name="continente" value="America Latina">
                Europa<input type="radio" name="continente" value="Europa">
                Asia<input type="radio" name="continente" value="Asia">
            </p>
            
            <label for="web">Página Web:</label>
            <p>
                <input type="url" name="web">
            </p>
            
            <textarea name="TExtolargo"></textarea><br>

            <label for="peliculas">Peliculas:</label>
            <select name="peliculas">
                <option value="La verdad duele">La verdad duele</option>
                <option value="El señor de los anillos">El señor de los anillos</option>
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
            </select>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>



