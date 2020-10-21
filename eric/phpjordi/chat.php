<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form enctype="multypart/form-data" action="chat.php" method="post" name="myform">

    <label for="nombre">Nombre: </label> <input type="text" size="15" maxlength="100" name="nombre"/><br><br>
    <label for="texto">Texto: </label> <input type="text" size="30" maxlength="100" name="texto"/><br><br>
    <label for="fichero">Quieres enviar un fichero? </label><input type="file" accept="image" name="fichero" capture><br><br>
    <button id="enviar" type="submit" name="btnEnviar">Enviar Mensaje</button><br/><br/>

    <?php
	if (isset($_POST["btnEnviar"])){
            $file = fopen("chat.txt", "a");
            fwrite($file, $_REQUEST["nombre"].": ");
            fwrite($file, $_REQUEST["texto"]."\n");
	    fclose($file);
        }
	$file=fopen("chat.txt", "r");
        $text=fread($file, filesize("chat.txt"));
        echo nl2br($text)
    ?>


</body>
</html>
