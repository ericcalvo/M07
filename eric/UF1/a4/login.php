<?php
    session_start();
    require "llibreria.php";
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        




        if ($_REQUEST["email"]=="eric@gmail.com" && $_REQUEST["contrasenya"]=="ericcalvo"){
            $_SESSION["usu"]=$_REQUEST["email"];
            $_SESSION["contra"]=$_REQUEST["contrasenya"];
            header("Location: login2.php");
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <form enctype="multipart/form-data" action="login.php" method="post">
                <p>Gmail: <input type="text" name="email"></p>
                <p>Contrasenya: <input type="password" name="contrasenya"></p>
                <button name="enviar" type="submit">Enviar</button></br></br>

            </form>
        </body>
    </html>
