<?php
    session_start();
    require "llibreria.php";

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION["usu"]=$_REQUEST["email"];
        $_SESSION["contra"]=$_REQUEST["contrasenya"];
        setcookie("usercookie", sha1(md5($_REQUEST["email"])), time() + 365 * 24 * 60 * 60);
        setcookie("passcookie", sha1(md5($_REQUEST["contrasenya"])), time() + 365 * 24 * 60 * 60);
        
        $comprovacioEmail = validacioEmail($_SESSION["usu"]);
        $comprovacioContra = validacioContra($_SESSION["contra"]);
        if ($comprovacioEmail == TRUE &&  $comprovacioContra == TRUE){
            if ($_COOKIE["usercookie"]== sha1(md5("eric@gmail.com")) && $_COOKIE["passcookie"]==sha1(md5("ericcalvo"))){
                header("Location: login2.php");
            }
            else{
                echo "Usuari o Contrasenya incorrecta";
            }
        }else {
            echo "Contrasenya o mail sense format indicat";
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
                <p>Email: <input type="text" name="email"></p>
                <p>Contrasenya: <input type="password" name="contrasenya"></p>
                <p>Aceptar cookies? <input type="checkbox" name="Aceptar"></p>
                <button name="enviar" type="submit">Enviar</button></br></br>

            </form>
        </body>
    </html>
